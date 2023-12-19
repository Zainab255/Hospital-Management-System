<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docterData extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'DoctorName',
        'age',
        'address',
        'city',
        'email',
        'contact',
        'speciality',
        'pmdc',
        'deppartments_id'
    ];
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function clinicalInterests()
    {
        return $this->hasMany(clinicalInterest::class);
    }

    // department
    public function deppartments(){
        return $this->belongsto(Deppartment::class,'deppartments_id', 'id');
    }
}