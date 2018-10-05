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

    public function user($id)
    {
        $user = User::with([
            'details',
            'details.maritalStatusR',
            'details.citizenshipR',
            'details.citizenshipOtherR',
            'details.employmentR',
            'details.qualificationR',
            'details.languageR'
        ])->find($id);
        $profilePicUrl = null;
        if ($user->details->picture) {
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

    public function profile($id)
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
        ])->find($id);

        $profilePicUrl = null;
        if ($user->details->picture) {
            $profilePicUrl = Storage::url($user->details->picture);
        }

        $profileCvUrl = null;
        if ($user->details->picture) {
            $profileCvUrl = Storage::url($user->details->cv);
        }

        return view('profile')
            ->with('user', $user)
            ->with('profilePicUrl', $profilePicUrl)
            ->with('profileCvUrl', $profileCvUrl);
    }

    public function profileEdit($id)
    {
        $user = User::with([
            'details',
            'details.maritalStatusR',
            'details.citizenshipR',
            'details.citizenshipOtherR',
            'details.employmentR',
            'details.qualificationR',
            'details.languageR'
        ])->find($id);

        $profilePicUrl = null;
        if ($user->details->picture) {
            $profilePicUrl = Storage::url($user->details->picture);
        }

        $profileCvUrl = null;
        if ($user->details->picture) {
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

    public function profileUpdate($id, Request $request)
    {
        $user = User::find($id);
        $details = $user->details()->first()->fill($request->all());
        if ($request->hasFile('picture')) {
            if (!in_array($request->file('picture')->getClientOriginalExtension(), ['png', 'jpg', 'jpeg'])) {
                session()->flash('error', 'Please, upload a picture with correct extension. (PNG, JPG or JPEG)');
                return redirect()->back();
            }
            $PicfileName = $user->id . '_pic_' . time() . '.' . $request->file('picture')->getClientOriginalExtension();
            Storage::putFileAs('public', $request->file('picture'), $PicfileName);
            $details->picture = $PicfileName;
        }
        if ($request->hasFile('cv')) {
            if (!in_array($request->file('cv')->getClientOriginalExtension(), ['doc', 'docx', 'pdf'])) {
                session()->flash('error', 'Please, upload a file with correct extension. (DOC, DOCX or PDF)');
                return redirect()->back();
            }
            $CvfileName = $user->id . '_cv_' . time() . '.' . $request->file('cv')->getClientOriginalExtension();
            Storage::putFileAs('public', $request->file('cv'), $CvfileName);
            $details->cv = $CvfileName;
        }
        $details->save();
        return redirect(route('profile.view', $user->id));
    }

    public function deletePhoto($id, Request $request)
    {
        $user = User::find($id);
        $details = $user->details()->first();
        $details->picture = null;
        $details->save();
        return redirect(route('profile.view', $user->id));
    }

    public function deleteCV($id, Request $request)
    {
        $user = User::find($id);
        $details = $user->details()->first();
        $details->cv = null;
        $details->save();
        return redirect(route('profile.view', $user->id));
    }

    public function paf()
    {
        return view('paf');
    }

    public function paf1()
    {
        $return = (isset($_GET['return']) ? true : false);

        return view('paf1')
        ->with('return', $return);
    }

    public function paf1a()
    {
        $return = (isset($_GET['return']) ? true : false);

        return view('paf1a')
        ->with('return', $return);
    }

    public function paf1b()
    {
        $return = (isset($_GET['return']) ? true : false);
        
        return view('paf1b')
        ->with('return', $return);
    }

    public function paf2()
    {
        $return = (isset($_GET['return']) ? true : false);

        return view('paf2')
        ->with('return', $return);
    }

    public function paf2a()
    {
        $return = (isset($_GET['return']) ? true : false);

        return view('paf2a')
        ->with('return', $return);

    }

    public function paf3(Request $request)
    {
        $return = (isset($_GET['return']) ? true : false);

        if ($request->has('agent_without_free_first_consultation')) {
            session()->put('agent_without_free_first_consultation',
                $request->input('agent_without_free_first_consultation'));
            session()->save();
        }

        $maritalStatus = Relationship::pluck('descr', 'id');
        $citizenship = Country::pluck('descr', 'id');
        $languages = Language::pluck('descr', 'id');
        $visaTypes = VisaType::pluck('descr', 'id');
        $qualifications = Qualification::pluck('descr', 'id');


        return view('paf3')
            ->with('maritalStatus', $maritalStatus)
            ->with('citizenship', $citizenship)
            ->with('languages', $languages)
            ->with('visaTypes', $visaTypes)
            ->with('qualifications', $qualifications)
            ->with('return', $return);
    }

    public function paf4(Request $request)
    {
        $return = (isset($_GET['return']) ? true : false);

        foreach ($request->all() as $key => $input) {
            session()->put($key, $input);
        }
        session()->save();
        return view('paf4')
        ->with('return', $return);
    }

    public function paf4a()
    {
        $return = (isset($_GET['return']) ? true : false);

        return view('paf4a');
    }

    public function paf4b()
    {
        $return = (isset($_GET['return']) ? true : false);

        $employment = Employment::pluck('descr', 'id');
        $occupation = Occupation::pluck('descr', 'id');
        $experienceOutside = ExperienceOutside::pluck('descr', 'id');
        $experienceInside = ExperienceInside::pluck('descr', 'id');

        return view('paf4b')
            ->with('occupation', $occupation)
            ->with('employment', $employment)
            ->with('experienceOutside', $experienceOutside)
            ->with('experienceInside', $experienceInside)
            ->with('return', $return);
    }

    public function paf5(Request $request)
    {
        $return = (isset($_GET['return']) ? true : false);

        foreach ($request->all() as $key => $input) {
            session()->put($key, $input);
        }
        session()->save();
        return view('paf5')
        ->with('return', $return);
    }

    public function paf5a()
    {
        $return = (isset($_GET['return']) ? true : false);

        $qualifications = Qualification::pluck('descr', 'id');
        $englishLevels = English::pluck('descr', 'id');
        $extraPoints = ExtraPoint::pluck('descr', 'id');

        return view('paf5a')
            ->with('qualifications', $qualifications)
            ->with('englishLevels', $englishLevels)
            ->with('extraPoints', $extraPoints)
            ->with('return', $return);
    }

    public function paf6(Request $request)
    {
        $return = (isset($_GET['return']) ? true : false);

        foreach ($request->all() as $key => $input) {
            session()->put($key, $input);
        }
        session()->save();
        return view('paf6')
        ->with('return', $return);
    }

    public function paf6a()
    {
        $return = (isset($_GET['return']) ? true : false);

        return view('paf6a')
        ->with('return', $return);
    }

    public function paf6b()
    {
        $return = (isset($_GET['return']) ? true : false);

        $englishLevels = English::pluck('descr', 'id');
        $englishTests = EnglishTests::pluck('descr', 'id');
        $languages = Language::pluck('descr', 'id');

        return view('paf6b')
            ->with('englishLevels', $englishLevels)
            ->with('englishTests', $englishTests)
            ->with('languages', $languages)
            ->with('return', $return);
    }

    public function paf7(Request $request)
    {
        $return = (isset($_GET['return']) ? true : false);

        foreach ($request->all() as $key => $input) {
            session()->put($key, $input);
        }
        session()->save();
        return view('paf7')
        ->with('return', $return);
    }

    public function paf7a()
    {
        $return = (isset($_GET['return']) ? true : false);
        
        return view('paf7a')
        ->with('return', $return);
    }

    public function paf8(Request $request)
    {
        foreach ($request->all() as $key => $input) {
            session()->put($key, $input);
        }
        session()->save();
        return view('paf8');
    }

    public function paf8store(Request $request) {
        $user = User::create([
            'login' => session()->get('email'),
            'pswd' => md5(session()->get('pswd')),
            'name' => session()->get('name') . ' ' . session()->get('surname'),
            'email' => session()->get('email'),
            'active' => 'Y',
            'priv_admin' => 'N',
            'user_type' => 'usr',
        ]);
        session()->put('login_user', $user->login);
        $userDetails = UserDetail::create(session()->all());
        return redirect(route('user', $user->id));
    }
}