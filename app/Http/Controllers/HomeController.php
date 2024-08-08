<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Resident;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home');
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
