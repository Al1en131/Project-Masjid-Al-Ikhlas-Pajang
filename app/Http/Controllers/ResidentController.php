<?php

namespace App\Http\Controllers;

use App\Models\Children;
use App\Models\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Resident::query();
        $residents = Resident::paginate(10);

        // Apply filters based on request parameters
        if ($request->filled('name')) {
            $query->where('name', 'like', "%{$request->input('name')}%");
        }

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        if ($request->filled('orphan')) {
            $query->where('orphan', $request->input('orphan'));
        }

        if ($request->filled('blood')) {
            $query->where('blood', $request->input('blood'));
        }

        // Execute the query
        $residents = $query->get();

        return view('admin.resident.index', [
            'residents' => $residents,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resident.create');
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
            'nik', 'name', 'gender', 'birth', 'status', 'religion', 'blood', 'phone', 'job', 'last_education'
        ]));

        // Store wife data if available
        if ($request->filled(['name_wife'])) {
            $resident->wife()->create($request->only([
                'name_wife', 'birth_wife', 'gender_wife', 'religion_wife', 'blood_wife', 'phone_wife', 'job_wife', 'last_education_wife'
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

        return redirect()->route('admin.resident.index')->with('success', 'Resident created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Resident $resident)
    {
        return view('admin.resident.show', compact('resident'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $resident = Resident::with(['wife', 'children'])->findOrFail($id);

        $wife = $resident->wife;

        $children = $resident->children;

        return view('admin.resident.edit', compact('resident', 'wife', 'children'));
    }




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
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
            'name_wife' => 'required|string|max:255',
            'birth_wife' => 'required|string|max:255',
            'gender_wife' => 'required|string|max:10',
            'religion_wife' => 'required|string|max:20',
            'blood_wife' => 'required|string|max:10',
            'phone_wife' => 'required|string|max:15',
            'job_wife' => 'required|string|max:255',
            'last_education_wife' => 'required|string|max:20',
            'name_child.*' => 'nullable|string|max:255',
            'birth_child.*' => 'nullable|string|max:255',
            'gender_child.*' => 'nullable|string|max:10',
            'status_child.*' => 'nullable|string|max:20',
            'blood_child.*' => 'nullable|string|max:10',
            'religion_child.*' => 'nullable|string|max:20',
            'phone_child.*' => 'nullable|string|max:15',
            'job_child.*' => 'nullable|string|max:255',
            'last_education_child.*' => 'nullable|string|max:20',
        ]);

        $resident = Resident::findOrFail($id);

        $resident->update([
            'nik' => $request->input('nik'),
            'user_id' => $request->input('user_id'),
            'name' => $request->input('name'),
            'gender' => $request->input('gender'),
            'birth' => $request->input('birth'),
            'status' => $request->input('status'),
            'religion' => $request->input('religion'),
            'blood' => $request->input('blood'),
            'phone' => $request->input('phone'),
            'job' => $request->input('job'),
            'last_education' => $request->input('last_education'),
        ]);

        // Update wife information
        $resident->wife()->update([
            'name_wife' => $request->input('name_wife'),
            'birth_wife' => $request->input('birth_wife'),
            'gender_wife' => $request->input('gender_wife'),
            'religion_wife' => $request->input('religion_wife'),
            'blood_wife' => $request->input('blood_wife'),
            'phone_wife' => $request->input('phone_wife'),
            'job_wife' => $request->input('job_wife'),
            'last_education_wife' => $request->input('last_education_wife'),
        ]);

        // Get current children
        $currentChildren = $resident->children()->get();
        $currentChildrenIds = $currentChildren->pluck('id')->toArray();

        $children = $request->input('name_child', []);
        $updatedChildrenIds = [];

        foreach ($children as $index => $name) {
            $child = $currentChildren[$index] ?? new Children();
            $child->fill([
                'name_child' => $request->input('name_child.' . $index),
                'birth_child' => $request->input('birth_child.' . $index),
                'gender_child' => $request->input('gender_child.' . $index),
                'status_child' => $request->input('status_child.' . $index),
                'blood_child' => $request->input('blood_child.' . $index),
                'religion_child' => $request->input('religion_child.' . $index),
                'phone_child' => $request->input('phone_child.' . $index),
                'job_child' => $request->input('job_child.' . $index),
                'last_education_child' => $request->input('last_education_child.' . $index),
            ]);

            // Assign resident_id
            $child->resident_id = $resident->id;

            $child->save();

            $updatedChildrenIds[] = $child->id;
        }

        // Delete children that are no longer in the list
        $childrenToDelete = array_diff($currentChildrenIds, $updatedChildrenIds);
        Children::whereIn('id', $childrenToDelete)->delete();

        return redirect()->route('admin.resident.index')->with('success', 'Data updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $resident = Resident::findOrFail($id);
        $resident->children()->delete(); // Delete associated children
        $resident->wife()->delete(); // Delete associated wife
        $resident->delete(); // Delete the resident itself

        return redirect()->route('admin.resident.index')->with('success', 'Resident deleted successfully.');
    }
}
