<?php

use App\Http\Controllers\AuthController;
use App\Livewire\Auth\Activities;
use App\Livewire\Auth\Admin\AdminDash;
use App\Livewire\Auth\Announcement;
use App\Livewire\Auth\Contact;
use App\Livewire\Auth\FAQ;
use App\Livewire\Auth\HomePage;
use App\Livewire\Auth\LogIn;
use App\Livewire\Auth\Officer\AddActivity;
use App\Livewire\Auth\Officer\OfficerActivity;
use App\Livewire\Auth\Officer\OfficerDash;
use App\Livewire\Auth\OfficerRegistration;
use App\Livewire\Auth\ProfilingForm;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\YouthRegistration;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)->group(function () {
    Route::post('/toLogin', [AuthController::class, 'loginForm'])->name('toLogin');
    Route::post('/login_button', [AuthController::class, 'login'])->name('login.button');
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
});


// Public Function
Route::get('/', LogIn::class)->name('login');
// Route::post('/logout', function (\Illuminate\Http\Request $request) {
//     Auth::logout();
//     $request->session()->invalidate();
//     $request->session()->regenerateToken();

//     return redirect()->route('login');
// })->middleware('auth')->name('logout');




// SK Officers UI
Route::get('/SK-Officers', AdminDash::class);

// Navigation
Route::get('/home', HomePage::class)->name('home');
Route::get('/activities', Activities::class)->name('SKActivities');
Route::get('announcement', Announcement::class)->name('announce');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/faqs', FAQ::class)->name('FAQ');


Route::get('/register', Register::class)->name('register');
Route::get('/youthRegistration', YouthRegistration::class)->name('youth');
Route::get('/officerRegistration', OfficerRegistration::class)->name('officers');


// Profiling
Route::get('/profiling', ProfilingForm::class)->name('profiling');

// Officers
Route::get('/officerDashboard', OfficerDash::class)->name('officer-dash');
Route::get('/officerActivityPanel', OfficerActivity::class)->name('officer-act');
Route::get('/add-Activity', AddActivity::class)->name('add-act');