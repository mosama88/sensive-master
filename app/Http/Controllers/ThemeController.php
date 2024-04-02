<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index(){
        $blogs = Blog::paginate(4);
        return view ('theme.index' , compact('blogs') );
        }
    

        
    public function category($id){

        $blogs = Blog::where('category_id', $id)->paginate(3);
        return view('theme.category', compact('blogs'));
    }


        //Anther Way
    // public function category($name){
    //     $categoryName = Category::find($id)->name;
    //     $category_id = Category::where('name',$name)->first()->id;
    //     $blogs = Blog::where('category_id', $category_id)->paginate(3);
    //     return view('theme.category', compact('categoryName'));
    // }



    public function contact(){
        return view('theme.contact');
    }


    public function singleBlog(){
//
    }


}
