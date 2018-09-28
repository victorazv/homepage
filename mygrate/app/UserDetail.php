<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'mygrt_usr';

    protected $dates = ['qualif_date'];

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


}
