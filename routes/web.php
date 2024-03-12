<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\ApplicantController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\IndustryController;
use App\Http\Controllers\backend\JobController;
use App\Http\Controllers\backend\LocationController;
use App\Http\Controllers\backend\PackageController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ApplicationController;
use App\Http\Controllers\Frontend\CandidateController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\JobDetailController;
use App\Http\Controllers\Frontend\JobListController;
use App\Http\Controllers\Frontend\SigninController;
use App\Http\Controllers\Frontend\SignupController;
use App\Http\Controllers\frontend\StaticController;
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
Route::get('job', [JobListController::class, 'index']);
Route::get('job-details/{id}', [JobDetailController::class, 'index'])->name('job.details');
Route::get('terms & condition', [StaticController::class, 'termCondition']);
Route::get('privacy', [StaticController::class, 'privacy']);
Route::get('faq', [StaticController::class, 'faq']);


//Candidate Middleware
Route::prefix('candidate')->group(function(){
    Route::get('signin',[CandidateController::class,'index'])->name('candidate_login_form');
    Route::post('login/candidate',[CandidateController::class,'login'])->name('candidate_login');
    Route::get('profile',[CandidateController::class,'profile'])->name('candidate_profile')->middleware('candidate');
    Route::get('logout',[CandidateController::class,'logout'])->name('candidate_logout')->middleware('candidate');
    Route::get('signup',[CandidateController::class,'register'])->name('candidate_register');
    Route::post('signup/create',[CandidateController::class,'registration'])->name('candidate.register.create');

    Route::get('resume', [StaticController::class, 'resume'])->name('resume')->middleware('candidate');
    // Route::get('edit-profile', [CandidateController::class, 'editProfile'])->name('candidate.edit.profile')->middleware('candidate');
    // Route::post('update-profile', [CandidateController::class, 'updateProfile'])->name('candidate.update.profile')->middleware('candidate');
 
    // Route::get('jobs', [JobListController::class, 'index'])->name('jobs')->middleware('candidate');
    // Route::get('job/details/{id}', [JobDetailsController::class, 'index'])->name('job.details')->middleware('candidate');

    
    Route::post('apply', [ApplicationController::class, 'application'])->name('apply.job')->middleware('candidate');
    
    Route::get('about', [AboutController::class, 'index'])->name('about_us')->middleware('candidate');
    Route::get('contact', [ContactController::class, 'index'])->name('contact_us')->middleware('candidate');
    Route::get('job', [JobListController::class, 'index'])->name('all_job')->middleware('candidate');
    Route::get('job-detail', [JobDetailController::class, 'index'])->name('job_details')->middleware('candidate');

});

//Admin Middleware
Route::prefix('admin')->group(function(){
    Route::get('login',[AdminController::class,'index'])->name('admin_login_form');
    Route::post('login/owner',[AdminController::class,'login'])->name('admin_login');
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin_dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class,'logout'])->name('admin_logout')->middleware('admin');
    Route::get('register',[AdminController::class,'register'])->name('admin_register');
    Route::post('register/create',[AdminController::class,'registration'])->name('admin.register.create');

    Route::resource('categories', CategoryController::class)->middleware('admin');
    Route::resource('locations', LocationController::class)->middleware('admin');
    Route::resource('industries', IndustryController::class)->middleware('admin');
    Route::resource('packages', PackageController::class)->middleware('admin');

    Route::get('jobs', [JobController::class,'index'])->name('all-jobs')->middleware('admin');
    Route::get('jobs/destroy/{id}', [JobController::class,'destroy'])->name('all-jobs.destroy')->middleware('admin');

    Route::get('payments',[PaymentController::class,'index'])->name('payments.index')->middleware('admin');
    Route::post('payments/approve/{id}',[PaymentController::class,'approve'])->name('payments.approve')->middleware('admin');




});

//Company Middleware
Route::prefix('company')->group(function(){
    Route::get('login',[CompanyController::class,'index'])->name('company_login_form');
    Route::post('login/company',[CompanyController::class,'login'])->name('company_login');
    Route::get('dashboard',[CompanyController::class,'dashboard'])->name('company_dashboard')->middleware('company');
    Route::get('logout',[CompanyController::class,'logout'])->name('company_logout')->middleware('company');
    Route::get('register',[CompanyController::class,'register'])->name('company_register');
    Route::post('register/create',[CompanyController::class,'registration'])->name('company.register.create');

    Route::get('password',[CompanyController::class,'forgetPassword'])->name('company.password');

    Route::get('profile',[CompanyController::class,'profile'])->name('company_profile')->middleware('company');
    Route::get('edit-profile', [CompanyController::class, 'editProfile'])->name('company.edit.profile')->middleware('company');
    Route::post('update-profile', [CompanyController::class, 'updateProfile'])->name('company.update.profile')->middleware('company');

    Route::get('packages',[PackageController::class,'index'])->name('packages')->middleware('company');
    Route::get('packages/show/{id}', [PackageController::class,'show'])->name('packages.show')->middleware('company');

    Route::get('payments',[PaymentController::class,'index'])->name('payments')->middleware('company');
    Route::post('payments',[PaymentController::class,'store'])->name('payments.store')->middleware('company');

    Route::resource('jobs', JobController::class)->middleware('company');
    Route::resource('applications', ApplicantController::class)->middleware('company');
    
    Route::get('cv/{id}', [ApplicantController::class,'show'])->name('cv.show')->middleware('company');

    Route::post('approve/{id}',[ApplicantController::class,'approve'])->name('approve')->middleware('company');

});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
