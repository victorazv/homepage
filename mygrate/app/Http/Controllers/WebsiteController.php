<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function profile()
    {
        return view('profile');
    }
}
