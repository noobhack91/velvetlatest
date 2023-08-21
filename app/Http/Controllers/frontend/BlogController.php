<?php

namespace App\Http\Controllers\frontend;


use DB;
use Illuminate\Support\Str; // Import the Str class
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog; // Make sure to import the Blog model

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(10);
        return view('pages.blog')->with(["blogs" => $blogs]);
    }

    public function search(Request $request)
    {
        $name = $request->get('name');
        $location = $request->get('location');
        $userid = $request->get('userid');

        $where = '';

        if (isset($name) && $name != '') {
            $where .= 'AND users.name = "' . $name . '"';
        }
        if (isset($location) && $location != '') {
            $where .= 'AND models.city = "' . $location . '"';
        }
        if (isset($userid) && $userid != '') {
            $where .= 'AND users.id = "' . $userid . '"';
        }

        $result = DB::select("SELECT users.id,users.name,models.city from users INNER JOIN models
        ON users.id = models.user_id where users.role='model' $where");

        return view('pages.blog')->with(["result" => $result]);
    }
	public function show($title)
{
    $blog = Blog::where('blog_title', $title)->firstOrFail();

    return view('pages.details', compact('blog'));
}
}
