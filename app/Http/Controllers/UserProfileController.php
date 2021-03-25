<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function showUserProfilePage()
    {
        return view('profile.user-profile');
    }
}
