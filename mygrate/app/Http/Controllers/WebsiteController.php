<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function user()
    {
        return view('user');
    }

    public function profile()
    {
        $user = User::with(['details','details.maritalStatusR',
            'details.citizenshipR',
            'details.citizenshipOtherR',
            'details.employmentR',
            'details.qualificationR',
            'details.languageR'])->find(73);
        return view('profile')->with('user', $user);
    }

    public function profileEdit()
    {
        return view('profile_edit');
    }
}
