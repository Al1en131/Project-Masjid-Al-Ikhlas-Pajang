<?php

namespace App\Http\Controllers;

use App\Models\ProfileMasjid;
use Illuminate\Http\Request;

class ProfileMasjidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       
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
    public function show(ProfileMasjid $profileMasjid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $profile = ProfileMasjid::first(); // Mengambil data pertama atau satu-satunya
        return view('admin.profile.edit', compact('profile'));
    }

    // Memperbarui data yang ada di database
    public function update(Request $request)
    {
        $request->validate([
            'about' => 'required|string|max:500',
            'activity' => 'required|string|max:500',
            'gallery' => 'required|string|max:500',
            'address' => 'required|string|max:500',
            'detail_contact' => 'required|string|max:255',
            'detail_account_number' => 'required|string|max:255',
        ]);

        $profile = ProfileMasjid::first(); // Mengambil data pertama atau satu-satunya
        $profile->update([
            'about' => $request->about,
            'activity' => $request->activity,
            'gallery' => $request->gallery,
            'address' => $request->address,
            'detail_contact' => $request->detail_contact,
            'detail_account_number' => $request->detail_account_number,
        ]);

        return redirect()->route('dashboard')->with('success', 'Profil Masjid Berhasil Diubah');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfileMasjid $profileMasjid)
    {
        //
    }
}
