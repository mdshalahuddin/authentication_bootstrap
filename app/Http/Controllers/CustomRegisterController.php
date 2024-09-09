<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterStoreRequest;

class CustomRegisterController extends Controller
{
    function RegisterFormShow(){
        return view('custom-auth.register');
    }

    function RegisterUser(RegisterStoreRequest $request){
        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
}
