<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if(Auth::check()){
            $categories = Category::get();

            return view ('theme.blogs.create',compact('categories'));
        }else{
            // abort(403);
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.    
     */
    public function store( StoreBlogRequest $request)
    {
        // dd($request->image);
        $data = $request->validated();
// 1- Get Image
        $image = $request->image;
// 2- Change it's current name
        $newImageName = time() . '-' . $image->getClientOriginalName();
// 3- Move Image To My Project
        $image->storeAs('blogs' , $newImageName, 'public');  //blogs Folder in storage/app/public  -  public folder in Public Access Users
// 4- Save New Name To Database Recored
        $data['image'] = $newImageName;
        $data['user_id'] = Auth::user()->id;
        Blog::create($data);
        return to_route('blogs.create')->with('success','Data Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
