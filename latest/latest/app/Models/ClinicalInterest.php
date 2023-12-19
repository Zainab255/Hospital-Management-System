<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicalInterest extends Model
{
    use HasFactory;

    protected $fillable = [ 'clinicalInterest', 'docter_data_id'];
    
    public function docterdata(){
        return $this->belongsto(docterData::class);
    }
}
