<?php

namespace App\Http\Controllers;

use App\Country;
use App\Employment;
use App\English;
use App\ExperienceInside;
use App\ExperienceOutside;
use App\Language;
use App\Occupation;
use App\Qualification;
use App\Relationship;
use App\User;
use App\VisaType;
use App\UserDetail;

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

    public function form()
    {
        $user = User::with(['details','details.maritalStatusR',
            'details.citizenshipR',
            'details.citizenshipOtherR',
            'details.employmentR',
            'details.qualificationR',
            'details.languageR'])->find(73);
        $citizenship = Country::pluck('descr', 'id');
        $languages = Language::pluck('descr', 'id');
        $qualifications = Qualification::pluck('descr', 'id');

        return view('form')
            ->with('user', $user)
            ->with('citizenship', $citizenship)
            ->with('languages', $languages)
            ->with('qualifications', $qualifications);
    }

    public function formInsert(Request $request)
    {           
        $user = UserDetail::create($request->all());
        return redirect('form');
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
        $user = User::with(['details','details.maritalStatusR',
            'details.citizenshipR',
            'details.citizenshipOtherR',
            'details.employmentR',
            'details.qualificationR',
            'details.languageR'])->find(73);
        $citizenship = Country::pluck('descr', 'id');
        $languages = Language::pluck('descr', 'id');
        $maritalStatus = Relationship::pluck('descr', 'id');
        $employment = Employment::pluck('descr', 'id');
        $occupation = Occupation::pluck('descr', 'id');
        $experienceOutside = ExperienceOutside::pluck('descr', 'id');
        $experienceInside = ExperienceInside::pluck('descr', 'id');
        $visaTypes = VisaType::pluck('descr', 'id');
        $englishLevels = English::pluck('descr', 'id');
        $qualifications = Qualification::pluck('descr', 'id');

        return view('profile_edit')
            ->with('user', $user)
            ->with('citizenship', $citizenship)
            ->with('languages', $languages)
            ->with('maritalStatus', $maritalStatus)
            ->with('employment', $employment)
            ->with('occupation', $occupation)
            ->with('experienceOutside', $experienceOutside)
            ->with('experienceInside', $experienceInside)
            ->with('visaTypes', $visaTypes)
            ->with('englishLevels', $englishLevels)
            ->with('qualifications', $qualifications);
    }

    public function profileUpdate(Request $request)
    {
        dd($request->all());
    }
}