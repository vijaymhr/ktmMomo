<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Info;
use App\Gallery;
use App\About;
use App\Blog;
use App\Order;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $foods= Food::all();

          
        return view ('pages.index')->with('foods',$foods);    }
}
