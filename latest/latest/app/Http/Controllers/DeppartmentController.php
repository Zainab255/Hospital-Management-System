<?php

namespace App\Http\Controllers;

use App\Models\Deppartment;
use App\Models\docterData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DeppartmentController extends Controller
{
    public function getDeppartmentBreakdown()
    {
        $deppartmentBreakdown = Deppartment::select('Departmentname', DB::raw('count(*) as count'))
        ->groupBy('Departmentname')
        ->get();
        

            // dd($deppartmentBreakdown);
            
        return response()->json($deppartmentBreakdown);
    }

    // index function
    public function index()
    {
        $departments = Deppartment::with('docterdata')->get();
        return view('/finddoctors.findDoctor', compact('departments'));

        // return response()->json(['departments' => $departments]);
        
    }
    // show
    public function showDepartments(){
       
        $departments = Deppartment::all();
        // $doctors = $departments->docterData;
        return view('/finddoctors.findDoctor', compact('departments'));
       
    }
   

 
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Deppartment $deppartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deppartment $deppartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Deppartment $deppartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Deppartment $deppartment)
    {
        //
    }
}