<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomRegisterController extends Controller
{
    function RegisterFormShow(){
        return view('custom-auth.register');
    }
    function RegisterUser(Request $request){
dd($request->all());
    }
}