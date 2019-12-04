<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
        {
          
            return view ('pages.index');
        }


        public function menu()
        {

         
            return view ('pages.menu');        
        }

        public function about()
        {
          
            return view ('pages.about');
        }


        public function gallery()
        {

           
            return view ('pages.gallery');        
        }
    
        public function contact()
        {

          
            return view ('pages.contact');        
        }


        public function blog()
        {

       
            return view ('pages.blog');        
        }


     


        public function login()
        {

         
            return view ('/admin/inc.login');        
        }


        public function foodItems()
        {

         
            return view ('admin/pages.foodItems');        
        }


        public function dashboard()
        {

         
            return view ('/admin/pages.dashboard');        
        }
    //
}
