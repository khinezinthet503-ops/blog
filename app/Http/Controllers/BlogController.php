<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index() 
    {
         return view('blogs.index',[
        'blogs'=>Blog::latest()
        ->filter(request(['search','category','username']))//creating custom filter
        ->paginate(6)
        ->withQueryString(),
      
         ]);
    }

    function show(Blog $blog) 
    {
        return view('blogs.show', [
        'blog' =>$blog,
        'randomBlogs'=>Blog::inRandomOrder()->take(3)->get()
     ]);
    }

  
}