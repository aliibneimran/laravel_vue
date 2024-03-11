<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\Industry;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AboutController extends Controller
{
    public function index()
    {
        $data['user'] = Auth::guard('candidate')->check();
        $data['total_industry'] = Industry::count();
        $data['total_jobs'] = Job::count();
        $data['total_company'] = Company::count(); 
        $data['total_candidate'] = Candidate::count(); 
        return Inertia::render('About',$data);
    }
}
