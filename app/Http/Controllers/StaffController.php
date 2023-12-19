<?php

namespace App\Http\Controllers;
use App\Models\Deppartment;
use App\Models\Staff;
use App\Models\Qualification;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['staffList']= Staff::all();
        return view('staff.index', $data);
    }
    public function deptindex($id)
    {
        $data['deppartment']= Deppartment::get(['name',$id]);
        return view('staff.creat',$data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $staff=new Staff;
        $staff->title=$request->title;
        $staff->firstname=$request->firstname;
        $staff->lastname=$request->lastname;
        $staff->email=$request->email;
        $staff->password=$request->password;
        $staff->phoneno=$request->phoneno;
        $staff->adress=$request->adress;
        $staff->city=$request->city;
        $staff->degree=$request->degree;
        $staff->institude=$request->institude;
        $staff->year=$request->year;
        $staff->deppartment=$request->deppartment;
        $staff->status=$request->status;
        $staff->salary=$request->salary;
        $staff->save();
        return redirect('/staff');
    }

    /**
     * Display the specified resource.
     */
    public function detail(Staff $staff)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function staffedit($id)
    {
        $data['staffdata']=Staff::find($id);

        return view('staff.edit',$data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function updatestaff(Request $request)
    {
        $id= $request->id;
        $staff=Staff::find($id);
        $staff->title=$request->title;
        $staff->firstname=$request->firstname;
        $staff->lastname=$request->lastname;
        $staff->email=$request->email;
        $staff->password=$request->password;
        $staff->phoneno=$request->phoneno;
        $staff->adress=$request->adress;
        $staff->city=$request->city;
        $staff->degree=$request->degree;
        $staff->institude=$request->institude;
        $staff->year=$request->year;
        $staff->deppartment=$request->deppartment;
        $staff->status=$request->status;
        $staff->salary=$request->salary;
        $staff->save();
        return redirect('/staff');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deletestaff($id)
    {
        
        $data=Staff::find($id);
        $data->delete();
        return redirect('/staff');
    }
}
