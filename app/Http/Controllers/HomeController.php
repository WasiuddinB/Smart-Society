<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return view('Base_page.homepage');
    // }

    public function homepage()
    {
        // $data= User::latest()->first();
        // log::debug("YOUTTAG",[$data]);
        return view('Base_page.homepage'); // next:- page name created with next.blade.php 
    }

    public function profile()
    {
        return view('profile.user_pro');
    }
}
