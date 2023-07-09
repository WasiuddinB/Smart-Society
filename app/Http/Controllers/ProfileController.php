<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    function show()
    {
        $user = Auth::user();
        // $data = User::all();
        // $user = User::whereEmail($email)->get();
        return view('profile.user_pro', ['users' => $user]);
    }
}
