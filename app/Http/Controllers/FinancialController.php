<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Financial;
use App\Models\Media;
use Financial as GlobalFinancial;
use Illuminate\Support\Facades\Storage;

class FinancialController extends Controller
{
    /**
     * Display a listing of the financial records.
     */
    public function index()
    {
        $financials = Financial::all();

        // Retrieve media associated with the Financial model
       

        return view('admin.financial.index', compact('financials'));
    }

    /**
     * Show the form for creating a new financial record.
     */
    public function create()
    {
        return view('financials.create');
    }

    /**
     * Store a newly created financial record in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'file' => 'required|file|mimes:pdf,jpg,png',
        ]);

        // Handle file upload
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->storeAs('public/financials', $fileName);

        // Create media record
        $media = Media::create([
            'uuid' => \Illuminate\Support\Str::uuid(),
            'collection_name' => 'financial_reports',
            'name' => pathinfo($fileName, PATHINFO_FILENAME),
            'file_name' => $fileName,
            'mime_type' => $file->getMimeType(),
            'disk' => 'public',
            'size' => $file->getSize(),
            'manipulations' => json_encode([]),
            'custom_properties' => json_encode([]),
            'generated_conversions' => json_encode([]),
            'responsive_images' => json_encode([]),
            'order_column' => null,
        ]);

        // Create financial record
        Financial::create([
            'date' => $request->date,
            'media_id' => $media->id,
        ]);

        return redirect()->route('financials.index')->with('success', 'Financial record created successfully.');
    }

    /**
     * Show the form for editing the specified financial record.
     */
    public function edit(Financial $financial)
    {
        return view('financials.edit', compact('financial'));
    }

    /**
     * Update the specified financial record in storage.
     */
    public function update(Request $request, Financial $financial)
    {
        $request->validate([
            'date' => 'required|date',
            'file' => 'nullable|file|mimes:pdf,jpg,png',
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            // Delete old file
            if ($financial->media) {
                Storage::disk($financial->media->disk)->delete('financials/' . $financial->media->file_name);
            }

            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('public/financials', $fileName);

            // Update media record
            $financial->media->update([
                'name' => pathinfo($fileName, PATHINFO_FILENAME),
                'file_name' => $fileName,
                'mime_type' => $file->getMimeType(),
                'size' => $file->getSize(),
            ]);
        }

        // Update financial record
        $financial->update([
            'date' => $request->date,
        ]);

        return redirect()->route('financials.index')->with('success', 'Financial record updated successfully.');
    }

    /**
     * Remove the specified financial record from storage.
     */
    public function destroy(Financial $financial)
    {
        // Delete associated media file
        if ($financial->media) {
            Storage::disk($financial->media->disk)->delete('financials/' . $financial->media->file_name);
            $financial->media->delete();
        }

        // Delete financial record
        $financial->delete();

        return redirect()->route('financials.index')->with('success', 'Financial record deleted successfully.');
    }
}
