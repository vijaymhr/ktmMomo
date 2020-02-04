<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Food;
use App\User;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'cName'=>'required',
            'cEmail'=>'required',
            'cMobile'=>'required',
            'cQuantity'=>'required',
            'cMessage'=>'required',
            'foodName'=>'nullable'

        ]);


        $order=new Order;
        $order->foodName=$request->input('foodName');

        $order->cName=$request->input('cName');
        $order->cEmail=$request->input('cEmail');
        $order->cMobile=$request->input('cMobile');
        $order->cQuantity=$request->input('cQuantity');
        $order->cMessage=$request->input('cMessage');
       // $order->food_id=pages()->food()->id;
       //$food->user_id=auth()->user()->id;
        $order->user_id='1';

        $order->save();
        return redirect('/menu')->with('success', 'Thank You! We have Received your order.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
