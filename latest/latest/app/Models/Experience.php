<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'jobTitle',
        'company',
        'Industry',
        'Location',
        'years',
        'docter_data_id'
    ];
    public function docterdata(){
        return $this->belongsto(docterData::class);
    }
}
