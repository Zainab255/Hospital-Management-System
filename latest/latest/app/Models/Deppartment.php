<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deppartment extends Model
{
    use HasFactory;
    protected $fillable = ["DepartmentName"];

    public function docterdata(){
        return $this->hasMany(docterData::class, 'deppartments_id', 'id');
    }
}
