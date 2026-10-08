<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;


Route::get('/', function () {
   
    return view('blogs',[
        'blogs'=>Blog::latest()->get()
    ]);
});

// if wildcard and variable name are same,Blog::findOrFail($slug) will work.
Route::get('/blogs/{blog:slug}', function (Blog $blog) {
    
  
    return view('blog', [
        'blog' =>$blog,
    ]);
})->where('blog','[A-z\d\-_]+');//=>wildcard contraint

Route::get('/categories/{category:slug}',function(Category $category){
    return view('blogs',[
        'blogs'=>$category->blogs
    ]);
});
Route::get('/users/{user:username}',function(User $user){

return view('blogs',[
        'blogs'=>$user->blogs
    ]);
});
