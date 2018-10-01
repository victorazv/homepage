<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    public $fillable = [
        'login_user',
        'picture',
        'name',
        'surname',
        'want_pay',
        'age',
        'citizenship',
        'ot_citizenship',
        'application_reason',
        'marital_status',
        'in_AU',
        'visa_hold',
        'visa_type',
        'exp_date_visa',
        'family_AU',
        'employment',
        'occupation',
        'occupation_none',
        'experience',
        'experience_AU',
        'qualification_level',
        'AU_study_req',
        'special_edu',
        'extra_points',
        'qualif_date',
        'qualif_occupation',
        'qualification_name',
        'language',
        'english_test',
        'english_level',
        'english_notest',
        'cv',
        'linkedin',
        'comment',
        'where_find',
        'usr_tel',
        'usr_skype',
        'when_leave',
        'usr_budget'
    ];

    protected $table = 'mygrt_usr';
    public $timestamps = false;

    protected $dates = ['qualif_date'];

    protected $primaryKey = 'login_user';

    public $incrementing = false;


    public function maritalStatusR()
    {
        return $this->belongsTo(Relationship::class, 'marital_status', 'id');
    }

    public function citizenshipR()
    {
        return $this->belongsTo(Country::class, 'citizenship', 'id');
    }

    public function citizenshipOtherR()
    {
        return $this->belongsTo(Country::class, 'ot_citizenship', 'id');
    }

    public function employmentR()
    {
        return $this->belongsTo(Employment::class, 'employment', 'id');
    }

    public function occupationR()
    {
        return $this->belongsTo(Occupation::class, 'occupation', 'id');
    }

    public function occupationNoneR()
    {
        return $this->belongsTo(Occupation::class, 'occupation_none', 'id');
    }

    public function qualificationR()
    {
        return $this->belongsTo(Qualification::class, 'qualification_level', 'id');
    }

    public function languageR()
    {
        return $this->belongsTo(Language::class, 'language', 'id');
    }

    public function experienceOutsideR()
    {
        return $this->belongsTo(ExperienceOutside::class, 'experience', 'id');
    }

    public function experienceInsideR()
    {
        return $this->belongsTo(ExperienceInside::class, 'experience_AU', 'id');
    }

    public function visaTypeR()
    {
        return $this->belongsTo(VisaType::class, 'visa_type', 'id');
    }

    public function extraPointR()
    {
        return $this->belongsTo(ExtraPoint::class, 'extra_points', 'id');
    }

    public function englishR()
    {
        return $this->belongsTo(English::class, 'english_test', 'id');
    }

    public function ListEnglishTestsR()
    {
        return $this->belongsTo(EnglishTests::class, 'english_level', 'id');
    }
}
