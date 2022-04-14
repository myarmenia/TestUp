<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile/user/index');
    }

    public function settings()
    {
        return view('profile/user/settings');
    }
}
