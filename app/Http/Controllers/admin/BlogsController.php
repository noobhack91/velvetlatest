<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Modeles;
use App\Models\Blog;
use Auth;
class BlogsController extends Controller
{
    //
    public function blogs(){

        $blogs = Blog::paginate(10);
        return view('admin.blogs.blogs')->with(["blogs"=>$blogs]);
        
    }

    public function addBlog(){

        return view('admin.blogs.create');

    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required',
            'blog_photo' => 'required',
            'description' => 'required',
            
        ]);

        $blog = new Blog;
        $blog->blog_title = $request->name;
        $blog->descripion = $request->description;
		$blog->user_id = Auth::id();
        if($request->hasfile('blog_photo'))
        {
            
            $file=$request->file('blog_photo');
            $filename_original=$file->getClientOriginalName();
            $name = time().rand(1,100).'.'.$file->extension();
            $file->move(public_path().'/images/', $name); 
            $blog->original_filename=$filename_original;
            $blog->filename=$name ? $name:'';
            $blog->file_path=public_path().'/images/';
            $blog->file_url=asset('/images/'.$name);
            
            
        }
        $blog->save();
        return redirect(route('admin.blogs'))->with('message', 'Blog Inserted.');
    }

    public function edit($id){
        $id = decrypt($id);
        $blog = Blog::where('id',$id)->first();
        
        return view('admin.blogs.edit')->with(["blog"=>$blog]);
    }

    public function update(Request $request,$id){
        $id = decrypt($id);
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
          ]);

        $blog_title = $request->name;
        $descripion = $request->description;
    
        if($request->hasfile('blog_photo'))
        {
            $file=$request->file('blog_photo');
          
            $filename_original=$file->getClientOriginalName();
            $name = time().rand(1,100).'.'.$file->extension();
            $file->move(public_path().'/images/', $name); 
            

            $result=Blog::where('id',$id)->update([
                'blog_title' => $blog_title,
                'descripion' => $descripion,
                'original_filename' => $filename_original,
                'filename' => $name,
                'file_path' => public_path().'/images/',
                'file_url' => asset('/images/'.$name)

            ]);
            
        }
        else{
            $result=Blog::where('id',$id)->update([
                'blog_title' => $blog_title,
                'descripion' => $descripion,
            ]);
        }        
        return redirect(route('admin.blogs'))->with('message', 'Blog Data Has Been Updated');
    }

    public function BlogDelete($id){

        $de_id = decrypt($id);
        $blog=Blog::where('id','=',$de_id);  
        $blog->delete();
        return redirect(route('admin.blogs'))->with('message', 'Blog Deleted');
    }
    
    
   
}
