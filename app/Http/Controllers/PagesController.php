<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Info;
use App\Gallery;
use App\About;
use App\Blog;

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
          
            $abouts= About::all();
            //return 123;
               return view ('pages.aboutUs')->with ('abouts',$abouts);         }
           


        public function gallery()
        {

           
            $gallerys= Gallery::all();
            //return 123;
               return view ('pages.gallery')->with ('gallerys',$gallerys);         }
    
        public function contact()
        {

          
            return view ('pages.contact');        
        }


        public function blog()
        {

            $blogs= Blog::all();
            //return 123;
               return view ('pages.blog')->with ('blogs',$blogs);     
          
        }
        public function blogView()
        {

         
            return view ('pages.blogView');        
        }

        public function orderView()
        {

         
            return view ('pages.orderView');        
        }

     

//admin Pages Controller starts here
        public function login()
        {

         
            return view ('/admin/inc.login');        
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

       

        public function blogPost()
        {

         
            return view ('admin/pages.blogPost');        
        }

        public function foodGallery()
        {

         
            return view ('admin/pages.foodGallery');        
        }
        public function aboutus()
        {

         
            return view ('admin/pages.about');        
        }
        

    //admin Controller pages ends here
}
