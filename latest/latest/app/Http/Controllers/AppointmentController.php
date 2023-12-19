<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Appointment;
use App\Models\Staff;
use App\Models\docterData;
use App\Models\checkout;
use Illuminate\Http\Request;
use session;

class AppointmentController extends Controller
{
    public function getStaffDeppartment()
    {
        $staffDeppartmentBreakdown = Staff::select('deppartment', DB::raw('count(*) as count'))
        ->groupBy('deppartment')
        ->get(); 
        return response()->json($staffDeppartmentBreakdown);
    }

    public function getDoctorBreakdown()
    {
        $doctorBreakdown = DocterData::select('DoctorName', DB::raw('count(*) as count'))
        ->groupBy('DoctorName')
        ->get();
        return response()->json($doctorBreakdown);
    }
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['appointList']=Appointment::all();
        return view('appoint.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appoint.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $appoint=new Appointment;
        $appoint->firstname=$request->firstname;
        $appoint->lastname=$request->lastname;
       $appoint->dateofbirth=$request->dateofbirth;
       $appoint->gender=$request->gender;
       $appoint->email=$request->email;
       $appoint->zipcode=$request->zipcode;
       $appoint->phonenumber=$request->phonenumber;
       $appoint->streetaddress=$request->streetaddress;
       $appoint->state=$request->state;
       $appoint->city=$request->city;
       $appoint->concern=$request->concern;
       $appoint->department=$request->department;
       $appoint->doctor=$request->doctor;
        $appoint->save();
        return view('/checkout.checkout');
       
    }

    public function session(Request $request) {

        \Stripe\Stripe::setApiKey(config('stripe.sk'));
    
        $username = $request->get('name');
        $emailid = $request->get('email');
        $total_amount = $request->get('total_amount');
        $twozero = '00';
        $total = $total_amount . $twozero;
        
        // Store data in the database
        $payment = new checkout;
        $payment->name = $username;
        $payment->email = $emailid;
        $payment->total_amount = $total_amount;
        $payment->save();

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'USD',
                        'product_data' => [
                            'name' => $username,
                            
                        ],
                        'unit_amount' => $total,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            // 'success_url' => route('success'),
            'success_url' => route('checkout.success',  ['id' => $payment->id]),
            'cancel_url' => route('checkout.cancel')
        ]);
    
        return redirect()->away($session->url);
    }
    

    public function success($id)
    {
        $paymentData = checkout::find($id);
    
        return view('checkout.success', compact('paymentData'));
    }
    

    public function cancel(){
        return view('checkout.cancel');
    }




    public function detail(Appointment $appoint)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function appointedit($id)
    {
        $data['appointdata']=Appointment::find($id);

        return view('appoint.edit',$data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function appointupdate(Request $request)
    {
        $id= $request->id;
        $appoint=Appointment::find($id);
        $appoint->firstname=$request->firstname;
        $appoint->lastname=$request->lastname;
       $appoint->dateofbirth=$request->dateofbirth;
       $appoint->gender=$request->gender;
       $appoint->email=$request->email;
       $appoint->zipcode=$request->zipcode;
       $appoint->phonenumber=$request->phonenumber;
       $appoint->streetaddress=$request->streetaddress;
       $appoint->state=$request->state;
       $appoint->city=$request->city;
       $appoint->concern=$request->concern;
       $appoint->department=$request->department;
       $appoint->doctor=$request->doctor;
        $appoint->save();
        return redirect('/appoint');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteappoint($id)
    {
        
        $data=Appointment::find($id);
        $data->delete();
        return redirect('/appoint');
    }
}

