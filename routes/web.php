<?php

use App\Livewire\Auth\Activities;
use App\Livewire\Auth\Admin\AdminDash;
use App\Livewire\Auth\Announcement;
use App\Livewire\Auth\Contact;
use App\Livewire\Auth\FAQ;
use App\Livewire\Auth\HomePage;
use App\Livewire\Auth\LogIn;
use App\Livewire\Auth\ProfilingForm;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\YouthRegistration;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// SK Officers UI
Route::get('/SK-Officers', AdminDash::class);

// Navigation
Route::get('/', HomePage::class)->name('home');
Route::get('/activities', Activities::class)->name('SKActivities');
Route::get('announcement', Announcement::class)->name('announce');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/faqs', FAQ::class)->name('FAQ');



Route::get('/login', LogIn::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('youthRegistration', YouthRegistration::class)->name('youth');

// Profiling
Route::get('/profiling', ProfilingForm::class)->name('profiling');