<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
class PagesController extends Controller
{
    public function index()
        {
            $foods= Food::all();

          
            return view ('pages.index')->with('foods',$foods);
        }


        public function menu()
        {
            $foods= Food::all();
         //return 123;
            return view ('pages.menu')->with ('foods',$foods);        
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


     

//admin Pages Controller starts here
        public function login()
        {

         
            return view ('/admin/inc.login');        
        }


        public function foods()
        {

         
            return view ('/admin/pages.foods');        
        }


        public function dashboard()
        {

         
            return view ('/admin/pages.dashboard');        
        }

        public function orders()
        {

         
            return view ('admin/pages.orders');        
        }

        public function contactUsManage()
        {

         
            return view ('admin/pages.contactUsManage');        
        }

        public function feedback()
        {

         
            return view ('admin/pages.feedback');        
        }

        public function blogs()
        {

         
            return view ('admin/pages.blogs');        
        }

        public function foodGallery()
        {

         
            return view ('admin/pages.foodGallery');        
        }

        

    //admin Controller pages ends here
}
