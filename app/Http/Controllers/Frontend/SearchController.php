<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Industry;
use App\Models\Job;
use App\Models\Location;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $data['jobs'] = Job::all();
        $data['locations'] = Location::get();
        $data['industries'] = Industry::all();
        $data['categories'] = Category::all();

        return Inertia::render('Home',$data);
    }
}
