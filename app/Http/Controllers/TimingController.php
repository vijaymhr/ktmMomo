<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Timing;
class TimingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timings= Timing::all();

        return view ('admin/pages.timings')->with('timings', $timings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pages.addTiming');
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
            'day'=>'required',
            'time'=>'required',
        ]);

        //create add food items
        $timing=new Timing;
        $timing->day=$request->input('day');
        $timing->time=$request->input('time');
        $timing->save();

        return redirect('/timings')->with('success', 'New Time added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $timing= Timing::find($id);

        return view ('admin/pages/showTiming')->with ('timing',$timing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $timing= Timing::find($id);
        return view ('admin/pages/editTiming')->with ('timing',$timing);
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
            'day'=>'required',
            'time'=>'required',
        ]);

        //update food items
        $timing=Timing::find($id);
        $timing->day=$request->input('day');
        $timing->time=$request->input('time');
     
        $timing->save();

        return redirect('/timings')->with('success', 'Time has been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timing=Timing::find($id);
      $timing->delete();



      return redirect('/timings')->with('success', 'Time Removed Successfully');
    }
}
