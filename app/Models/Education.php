<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'degTitle',
        'degName',
        'university',
        'city',
        'docter_data_id'
    ];
    public function docterdata(){
        return $this->belongsto(docterData::class);
    }

    
}
