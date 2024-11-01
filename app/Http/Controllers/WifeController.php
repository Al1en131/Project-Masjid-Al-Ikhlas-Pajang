<?php

namespace App\Http\Controllers;

use App\Models\Wife;
use Illuminate\Http\Request;

class WifeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all wives with their associated husband (resident)
        $wives = Wife::with('resident')->get();

        return view('admin.resident.wife', compact('wives'));
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
    public function show(Wife $wife)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wife $wife)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wife $wife)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wife $wife)
    {
        //
    }
}
