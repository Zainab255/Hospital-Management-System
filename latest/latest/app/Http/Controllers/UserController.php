<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.user', compact('users'));
    }
    public function store(Request $request)
    {
        $users = new User;
        $users->id = $request->id;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        return redirect()->route('users');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = user::find($id);
        return view('/admin.edituser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
             'email' => 'required'
        ]);
        $id = $request->id;
        $users = user::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->save();
        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $id = User::find($id);
        $id->delete();
        return redirect()->route('users');
        
    }
}

