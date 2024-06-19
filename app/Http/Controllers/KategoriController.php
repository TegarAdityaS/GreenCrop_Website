<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Kategori;
 
class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::orderBy('created_at', 'DESC')->get();
 
        return view('kategori.indexkategori', compact('kategori'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kategori::create($request->all());
 
        return redirect()->route('admin/kategori')->with('success', 'kategori added successfully');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori = Kategori::findOrFail($id);
 
        return view('kategori.show', compact('kategori'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Kategori::findOrFail($id);
 
        return view('kategori.edit', compact('kategori'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = Kategori::findOrFail($id);
 
        $kategori->update($request->all());
 
        return redirect()->route('admin/kategori')->with('success', 'kategori updated successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);
 
        $kategori->delete();
 
        return redirect()->route('admin/kategori')->with('success', 'kategori deleted successfully');
    }
}