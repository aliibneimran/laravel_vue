<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CandidateController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\JobController;
use App\Http\Controllers\Frontend\JobDetailController;
use App\Http\Controllers\Frontend\SigninController;
use App\Http\Controllers\Frontend\SignupController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);
Route::get('contact', [ContactController::class, 'index']);
Route::get('job', [JobController::class, 'index']);
Route::get('job-details/{id}', [JobDetailController::class, 'index'])->name('job.details');

//Candidate Middleware
Route::prefix('candidate')->group(function(){
    Route::get('signin',[CandidateController::class,'index'])->name('candidate_login_form');
    Route::post('login/candidate',[CandidateController::class,'login'])->name('candidate_login');
    Route::get('profile',[CandidateController::class,'profile'])->name('candidate_profile')->middleware('candidate');
    Route::get('logout',[CandidateController::class,'logout'])->name('candidate_logout')->middleware('candidate');
    Route::get('signup',[CandidateController::class,'register'])->name('candidate_register');
    Route::post('signup/create',[CandidateController::class,'registration'])->name('candidate.register.create');

    // Route::get('edit-profile', [CandidateController::class, 'editProfile'])->name('candidate.edit.profile')->middleware('candidate');
    // Route::post('update-profile', [CandidateController::class, 'updateProfile'])->name('candidate.update.profile')->middleware('candidate');
 
    // Route::get('jobs', [JobListController::class, 'index'])->name('jobs')->middleware('candidate');
    // Route::get('job/details/{id}', [JobDetailsController::class, 'index'])->name('job.details')->middleware('candidate');

    
    // Route::post('apply', [ApplicationController::class, 'application'])->name('apply.job')->middleware('candidate');
    
    Route::get('about', [AboutController::class, 'index'])->name('about_us')->middleware('candidate');
    Route::get('contact', [ContactController::class, 'index'])->name('contact_us')->middleware('candidate');
    Route::get('job', [JobController::class, 'index'])->name('all_job')->middleware('candidate');
    Route::get('job-detail', [JobDetailController::class, 'index'])->name('job_details')->middleware('candidate');

});




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
