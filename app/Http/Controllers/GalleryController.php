<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\Storage;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys= Gallery::orderBy('created_at','desc')-> paginate(10);

        return view ('admin/pages.foodGallery')->with('gallerys', $gallerys);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pages.addGallery');

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
            'imageTitle'=>'required',
            'photo'=>'image | required | max:1999'
        ]);
        //handle image upload

            if($request->hasfile('photo')){
                //get filename with the extension
                $filenameWithExt = $request->file('photo')->getClientOriginalName();      
                //get just filename
                
                $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);

                //get just extension
                
                $extension=$request->file('photo')->getClientOriginalExtension();
                //filename to Store
                
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
                
                //upload Image

                $path=$request->file('photo')->storeAs('public/photoGallery',$fileNameToStore);
            }
           

        //create add photo
        $gallery=new Gallery;
        $gallery->imageTitle=$request->input('imageTitle');
       
        $gallery->photo=$fileNameToStore;
        $gallery->save();

        return redirect('/foodGallery')->with('success', 'New Photo Added');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery= Gallery::find($id);

        return view ('admin/pages/showGallery')->with ('gallery',$gallery);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery= Gallery::find($id);
        return view ('admin/pages/editGallery')->with ('gallery',$gallery);
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
            'imageTitle'=>'required',
            'photo' => 'image | max:1999' 
        ]);



        if($request->hasfile('photo')){
            //get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();      
            //get just filename
            
            $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just extension
            
            $extension=$request->file('photo')->getClientOriginalExtension();
            //filename to Store
            
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            
            //upload Image

            $path=$request->file('photo')->storeAs('public/photoGallery',$fileNameToStore);
        }


        $gallery=Gallery::find($id);
        $gallery->imageTitle=$request->input('imageTitle');
       
        if($request->hasfile('photo')){

            $gallery->photo = $fileNameToStore;
        }

        $gallery->save();

        return redirect('/foodGallery')->with('success', 'Content Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $gallery=Gallery::find($id);
              storage::delete('public/photoGallery/'.$gallery->photo);

              $gallery->delete();



      return redirect('/foodGallery')->with('success', 'Photo Removed Successfully');

    }
}
