<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;


Route::get('/', [BlogController::class,'index']);

// if wildcard and variable name are same,Blog::findOrFail($slug) will work.
Route::get('/blogs/{blog:slug}', [BlogController::class,'show'])->where('blog','[A-z\d\-_]+');//=>wildcard contraint

Route::get('/categories/{category:slug}',function(Category $category){
    return view('blogs',[
        'blogs'=>$category->blogs,
         'categories'=>Category::all(),
         'currentCategory'=>$category,
    ]);
});
Route::get('/users/{user:username}',function(User $user){

return view('blogs',[
        'blogs'=>$user->blogs,
         'categories'=>Category::all()
    ]);
});