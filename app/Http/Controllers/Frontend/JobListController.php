<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\CompanyDetails;
use App\Models\Industry;
use App\Models\Job;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class JobListController extends Controller
{
    public function index()
    {
        $data['user'] = Auth::guard('candidate')->check();
        $data['jobs'] = Job::all();
        $data['industries'] = Industry::all();
        // $data['industries'] = Industry::withCount('jobs')->get();
        $data['locations'] = Location::all();
        $data['categories'] = Category::all();
        $data['companies'] = Company::all();
        $data['comDetails'] = CompanyDetails::all();
        $data['totalJobs'] = Job::count(); 
        return Inertia::render('Job',$data);
    }
}
