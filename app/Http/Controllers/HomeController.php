<?php

namespace App\Http\Controllers;

use App\Models\doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    
    public function index()
    {
       
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if($usertype== 'user'){
                return view('/index');
            }
            else if($usertype == 'admin'){
                return view('admin.admindashboard'); 
        
            }
            else{
                return redirect()->back();
            }
        }
    }

    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
}