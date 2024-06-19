<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanaman;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; 

class TanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tanaman = Tanaman::orderBy('created_at', 'DESC')->get();
 
        return view('tanaman.indextanaman', compact('tanaman'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tanaman.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar_tanaman' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $tanamanData = $request->all();

        if ($request->hasFile('gambar_tanaman')) {
            $file = $request->file('gambar_tanaman');
            $fileName = time() . '_' . Str::random(10) . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('fototanaman', $fileName, 'public');
            $tanamanData['gambar_tanaman'] = Storage::url($filePath);
        }

        Tanaman::create($tanamanData);

        return redirect()->route('admin/tanaman')->with('success', 'Tanaman added successfully');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tanaman = Tanaman::findOrFail($id);
 
        return view('tanaman.show', compact('tanaman'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tanaman = Tanaman::findOrFail($id);
 
        return view('tanaman.edit', compact('tanaman'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tanaman = Tanaman::findOrFail($id);

        $request->validate([
            // Add your other validation rules here
            'gambar_tanaman' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $tanamanData = $request->all();

        if ($request->hasFile('gambar_tanaman')) {

            $file = $request->file('gambar_tanaman');
            $fileName = time() . '_' . Str::random(10) . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('fototanaman', $fileName, 'public');
            $tanamanData['gambar_tanaman'] = Storage::url($filePath);

            // Delete the old photo
            if ($tanaman->gambar_tanaman) {
                Storage::disk('public')->delete(str_replace('/storage', '', $tanaman->gambar_tanaman));
            }
        }

        $tanaman->update($tanamanData);

        return redirect()->route('admin/tanaman')->with('success', 'Tanaman updated successfully');
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tanaman = Tanaman::findOrFail($id);

        if ($tanaman->gambar_tanaman) {
            Storage::disk('public')->delete(str_replace('/storage', '', $tanaman->gambar_tanaman));
        }
 
        $tanaman->delete();
 
        return redirect()->route('admin/tanaman')->with('success', 'tanaman deleted successfully');
    }
}
