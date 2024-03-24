<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class CandidateController extends Controller
{
    public function index(){
        return Inertia::render('Signin');
    }
    public function login(Request $request){
        // dd(Auth::guard('candidate')->user());
        // dd($request->session()->getId());
        
        if(Auth::guard('candidate')->attempt(['email'=> $request->email,'password'=> $request->password])){
            return redirect()->route('candidate_profile');
            // return Inertia::render('profile',compact('user'));
        }else{
            return redirect()->back()->with('msg','Please enter currect email and password');
        }

    }
    public function logout(){
        Auth::guard('candidate')->logout();
        return redirect()->route('candidate_login_form');
    }
    public function register(){
        return Inertia::render('Signup');
    }
    public function registration(Request $request){
        // dd($request->all());
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:candidates,email',
            'password' => 'required|string|min:6|confirmed',
        ]); 
        if($validation){
            $candidate = Candidate::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> Hash::make($request->password),
            ]);
        }

        Auth::guard('candidate')->login($candidate);

        return redirect()->route('candidate_profile');
        
    }
    public function profile(){
        $candidate = Auth::guard('candidate')->user();
        $user = Auth::guard('candidate')->check();
        // $canDetails = CandidateDetails::all()->where('candidate_id', Auth::guard('candidate')->user()->id)->first();
        // $jobs = Job::all();
        // $application = Applicant::get();
        return Inertia::render('Profile',compact('candidate','user'));

    }
    // public function editProfile(){
    //     $user= Auth::guard('candidate')->check();
    //     $candidate = Auth::guard('candidate')->user();
    //     $token = csrf_token();
    //     $canDetails = CandidateDetails::all()->where('candidate_id', Auth::guard('candidate')->user()->id)->first();
    //     return Inertia::render('EditProfile',compact('candidate','canDetails','token','user'));
    // } 
    
    // public function updateProfile(Request $request){
    //     // dd($request->all());
    //     $request->validate([
    //         'name' => 'string|max:255|nullable',
    //         'email' => 'email|max:255|nullable',
    //         'old_password' => 'string|min:6|nullable', 
    //         'new_password' => 'string|min:6|nullable',
    //         'password_confirmation' => 'same:new_password|min:6|nullable',
    //     ]);               
        
    //     $candidate = Candidate::findOrFail(Auth::guard('candidate')->user()->id);
        
    //     if ($request->filled('old_password')) {
    //         if (!Hash::check($request->old_password, Auth::guard('candidate')->user()->password)) {
    //             return redirect()->back()->withErrors(['old_password' => 'Incorrect old password']);
    //         }
    //     }
    //     $candidate->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => $request->filled('new_password') ? Hash::make($request->new_password) : $candidate->password,
    //     ]);

        
    //     $request->validate([
    //         'photo' => 'nullable|mimes:jpg,jpeg,png'
    //     ]);
    //     $details = [
    //         'contact' => $request->contact,
    //         'bio' => $request->bio,
    //         'address' => $request->address,
    //         'candidate_id' => $request->candidate_id,
    //     ];
    //     if ($request->hasFile('profile')) {
    //         $profile = time() . '.' . $request->file('profile')->extension();
    //         $details['image'] = $profile;
    //         $request->file('profile')->move('uploads', $profile);
    //     }
    //     $candidateDetails = CandidateDetails::where('candidate_id', Auth::guard('candidate')->user()->id)->first();

    //     if (!$candidateDetails) {
    //         CandidateDetails::create($details);
    //     } else {
    //         $candidateDetails->update($details);
    //     }
    //     return redirect()->route('candidate_profile')->with('msg', 'Profile successfully updated');
    // } 
}
