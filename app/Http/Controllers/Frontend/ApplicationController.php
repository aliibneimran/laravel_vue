<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function application(Request $request){
        // dd($request->all());
        
        $validate = $request->validate([
            'cv' => 'mimes:pdf'
        ]);

        $filename = time() . '.' . $request->cv->extension();
        
        if ($validate) {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'contact' => $request->contact,
                'bio' => $request->bio,
                'candidate_id' => $request->candidate_id,
                'job_id' => $request->job_id,
                'company_id' => $request->company_id,
                'cv' => $filename,
            ];
        }
        // dd($data); 
        if (Applicant::create($data)) {
            $request->cv->move('uploads/cv', $filename);
            return redirect()->route('job.details')->with('msg', 'Job Successfully Post');
        }
    }
}
