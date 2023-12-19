<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DeppartmentController;
use App\Http\Controllers\DocterDataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// **********frontent routs*************
Route::get('/', function () {
    return view('/welcome');
})->name('welcome');

Route::get('/contact2', function () {
    return view('contact2');
});
Route::get('/doctors', function () {
    return view('doctors');
});

Route::get('/firstlearnmore', function () {
    return view('firstlearnmore');
});
Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/lab-attendend', function () {
    return view('lab-attendend');
});

Route::get('/labs', function () {
    return view('labs');
});

Route::get('/mission', function () {
    return view('mission');
});
Route::get('/nurses', function () {
    return view('nurses');
});Route::get('/opd', function () {
    return view('opd');
});Route::get('/vision', function () {
    return view('vision');
});Route::get('/welcome', function () {
    return view('welcome');
});Route::get('/zulfiqar', function () {
    return view('zulfiqar');
});

Route::view('/contact2','contact2')->name('contact2');
Route::view('/findDoctors','findDoctor')->name('findDoctor');
Route::view('/doctor','doctors')->name('doctors');
Route::view('/firstlearnmore','firstlearnmore')->name('firstlearnmore');

Route::view('/lab-attendend','lab-attendend')->name('lab-attendend');
Route::view('/labs','labs')->name('labs');

Route::view('/mission','mission')->name('mission');
Route::view('/vision','vision')->name('vision');

Route::view('/nurses','nurses')->name('nurses');
Route::view('/opd','opd')->name('opd');
Route::view('/surgries','surgries')->name('surgries');
Route::view('/welcome','welcome')->name('welcome');
Route::view('/zulfiqar','zulfiqar')->name('zulfiqar');

//********** backend routes ********

Route::get('register', function () {
    return view('/register');
})->name('register');


Route::get('doctor', function () {
    return view('/doctors');
})->name('doctors');

Route::get('admindashboard', function () {
    return view('/admin.admindashboard');
})->name('admindashboard');

Route::get('users', function () {
    return view('/admin.user');
})->name('users');

Route::get('/success', function () {
    return view('checkout.success');
});

//********************************* BACKEND *******************************/

Route::get('register', function () {
    return view('/register');
})->name('register');

Route::get('admindashboard', function () {
    return view('/admin.admindashboard');
})->name('admindashboard');

Route::get('users', function () {
    return view('/admin.user');
})->name('users');

Route::get('/findDoctor', function () {
    return view('/finddoctors.findDoctor');
})->name('findDoctor');


Route::get('/success', function () {
    return view('checkout.success');
});

// ========= Appointment routes =============

Route::prefix('appoint')->group(function(){
    Route::get('/',[AppointmentController::class,'index'])->name('appoint.index');
    Route::get('/create',[AppointmentController::class,'create'])->name('appoint.create');
    Route::get('/store',[AppointmentController::class,'store'])->name('appoint.store');
    Route::get('/edit/{id}',[AppointmentController::class,'edit'])->name('appoint.edit');
    Route::get('/deleteappoint/{id}',[AppointmentController::class,'deleteappoint'])->name('deleteappoint');
    Route::get('/detail/{id}',[AppointmentController::class,'detail'])->name('appoint.detail');
});
Route::get('/appointedit/{id}',[AppointmentController::class,'appointedit'])->name('appoint.edit');
Route::get('/updateappoint',[AppointmentController::class,'appointupdate'])->name('appointupdate');
Route::get('/deleteappoint/{id}',[AppointmentController::class,'deleteappoint'])->name('deleteappoint');
Route::get('/detail/{id}',[AppointmentController::class,'detail'])->name('appoint.detail');
Route::get('/get-deppartment-breakdown-staff',[AppointmentController::class,'getStaffDeppartment']);
Route::get('/get-doctor-breakdown',[AppointmentController::class,'getDoctorBreakdown']);
  

//============ Staff Routes ===========

Route::prefix('staff')->group(function(){
    Route::get('/',[StaffController::class,'index'])->name('staff.index');
    Route::get('/create',[StaffController::class,'create'])->name('staff.create');
    Route::get('/store',[StaffController::class,'store'])->name('staff.store');
});

Route::get('/staffedit/{id}',[StaffController::class,'staffedit'])->name('staff.edit');
Route::get('/updatestaff',[StaffController::class,'updatestaff'])->name('updatestaff');
Route::get('/deletestaff/{id}',[StaffController::class,'deletestaff'])->name('deletestaff');
Route::get('/detail/{id}',[StaffController::class,'detail'])->name('staff.detail');
// Route::get('/depptartment',[StaffController::class,'dpetindex']);
Route::get('/get-deppartment-breakdown',[DeppartmentController::class,'getDeppartmentBreakdown']);

Route::get('/departments', [DeppartmentController::class, 'index']);
Route::get('/departments_id/{id}', [DeppartmentController::class, 'showDepartments'])->name('showDepartments');


// ============ CHECKOUT ===========
Route::get('/session', [AppointmentController::class, 'session'])->name('session');
Route::get('/success/{id}', [AppointmentController::class, 'success'])->name('checkout.success');
Route::get('/cancel', [AppointmentController::class, 'cancel'])->name('checkout.cancel');

    
// =========== Doctors ============
Route::get('/doctors', [DocterDataController::class, 'index'])->name('doctorcrud');
Route::get('/storedoctor', [DocterDataController::class, 'store'])->name('storedoctor');
Route::get('/DetailsCrud/{id}', [DocterDataController::class, 'details'])->name('details');
Route::get('/DeleteDoctor/{id}', [DocterDataController::class, 'destroy'])->name('DeleteDoctor');
Route::get('/findDoctor', [DocterDataController::class, 'finddoctor'])->name('finddoctor');
Route::get('/doctor/{id}', [DocterDataController::class, 'show'])->name('showdoctor');

// ========== Admin Panel ==========
    Route::get('/dashboard', [HomeController::class, 'index'])
                    ->middleware(['auth', 'verified'])->name('dashboard');

// ========== Users =============
Route::get('/users',[UserController::class,'index'])->name('users');
Route::get('/store',[UserController::class,'store'])->name('storeuser');
Route::get('/update',[UserController::class,'update'])->name('update');
Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');
Route::get('/delete/{id}',[UserController::class,'destroy'])->name('deleteuser');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';