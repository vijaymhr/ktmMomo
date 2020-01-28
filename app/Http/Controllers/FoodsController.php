<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Food;
use Illuminate\Support\Facades\Storage;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $foods= Food::orderBy('created_at','desc')-> paginate(10);
      return view('admin/pages.foods')->with('foods', $foods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pages.addFood');
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
            'foodTitle'=>'required',
            'foodDesc'=>'required',
            'price' => 'required | numeric',
            'cover_image'=>'image | nullable | max:1999'
        ]);
        //handle image upload

            if($request->hasfile('cover_image')){
                //get filename with the extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();      
                //get just filename
                
                $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);

                //get just extension
                
                $extension=$request->file('cover_image')->getClientOriginalExtension();
                //filename to Store
                
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
                
                //upload Image

                $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
            }
            else{
                $fileNameToStore="noimage.jpg";
            }

        //create add food items
        $food=new Food;
        $food->foodTitle=$request->input('foodTitle');
        $food->foodDesc=$request->input('foodDesc');
        $food->price=$request->input('price');
        $food->cover_image=$fileNameToStore;
        $food->save();

        return redirect('/foods')->with('success', 'New Food Item Added');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food= Food::find($id);

        return view ('pages/orderView')->with ('food',$food);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food= Food::find($id);
        return view ('admin/pages/editFood')->with ('food',$food);
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
            'foodTitle'=>'required',
            'foodDesc'=>'required',
            'price' => 'required | numeric' 
        ]);


        if($request->hasfile('cover_image')){
            //get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();      
            //get just filename
            
            $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just extension
            
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //filename to Store
            
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            
            //upload Image

            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }
      



        //update food items
        $food=Food::find($id);
        $food->foodTitle=$request->input('foodTitle');
        $food->foodDesc=$request->input('foodDesc');
        $food->price=$request->input('price');
        if($request->hasfile('cover_image')){

            $food->cover_image = $fileNameToStore;
        }

        $food->save();

        return redirect('/foods')->with('success', 'Food Item Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $food=Food::find($id);


      if($food->cover_image != 'noimage.jpg')
      {
        //delete images also
        storage::delete('public/cover_images/'.$food->cover_image);
      }
      $food->delete();



      return redirect('/foods')->with('success', 'Food Item Removed Successfully');

    }
}

