<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Food;

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
            'price' => 'required | numeric'
        ]);

        //create add food items
        $food=new Food;
        $food->foodTitle=$request->input('foodTitle');
        $food->foodDesc=$request->input('foodDesc');
        $food->price=$request->input('price');
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
        return view ('admin/pages/showFood')->with ('food',$food);
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

        //update food items
        $food=Food::find($id);
        $food->foodTitle=$request->input('foodTitle');
        $food->foodDesc=$request->input('foodDesc');
        $food->price=$request->input('price');
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
      $food->delete();



      return redirect('/foods')->with('success', 'Food Item Removed Successfully');

    }
}

