<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index(){
        return view('theme.index');
    }
    
    public function category(){
        return view('theme.category');
    }

    public function contact(){
        return view('theme.contact');
    }


    public function singleBlog(){
        return view('theme.blog-details');
    }


    public function register(){
        return view('theme.register');
    }


    public function login(){
        return view('theme.login');
    }
}
