<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{



        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>[ 'show']]);    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs= Blog::orderBy('created_at','desc')-> paginate(10);
        return view('admin/pages.blogPost')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pages.addBlog');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'blogTitle'=>'required',
            'blogDesc'=>'required',
            'blogStory'=>'required',

            'blogImage'=>'image | nullable | max:1999',
        ]);



        //handle image upload

        if($request->hasfile('blogImage')){
            //get filename with the extension
            $filenameWithExt = $request->file('blogImage')->getClientOriginalName();      
            //get just filename
            
            $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just extension
            
            $extension=$request->file('blogImage')->getClientOriginalExtension();
            //filename to Store
            
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            
            //upload Image

            $path=$request->file('blogImage')->storeAs('public/blogImages',$fileNameToStore);
        }
        else{
            $fileNameToStore="noimage.jpg";
        }


        //create add blog items
        $blog=new Blog;
        $blog->blogTitle=$request->input('blogTitle');
        $blog->blogDesc=$request->input('blogDesc');
        $blog->blogStory=$request->input('blogStory');

        $blog->blogImage=$fileNameToStore;
        $blog->user_id=auth()->user()->id;
        $blog->save();

        return redirect('/blogPost')->with('success', 'New Blog Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $blog= Blog::find($id);

        return view ('pages/blogView')->with ('blog',$blog);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog= Blog::find($id);
        return view ('admin/pages/editBlogPost')->with ('blog',$blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
            'blogTitle'=>'required',
            'blogDesc'=>'required',
            'blogStory'=>'required',

        ]);

 //handle image upload

 if($request->hasfile('blogImage')){
    //get filename with the extension
    $filenameWithExt = $request->file('blogImage')->getClientOriginalName();      
    //get just filename
    
    $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);

    //get just extension
    
    $extension=$request->file('blogImage')->getClientOriginalExtension();
    //filename to Store
    
    $fileNameToStore=$filename.'_'.time().'.'.$extension;
    
    //upload Image

    $path=$request->file('blogImage')->storeAs('public/blogImages',$fileNameToStore);
}



        //update food items
        $blog=Blog::find($id);
        $blog->blogTitle=$request->input('blogTitle');
        $blog->blogDesc=$request->input('blogDesc');
        $blog->blogStory=$request->input('blogStory');

        if($request->hasfile('blogImage')){

            $blog->blogImage = $fileNameToStore;
        }

        $blog->save();

        return redirect('/blogPost')->with('success', 'Blog has been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::find($id);


        if($blog->blogImage != 'noimage.jpg')
        {
          //delete images also
          storage::delete('public/blogImage/'.$blog->blogImage);
        }
        $blog->delete();
  
  
  
        return redirect('/blogPost')->with('success', 'Blog Deleted Successfully');
    }
}
