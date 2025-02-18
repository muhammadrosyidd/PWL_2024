<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
        public function index()
        {
            return "Selamat Datang";
        }
        public function about()
        {
            return "Muhammad Rosyid-2341760121";
        }
        public function articles($id)
        {
            return "Halaman Artikel dengan Id ".$id;
        }

        public function hello(){
            return('Hello World');
        }
    
        public function greeting(){
            return view('blog.hello')
                ->with('name','Andi')
                ->with('occupation','Astronaut');
        }
    
    
}
