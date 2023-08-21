<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Page;

class PagesController extends Controller
{
    //

    public function index(){

        $pages = Page::paginate(10);
        return view('admin.pages.pages')->with(["pages"=>$pages]);

    }

    public function addPage(){

        return view('admin.pages.create');
    }

    public function createpage(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'meta_title' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);

        $page = new Page;
        $page->page_name = $request->name;
        $page->meta_title = $request->meta_title;
        $page->location = $request->location;
        $page->meta_description = $request->description;
        $page->content = $request->content;
        $page->save();
        if(!is_null($page)) 
        {
            return redirect(route('admin.page'))->with('message', 'Page Inserted');
        }
    }

    public function edit($id){

        $id = decrypt($id);
        $page = Page::where('id',$id)->first();
        
        return view('admin.pages.edit')->with(["page"=>$page]);
    }

    public function update(Request $request,$id){

        $id = decrypt($id);
        $validatedData = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'meta_title' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);

    
        $result=Page::where('id',$id)->update([
            'page_name' => $request->name,
            'meta_title' => $request->meta_title,
            'location' => $request->location,
            'meta_description' => $request->description,
            'content' => $request->content,

        ]);
        if($result==1)
        {   
            
            return redirect(route('admin.page'))->with('message', 'Page data Has Been Updated');
        }
    }

    public function delete($id)
    {
        //echo $id;
        $id = decrypt($id);
        $page=Page::find($id);  
        $page->delete();
        return redirect(route('admin.page'))->with('message', 'Page data Has Been deleted');  
    }
}
