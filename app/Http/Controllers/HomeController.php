<?php

namespace App\Http\Controllers;

use App\Models\Children;
use App\Models\Property;
use App\Models\Resident;
use App\Models\Wife;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home($user_id, $resident_id)
    {
        // Verifikasi bahwa user_id yang dikirimkan adalah milik pengguna yang sedang login
        if (Auth::id() !== (int)$user_id) {
            abort(403, 'Unauthorized action.');
        }

        // Ambil data resident berdasarkan resident_id
        $resident = Resident::find($resident_id);

        // Verifikasi bahwa resident_id milik user_id yang dikirimkan
        if ($resident && $resident->user_id !== (int)$user_id) {
            abort(403, 'Unauthorized action.');
        }

        $spouse = $resident ? $resident->wife : null;
        $children = $resident ? $resident->children : [];

        // Kirim data ke view, termasuk status keberadaan resident
        return view('user.home', compact('resident', 'spouse', 'children'))
            ->with('residentExists', $resident !== null);
    }

    public function index()
    {
        $totalResidents = Resident::count();

        // Hitung jumlah laki-laki dan perempuan di Resident
        $totalMale = Resident::where('gender', 'Laki-Laki')->count();
        $totalFemale = Resident::where('gender', 'Perempuan')->count();

        // Hitung jumlah wife dan child yang terkait dengan Resident
        $totalWives = Wife::count();
        $totalChildren = Children::count();

        // Hitung total jama'ah (Resident + Wife + Child)
        $totalJamaah = $totalResidents + $totalWives + $totalChildren;

        // Hitung jumlah laki-laki dan perempuan di Wife dan Child
        $totalMale += Wife::where('gender_wife', 'Laki-Laki')->count() + Children::where('gender_child', 'Laki-Laki')->count();
        $totalFemale += Wife::where('gender_wife', 'Perempuan')->count() + Children::where('gender_child', 'Perempuan')->count();
        $resident_id = null;
        if (Auth::check()) {
            // Misalkan kita ambil resident_id berdasarkan user yang login
            $resident = Resident::where('user_id', Auth::id())->first();
            if ($resident) {
                $resident_id = $resident->id;
            }
        }

        return view('welcome', compact('resident_id', 'totalJamaah', 'totalMale', 'totalFemale'));
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

    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nik' => 'required|string|max:20',
            'user_id' => 'nullable|string',
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'birth' => 'required|string',
            'status' => 'required|string',
            'religion' => 'required|string',
            'blood' => 'required|string',
            'phone' => 'required|string',
            'job' => 'required|string',
            'last_education' => 'required|string',

            'name_wife' => 'nullable|string|max:255',
            'birth_wife' => 'nullable|string',
            'gender_wife' => 'nullable|string',
            'religion_wife' => 'nullable|string',
            'blood_wife' => 'nullable|string',
            'phone_wife' => 'nullable|string',
            'job_wife' => 'nullable|string',
            'last_education_wife' => 'nullable|string',
            'name_child.*' => 'nullable|string|max:255',
            'birth_child.*' => 'nullable|string',
            'gender_child.*' => 'nullable|string',
            'status_child.*' => 'nullable|string',
            'blood_child.*' => 'nullable|string',
            'religion_child.*' => 'nullable|string',
            'phone_child.*' => 'nullable|string',
            'job_child.*' => 'nullable|string',
            'last_education_child.*' => 'nullable|string',
        ]);

        // Store the resident data
        $resident = Resident::create($request->only([
            'nik',
            'name',
            'gender',
            'birth',
            'status',
            'religion',
            'blood',
            'phone',
            'job',
            'last_education'
        ]));

        // Store wife data if available
        if ($request->filled(['name_wife'])) {
            $resident->wife()->create($request->only([
                'name_wife',
                'birth_wife',
                'gender_wife',
                'religion_wife',
                'blood_wife',
                'phone_wife',
                'job_wife',
                'last_education_wife'
            ]));
        }

        // Store children data if available
        if ($request->has('name_child') && is_array($request->input('name_child'))) {
            foreach ($request->input('name_child') as $key => $name) {
                // Check if the name is not null before creating a child record
                if (!empty($name)) {
                    $resident->children()->create([
                        'name_child' => $request->input('name_child')[$key] ?? null,
                        'birth_child' => $request->input('birth_child')[$key] ?? null,
                        'gender_child' => $request->input('gender_child')[$key] ?? null,
                        'status_child' => $request->input('status_child')[$key] ?? null,
                        'blood_child' => $request->input('blood_child')[$key] ?? null,
                        'religion_child' => $request->input('religion_child')[$key] ?? null,
                        'phone_child' => $request->input('phone_child')[$key] ?? null,
                        'job_child' => $request->input('job_child')[$key] ?? null,
                        'last_education_child' => $request->input('last_education_child')[$key] ?? null,
                    ]);
                }
            }
        }

        return redirect()->route('user.home')->with('success', 'Resident created successfully.');
    }
}
