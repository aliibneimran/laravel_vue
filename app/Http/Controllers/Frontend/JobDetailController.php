<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Category;
use App\Models\Company;
use App\Models\CompanyDetails;
use App\Models\Industry;
use App\Models\Job;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class JobDetailController extends Controller
{
    public function index($id)
    {
        if(Auth::guard('candidate')->check()){
            $candidateId = Auth::guard('candidate')->user()->id;
            $data['user'] = Auth::guard('candidate')->check();
            $data['candidate'] = Auth::guard('candidate')->user();
            $data['application'] = Applicant::where('candidate_id', $candidateId)->where('job_id', $id)->first();

            $data['jobs'] = Job::find($id);
            $data['categories'] = Category::all();
            $data['industries'] = Industry::all();
            $data['locations'] = Location::all();
            $data['companies'] = Company::all();
            $data['comDetails'] = CompanyDetails::all();
            $data['token'] = csrf_token();
            return Inertia::render('JobDetails',$data);
        } else {
            $data['jobs'] = Job::find($id);
            $data['categories'] = Category::all();
            $data['industries'] = Industry::all();
            $data['locations'] = Location::all();
            $data['companies'] = Company::all();
            $data['comDetails'] = CompanyDetails::all();
            return Inertia::render('JobDetails',$data);
        }
    }
}
