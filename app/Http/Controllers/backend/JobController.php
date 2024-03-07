<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Industry;
use App\Models\Job;
use App\Models\Location;
use App\Models\Company;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::guard('company')->user();

        if ($user) {
            $jobs = Job::where('company_id', $user->id)->get();
        } elseif (Auth::guard('admin')->check()) {
            $jobs = Job::all();
        } else {
            $jobs = [];
        }
    
        $totalJobs = Job::count();
        return view('backend.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::all();
        $industry= Industry::all();
        $categories = Category::all();
        $jobs = Job::all();
        return view('backend.jobs.create',compact('jobs','locations','industry','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $companyID = Auth::guard('company')->user()->id;

        $expiredPayment = Payment::where('company_id', $companyID)->latest()->first();
        if ($expiredPayment && Carbon::parse($expiredPayment->expired_date)->isToday()) {
            $post = Company::find($companyID);
            $post->limit = 0;
            $post->save();
            return redirect()->back()->with('error', 'Your limit has expired. Please buy a package to continue.');
        }

        $company = Company::find($companyID);
        $jobCount = $company->limit;
        $left = $jobCount-1; 
       
        // $jobCount = Company::select('limit')->where('id', $companyID)->first();
        if($jobCount > 0){
            $validate = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'salary' => 'required|numeric',
                'position' => 'required',
                'category' => 'required',
                'location' => 'required',
                'industry' => 'required',
                'vacancy' => 'required|numeric',
                'start_date' => 'required',
                'end_date' => 'required',
                'photo' => 'mimes:jpg,jpeg,png|nullable'
            ]);
            if ($request->hasFile('photo')) {
                $filename = time() . '.' . $request->photo->extension();
                $request->photo->move('uploads', $filename);
            }else {
                $filename = 'uploads/default_image.jpg'; 
            }
            
            if ($validate) {
                $data = [
                    'title' => $request->title,
                    'position' => $request->position,
                    'description' => $request->description,
                    'salary' => $request->salary,
                    'vacancy' => $request->vacancy,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'category_id' => $request->category,
                    'location_id' => $request->location,
                    'industry_id' => $request->industry,
                    'company_id' => $request->company,
                    'availability' => $request->availability,
                    'image' => $filename,
                ];

            if (Job::create($data)) {
                $post = Company::find($companyID);
                $post->limit = $post->limit -1;
                $post->save();
                return redirect('company/jobs')->with('msg', 'Job Successfully Posted. ' . $left . ' posts left.');
            }}
        }
        return redirect()->back()->with('error', 'You have out of limit. Please buy a package to continue.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jobs = Job::find($id);
        $locations = Location::all();
        $industry= Industry::all();
        $categories = Category::all();
        return view('backend.jobs.edit',compact('jobs','locations','industry','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $job = Job::find($id);
        $filename = $job->image;
        if ($request->hasFile('photo')) {
            $filename = time() . '.' . $request->photo->extension();
            $request->photo->move('uploads', $filename);
        }
        
        $data = [
            'title' => $request->title,
            'position' => $request->position,
            'description' => $request->description,
            'salary' => $request->salary,
            'vacancy' => $request->vacancy,
            'category_id' => $request->category,
            'location_id' => $request->location,
            'industry_id' => $request->industry,
            'company_id' => $request->company,
            'availability' => $request->availability,
            'image' => $filename,
        ];

        $job->update($data);
        return redirect('company/jobs')->with('msg', 'Job Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $job = Job::find($id);
        $job->delete($id);
        return redirect('company/jobs')->with('msg', 'Successfully Deleted');
    }
    
}


