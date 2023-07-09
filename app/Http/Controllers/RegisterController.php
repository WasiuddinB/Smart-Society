<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
       $input = $request->all();
       User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'password' => Hash::make($input['password']),
        'dob' => $input['dob'],
        'phone' => $input['phone'],
        'st_no' => $input['st_no'],
        'house' => $input['house'],

        
      ]);
       return view('contact.thanks');
    }
}
