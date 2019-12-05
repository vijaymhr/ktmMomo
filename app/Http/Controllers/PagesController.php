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
