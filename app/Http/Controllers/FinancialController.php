<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Financial;
use App\Models\Media;
use Financial as GlobalFinancial;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;

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
        return view('admin.financial.create');
    }

    /**
     * Store a newly created financial record in storage.
     */
    // 

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload to telegrap.ph
        $imageUrl = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->getPathname();

            // Upload the image to telegrap.ph
            $client = new Client();
            $response = $client->post('https://telegra.ph/upload', [
                'multipart' => [
                    [
                        'name'     => 'file',
                        'contents' => fopen($imagePath, 'r'),
                        'filename' => $image->getClientOriginalName()
                    ],
                ]
            ]);

            // Parse the response to get the image URL
            $body = json_decode($response->getBody()->getContents(), true);
            if (isset($body[0]['src'])) {
                $imageUrl = 'https://telegra.ph/' . $body[0]['src'];
            } else {
                return redirect()->back()
                    ->withErrors(['image' => 'Failed to upload image.'])
                    ->withInput();
            }
        }

        // Save the financial data including the image URL
        $financial = new Financial();
        $financial->date = $request->date;
        $financial->image = $imageUrl; // Save the URL of the uploaded image
        $financial->save();

        return redirect()->route('admin.financial.index')->with('success', 'Data Laporan Keuangan Berhasil Ditambahkan');
    }

    /**
     * Show the form for editing the specified financial record.
     */
    public function edit($id)
    {
        // Retrieve the financial record by ID
        $financial = Financial::findOrFail($id);
    
        // Return the edit view with the financial record
        return view('admin.financial.edit', compact('financial'));
    }
    

    /**
     * Update the specified financial record in storage.
     */
    public function update(Request $request, Financial $financial)
    {
        // Validate the request
        $request->validate([
            'date' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Debugging: Check the input data
    
        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Upload the new image to telegrap.ph
            $image = $request->file('image');
            $imagePath = $image->getPathname();
    
            $client = new Client();
            $response = $client->post('https://telegra.ph/upload', [
                'multipart' => [
                    [
                        'name'     => 'file',
                        'contents' => fopen($imagePath, 'r'),
                        'filename' => $image->getClientOriginalName()
                    ],
                ]
            ]);
    
            $body = json_decode($response->getBody()->getContents(), true);
            if (isset($body[0]['src'])) {
                $newImageUrl = 'https://telegra.ph/' . $body[0]['src'];
                // Debugging: Check the new image URL
    
                // Delete the old image if it exists
                if ($financial->image) {
                    Storage::delete($financial->image);
                }
    
                // Update the record with the new image URL
                $financial->image = $newImageUrl;
            } else {
                return redirect()->back()
                    ->withErrors(['image' => 'Failed to upload image.'])
                    ->withInput();
            }
        }
    
        // Update the date
        $financial->date = $request->date;
    
        // Save the updated record
       // Debugging: Check the model before saving
        $financial->save();
    
        return redirect()->route('admin.financial.index')->with('success', 'Data Laporan Keuangan Berhasil Diubah');
    }
    

    /**
     * Remove the specified financial record from storage.
     */
    public function destroy(Financial $financial)
    {
        // Hapus data financial dari database
        $financial->delete();
        
        // Redirect ke route index dengan pesan sukses
        return redirect()->route('admin.financial.index')->with('success', 'Data berhasil dihapus');
    }
    
}
