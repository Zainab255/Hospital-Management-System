<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;

use Illuminate\Database\Seeder;
use App\Models\docterData;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $json = File::get('database/json/doctordata.json');
        $doctordata = json_decode($json);

       collect($doctordata)->each(function($data){
            docterData::create([
                'image' => $data->image,
                'DoctorName' => $data->DoctorName,
                'contact' => $data->contact,
                'email' => $data->email,
                'age' => $data->age,
                'address' => $data->address,
                'city' => $data->city,
                'speciality' => $data->speciality,
                'pmdc' => $data->pmdc,
                'deppartments_id' => $data->deppartments_id,
            ]);
        });
    }
}
