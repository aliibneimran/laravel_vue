<?php

namespace App\Http\Controllers;

use App\Models\Signin;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SigninController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Signin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Signin $signin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Signin $signin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Signin $signin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Signin $signin)
    {
        //
    }
}
