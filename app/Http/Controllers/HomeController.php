<?php

namespace App\Http\Controllers;

use App\Models\Children;
use App\Models\Financial;
use App\Models\ProfileMasjid;
use App\Models\Property;
use App\Models\Resident;
use App\Models\User;
use App\Models\Wife;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        $profiles = ProfileMasjid::all();
        $totalResidents = Resident::count();
        $financial = Financial::all();
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

        return view('welcome', compact('resident_id', 'totalJamaah', 'totalMale', 'totalFemale', 'profiles','financial'));
    }



    public function dashboard(Resident $resident)
    {
        $totalResident = Resident::all()->count();

        return view('dashboard', [
            'totalResident' => $totalResident,
        ]);
    }

    public function create($user_id)
    {
        $resident = Resident::where('user_id', $user_id)->with('children')->first(); // Retrieve the resident data including children based on user_id
        return view('user.create', compact('resident', 'user_id')); // Pass both resident and user_id to the view
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $user_id)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'nik' => 'required|string|max:255',
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

        // Find the user
        $user = User::findOrFail($user_id);

        // Create or update the resident record
        $resident = Resident::updateOrCreate(
            ['user_id' => $user_id],
            [
                'nik' => $validatedData['nik'],
                'name' => $validatedData['name'],
                'gender' => $validatedData['gender'],
                'birth' => $validatedData['birth'],
                'status' => $validatedData['status'],
                'religion' => $validatedData['religion'],
                'blood' => $validatedData['blood'],
                'phone' => $validatedData['phone'],
                'job' => $validatedData['job'],
                'last_education' => $validatedData['last_education'],
            ]
        );

        // Update or create the spouse data if provided
        if ($request->has('name_wife') && !is_null($request->input('name_wife'))) {
            $resident->wife()->updateOrCreate(
                ['resident_id' => $resident->id],
                [
                    'name_wife' => $request->input('name_wife'),
                    'birth_wife' => $request->input('birth_wife'),
                    'gender_wife' => $request->input('gender_wife'),
                    'religion_wife' => $request->input('religion_wife'),
                    'blood_wife' => $request->input('blood_wife'),
                    'phone_wife' => $request->input('phone_wife'),
                    'job_wife' => $request->input('job_wife'),
                    'last_education_wife' => $request->input('last_education_wife'),
                ]
            );
        }

        $currentChildren = $resident->children()->get();
        $children = $request->input('name_child', []);

        foreach ($children as $index => $name) {
            if (!empty($name)) { // Abaikan jika name_child kosong
                $child = $currentChildren[$index] ?? new Children();
                $child->fill([
                    'name_child' => $name,
                    'birth_child' => $request->input('birth_child.' . $index),
                    'gender_child' => $request->input('gender_child.' . $index),
                    'status_child' => $request->input('status_child.' . $index),
                    'blood_child' => $request->input('blood_child.' . $index),
                    'religion_child' => $request->input('religion_child.' . $index),
                    'phone_child' => $request->input('phone_child.' . $index),
                    'job_child' => $request->input('job_child.' . $index),
                    'last_education_child' => $request->input('last_education_child.' . $index),
                ]);

                $child->resident_id = $resident->id;
                $child->save();
            }
        }


        // Retrieve current children associated with the resident
        // Redirect or return response
        return redirect()->route('/')
            ->with('success', 'Data berhasil disimpan!');
    }







    public function edit($user_id, $resident_id)
    {
        // Find the resident record by resident_id
        $resident = Resident::findOrFail($resident_id);

        // Pass the user_id, resident_id, and resident data to the view
        return view('user.edit', compact('user_id', 'resident_id', 'resident'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $resident_id)
    {
        // Validate the incoming request data
        $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'nik' => 'required|string|max:20',
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

        // Find the resident record by resident_id
        $resident = Resident::findOrFail($resident_id);

        // Update the resident data
        $resident->update($request->only([
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

        // Update wife data if available
        if ($request->filled('name_wife')) {
            $wife = $resident->wife;
            if ($wife) {
                $wife->update($request->only([
                    'name_wife',
                    'birth_wife',
                    'gender_wife',
                    'religion_wife',
                    'blood_wife',
                    'phone_wife',
                    'job_wife',
                    'last_education_wife'
                ]));
            } else {
                Wife::create([
                    'resident_id' => $resident->id,
                    'name' => $request->input('name_wife'),
                    'birth' => $request->input('birth_wife'),
                    'gender' => $request->input('gender_wife'),
                    'religion' => $request->input('religion_wife'),
                    'blood' => $request->input('blood_wife'),
                    'phone' => $request->input('phone_wife'),
                    'job' => $request->input('job_wife'),
                    'last_education' => $request->input('last_education_wife')
                ]);
            }
        }

        // Update children data if available
        if ($request->has('name_child') && is_array($request->input('name_child'))) {
            foreach ($request->input('name_child') as $key => $name) {
                // Check if the name is not null before creating or updating a child record
                if (!empty($name)) {
                    $childId = $request->input('child_id')[$key] ?? null;
                    $child = $resident->children()->find($childId);
                    if ($child) {
                        $child->update([
                            'name' => $request->input('name_child')[$key] ?? null,
                            'birth' => $request->input('birth_child')[$key] ?? null,
                            'gender' => $request->input('gender_child')[$key] ?? null,
                            'status' => $request->input('status_child')[$key] ?? null,
                            'blood' => $request->input('blood_child')[$key] ?? null,
                            'religion' => $request->input('religion_child')[$key] ?? null,
                            'phone' => $request->input('phone_child')[$key] ?? null,
                            'job' => $request->input('job_child')[$key] ?? null,
                            'last_education' => $request->input('last_education_child')[$key] ?? null,
                        ]);
                    } else {
                        Children::create([
                            'resident_id' => $resident->id,
                            'name' => $request->input('name_child')[$key] ?? null,
                            'birth' => $request->input('birth_child')[$key] ?? null,
                            'gender' => $request->input('gender_child')[$key] ?? null,
                            'status' => $request->input('status_child')[$key] ?? null,
                            'blood' => $request->input('blood_child')[$key] ?? null,
                            'religion' => $request->input('religion_child')[$key] ?? null,
                            'phone' => $request->input('phone_child')[$key] ?? null,
                            'job' => $request->input('job_child')[$key] ?? null,
                            'last_education' => $request->input('last_education_child')[$key] ?? null,
                        ]);
                    }
                }
            }
        }

        return redirect()->route('user.home')->with('success', 'Data Berhasil Diubah');
    }
}
