<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
   public function create()
   {
        return view('auth.register');
   }
   public function store()
   {
     $formData=request()->validate([
          'name'=>['required','max:255','min:3'],
           'username'=>['required','max:255','min:3',Rule::unique('users','username')],
           'email'=>['required','email' ,Rule::unique('users','email')],
           'password'=>['required','min:8']
     ]);

   
    $user= User::create($formData);
//     session()->flash('success','Welcome Dear '.$user->name);
    Auth::login($user);
   return redirect('/')->with('success','Welcome Dear, '.$user->name);
   }
   public function logout()
   {
     Auth::logout();
     return redirect('/')->with('success','Goodbye');
   }
   public function login()
   {
     return view('auth.login');
   }
    public function post_login()
   {
     $formData=request()->validate([
          'email'=>['required','max:255',Rule::exists('users','email')],
          'password'=>['required','min:8','max:255']
     ]);
    if(Auth::attempt($formData)){
     return redirect("/",)->with('success','Welcome back');
    }
    else{
     return redirect()->back()->withErrors([
          'email'=>"password does not exit."
     ]);
    }
   }
}