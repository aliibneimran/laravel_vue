<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class StaticController extends Controller
{
    public function termCondition()
    {
        $data['user'] = Auth::guard('candidate')->check();
        return Inertia::render('TermCondition',$data);
    }
    public function privacy()
    {
        $data['user'] = Auth::guard('candidate')->check();
        return Inertia::render('Privacy',$data);
    }
    public function faq()
    {
        $data['user'] = Auth::guard('candidate')->check();
        return Inertia::render('Faq',$data);
    }
    public function resume()
    {
        $data['user'] = Auth::guard('candidate')->check();
        return Inertia::render('Resume',$data);
    }
}
