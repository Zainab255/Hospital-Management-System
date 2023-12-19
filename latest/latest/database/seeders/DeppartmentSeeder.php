<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use App\Models\Deppartment;

use Illuminate\Database\Seeder;

class DeppartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $departments = [
        //     ['DepartmentName' => 'Cardiology'],
        //     ['DepartmentName' => 'OPD' ],
        //     ['DepartmentName' => 'Neurologist'],
        //     ['DepartmentName' => 'Orthopedics' ],
        //     ['DepartmentName' => 'Radiology' ],
        //     ['DepartmentName' => 'Nutrition' ],
        //     ['DepartmentName' => 'Respiratory Therapy'],
            
        // ];

        // foreach ($departments as $departmentData) {
        //     Deppartment::insert($departmentData);
        // }
        
        $json = File::get('database/json/deppartments.json');
        $departments = json_decode($json);

        collect($departments)->each(function($department){
            Deppartment::create([
                'DepartmentName' => $department->DepartmentName,
                'created_at' => $department->created_at,
                'updated_at' => $department->updated_at,
            ]);
        });
    }
}
