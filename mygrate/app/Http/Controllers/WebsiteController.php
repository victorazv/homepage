<?php

namespace App\Http\Controllers;

use App\Country;
use App\Employment;
use App\English;
use App\ExperienceInside;
use App\ExperienceOutside;
use App\ExtraPoint;
use App\Language;
use App\Occupation;
use App\Qualification;
use App\Relationship;
use App\User;
use App\VisaType;
use App\UserDetail;
use App\EnglishTests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function user()
    {
        $user = User::with([
            'details',
            'details.maritalStatusR',
            'details.citizenshipR',
            'details.citizenshipOtherR',
            'details.employmentR',
            'details.qualificationR',
            'details.languageR'
        ])->find(73);
        $profilePicUrl = null;
        if($user->details->picture) {
            $profilePicUrl = Storage::url($user->details->picture);
        }
        return view('user')
            ->with('user', $user)
            ->with('profilePicUrl', $profilePicUrl);
    }

    public function form()
    {
        $user = User::with([
            'details',
            'details.maritalStatusR',
            'details.citizenshipR',
            'details.citizenshipOtherR',
            'details.employmentR',
            'details.qualificationR',
            'details.languageR'
        ])->find(73);
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
        $user = User::with([
            'details',
            'details.maritalStatusR',
            'details.citizenshipR',
            'details.citizenshipOtherR',
            'details.employmentR',
            'details.qualificationR',
            'details.languageR',
            'details.ListEnglishTestsR',
            'details.englishR'
        ])->find(73);

        $profilePicUrl = null;
        if($user->details->picture) {
            $profilePicUrl = Storage::url($user->details->picture);
        }

        $profileCvUrl = null;
        if($user->details->picture) {
            $profileCvUrl = Storage::url($user->details->cv);
        }

        return view('profile')
            ->with('user', $user)
            ->with('profilePicUrl', $profilePicUrl)
            ->with('profileCvUrl', $profileCvUrl);
    }

    public function profileEdit()
    {
        $user = User::with([
            'details',
            'details.maritalStatusR',
            'details.citizenshipR',
            'details.citizenshipOtherR',
            'details.employmentR',
            'details.qualificationR',
            'details.languageR'
        ])->find(73);

        $profilePicUrl = null;
        if($user->details->picture) {
            $profilePicUrl = Storage::url($user->details->picture);
        }

        $profileCvUrl = null;
        if($user->details->picture) {
            $profileCvUrl = Storage::url($user->details->cv);
        }

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
        $extraPoints = ExtraPoint::pluck('descr', 'id');
        $englishTests = EnglishTests::pluck('descr', 'id');

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
            ->with('qualifications', $qualifications)
            ->with('extraPoints', $extraPoints)
            ->with('profilePicUrl', $profilePicUrl)
            ->with('profileCvUrl', $profileCvUrl)
            ->with('englishTests', $englishTests);
    }

    public function profileUpdate(Request $request)
    {
        $user = User::find(73);
        $details = $user->details()->first()->fill($request->all());
        if ($request->hasFile('picture')) {
            if(!in_array($request->file('picture')->getClientOriginalExtension(), ['png', 'jpg', 'jpeg'])) {
                session()->flash('error', 'Please, upload a picture with correct extension. (PNG, JPG or JPEG)');
                return redirect()->back();
            }
            $PicfileName = $user->id . '_pic_' . time() . '.' . $request->file('picture')->getClientOriginalExtension();
            Storage::putFileAs('public', $request->file('picture'), $PicfileName);
            $details->picture = $PicfileName;
        }
        if ($request->hasFile('cv')) {
            if(!in_array($request->file('cv')->getClientOriginalExtension(), ['doc', 'docx', 'pdf'])) {
                session()->flash('error', 'Please, upload a file with correct extension. (DOC, DOCX or PDF)');
                return redirect()->back();
            }
            $CvfileName = $user->id . '_cv_' . time() . '.' . $request->file('cv')->getClientOriginalExtension();
            Storage::putFileAs('public', $request->file('cv'), $CvfileName);
            $details->cv = $CvfileName;
        }
        $details->save();
        return redirect(route('profile.view'));
    }

    public function deletePhoto(Request $request)
    {
        $user = User::find(73);
        $details = $user->details()->first();
        $details->picture = null;
        $details->save();
        return redirect(route('profile.view'));
    }

    public function deleteCV(Request $request)
    {
        $user = User::find(73);
        $details = $user->details()->first();
        $details->cv = null;
        $details->save();
        return redirect(route('profile.view'));
    }

    public function paf()
    {
        return view('paf');
    }

    public function paf1()
    {
        return view('paf1');
    }

    public function paf1a()
    {
        return view('paf1a');
    }

    public function paf1b()
    {
        return view('paf1b');
    }

    public function paf2()
    {
        return view('paf2');
    }

    public function paf2a()
    {
        return view('paf2a');
    }

    public function paf3()
    {
        $user = User::with([
            'details',
            'details.maritalStatusR',
            'details.citizenshipR',
            'details.citizenshipOtherR',
            'details.employmentR',
            'details.qualificationR',
            'details.languageR'
        ])->find(73);
        
        $maritalStatus = Relationship::pluck('descr', 'id');
        $citizenship = Country::pluck('descr', 'id');
        $languages = Language::pluck('descr', 'id');
        $visaTypes = VisaType::pluck('descr', 'id');
        $qualifications = Qualification::pluck('descr', 'id');
        

        return view('paf3')
            ->with('user', $user)
            ->with('maritalStatus', $maritalStatus)
            ->with('citizenship', $citizenship)
            ->with('languages', $languages)
            ->with('visaTypes', $visaTypes)
            ->with('qualifications', $qualifications);
    }

    public function paf4()
    {
        return view('paf4');
    }

    public function paf4a()
    {
        return view('paf4a');
    }

    public function paf4b()
    {
        $user = User::with([
            'details'
            ])->find(73);
        $employment = Employment::pluck('descr', 'id');
        $occupation = Occupation::pluck('descr', 'id');
        $experienceOutside = ExperienceOutside::pluck('descr', 'id');
        $experienceInside = ExperienceInside::pluck('descr', 'id');

        return view('paf4b')
        ->with('user', $user)
        ->with('occupation', $occupation)
        ->with('employment', $employment)
        ->with('experienceOutside', $experienceOutside)
        ->with('experienceInside', $experienceInside);
    }

    public function paf5()
    {
        return view('paf5');
    }

    public function paf5a()
    {
        $user = User::with([
            'details'
            ])->find(73);
            $qualifications = Qualification::pluck('descr', 'id');
            $englishLevels = English::pluck('descr', 'id');

        return view('paf5a')
        ->with('user', $user)
        ->with('qualifications', $qualifications)
        ->with('englishLevels', $englishLevels);
    }

    public function paf6()
    {
        return view('paf6');
    }

    public function paf6a()
    {
        return view('paf6a');
    }

    public function paf6b()
    {
        return view('paf6b');
    }

    public function paf7()
    {
        return view('paf7');
    }

    public function paf7a()
    {
        return view('paf7a');
    }

    public function paf8()
    {
        return view('paf8');
    }
}