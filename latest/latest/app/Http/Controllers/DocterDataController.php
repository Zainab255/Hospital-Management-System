<?php

namespace App\Http\Controllers;

use App\Models\docterData;
use App\Models\Schedule;
use App\Models\Education;
use App\Models\Experience;
use App\Models\ClinicalInterest;
use App\Models\Deppartment;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DocterDataController extends Controller
{
    //show doctor in appointment
    
    public function index()
    {
        $doctor = docterData::all();
        $departments = Deppartment::get();
        return view('/doctor.doctors', compact('doctor', 'departments'));
        
    }

    public function finddoctor(){
        $doctor = docterData::all();
        $departments = Deppartment::all();
        return view('finddoctors.findDoctor', compact('doctor', 'departments'));
        // return $doctor;
    }
    
  

    //Store and read data on admin panel in DoctorCrud
    public function store(Request $request) 
    { 

   
        // image
        if ($request->hasFile('image')) {
            $doctor = $request->file('image');
            $imageName = time() . '.' . $doctor->getClientOriginalExtension();
            $doctor->move(public_path('images'), $imageName);
            docterData::create(['path' => 'images/' . $imageName]);
            }

    
        $doctor = docterData::create([
        'image' => $request->input('image'),
        'DoctorName' => $request->input('DoctorName'),
        'age' => $request->input('age'),
        'department_id' => $request->input('department_id'),
        'address' => $request->input('address'),
        'city' => $request->input('city'),
        'email' => $request->input('email'),
        'contact' => $request->input('contact'),
        'speciality' => $request->input('speciality'),
        'pmdc' => $request->input('pmdc'),
        'deppartments_id' => $request->input('deppartments_id'),
        // $doctor->deppartments_id => $request->input('deppartments_id')
        ]);
    

        // ======Schedules ============
      $schedulesData = $request->input('schedules');
      if (is_array($schedulesData)) {
        foreach ($schedulesData as $scheduleData) {
            $schedule = new Schedule([
                'date' => $scheduleData['date'],
                'time' => $scheduleData['time'],
                'docter_data_id' => $doctor->id,
            ]);
            $doctor->schedules()->save($schedule); // Associate the schedule with the doctor
        }
        }

        // ====== Education ============
        $educationsData = $request->input('educations');

        // Create and associate educations
        if (is_array($educationsData)) {
            foreach ($educationsData as $educationData) {
                $education = new Education([
                    'degTitle' => $educationData['degTitle'],
                    'degName' => $educationData['degName'],
                    'university' => $educationData['university'],
                    'city' => $educationData['city'],
                    'docter_data_id' => $doctor->id,

                ]);
                $doctor->educations()->save($education);
            }
        }
    

        // ====== Clinical Interests ============
        $clinicalInterestsData = $request->input('interests');

        // Create and associate clinical interests
        if (is_array($clinicalInterestsData)) {
            foreach ($clinicalInterestsData as $clinicalInterestData) {
                $clinicalInterest = new ClinicalInterest([
                    'clinicalInterest' => $clinicalInterestData['clinicalInterest'],
                    'docter_data_id' => $doctor->id,

                ]);
                $doctor->clinicalInterests()->save($clinicalInterest);
            }
        }
    

        // ====== Experience ============
        $experiencesData = $request->input('experiences');

        // Create and associate experiences
        if (is_array($experiencesData)) {
            foreach ($experiencesData as $experienceData) {
                $experience = new Experience([
                    'jobTitle' => $experienceData['jobTitle'],
                    'company' => $experienceData['company'],
                    'Industry' => $experienceData['Industry'],
                    'Location' => $experienceData['Location'],
                    // 'years' => $experienceData['years'],
                     'docter_data_id' => $doctor->id,

                ]);
                $doctor->experiences()->save($experience);
            }
        }
            return redirect()->route('doctorcrud');

        
        // return response()->json(['message' => 'Doctor created successfully']);
}
    
public function details($id){
    $doctor = docterData::find($id);
    $schedules = $doctor->schedules()->Select('docter_data_id', 'date', 'time')->get();
    $experience = $doctor->experiences()->Select('docter_data_id','jobTitle' , 'company', 'Industry', 'Location')->get();
    $education = $doctor->educations()->Select('docter_data_id','degTitle', 'degName', 'university', 'city')->get();
    $clinicalinterests = $doctor->clinicalinterests()->Select('docter_data_id','clinicalInterest')->get();
    
    return view('doctor.DetailsCrud' , compact ('doctor','schedules', 'experience', 'education', 'clinicalinterests'));
}
  
  
  
 public function show($id)
{
    
    // $doctor = docterData::where(function ($query) use ($id) {
    //     $query->where('id', $id)
    //           ->orWhere('name', $id);
    // })->first();

    $doctor = docterData::find($id);
    $schedules = $doctor->schedules()->Select('docter_data_id', 'date', 'time')->get();
    $experience = $doctor->experiences()->Select('docter_data_id','jobTitle' , 'company', 'Industry', 'Location')->get();
    $education = $doctor->educations()->Select('docter_data_id','degTitle', 'degName', 'university', 'city')->get();
    $clinicalinterests = $doctor->clinicalinterests()->Select('docter_data_id','clinicalInterest')->get();
    
    return view('finddoctors.doctor' , compact ('doctor','schedules', 'experience', 'education', 'clinicalinterests'));;
   
    if (!$doctor) {
        abort(404); // Display a 404 error if doctor not found
    }
}

    

   
    public function edit(docterData $doctors)
    {
        //
    }

    
    public function update(Request $request, docterData $doctors)
    {
    
    }

    public function destroy($id)
    {
        $id = docterData::find($id);
        $id->delete();
        return redirect()->route('doctorcrud');
        
    }
}