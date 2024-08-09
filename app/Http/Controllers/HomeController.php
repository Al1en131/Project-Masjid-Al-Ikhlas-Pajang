<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home($user_id, $resident_id, Resident $resident)
    {
        // Ambil data resident berdasarkan resident_id
        $resident = Resident::find($resident_id);
        $spouse = $resident ? $resident->wife : null;
        $children = $resident ? $resident->children : [];

        return view('user.home', compact('resident', 'spouse', 'children'));
    }

    public function index()
    {
        $resident_id = null;
        if (Auth::check()) {
            // Misalkan kita ambil resident_id berdasarkan user yang login
            $resident = Resident::where('user_id', Auth::id())->first();
            if ($resident) {
                $resident_id = $resident->id;
            }
        }
        
        return view('welcome', compact('resident_id'));
    }



    public function dashboard(Resident $resident)
    {
        $totalResident = Resident::all()->count();

        return view('dashboard', [
            'totalResident' => $totalResident,
        ]);
    }

    public function finance()
    {
        return view('finance.index');
    }
}
