<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile()
    {
        return view('profile');
    }

    public function email()
    {
        return view('profile.email');
    }

    public function password()
    {
        return view('profile.password');
    }

   
}
