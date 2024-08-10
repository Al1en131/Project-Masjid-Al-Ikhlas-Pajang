<?php

namespace App\Http\Controllers;

use App\Models\Children;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all children with their associated father (resident) and mother (wife)
        $children = Children::with(['resident'])->get();

        return view('admin.resident.child', compact('children'));
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
    public function show(Children $children)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Children $children)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Children $children)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Children $children)
    {
        //
    }
}
