<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Tanaman;
use Illuminate\Support\Str; 

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::with('kategori', 'tanaman')->get();
        return view('produk.indexproduk', compact('produk'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        $tanaman = Tanaman::all();
        return view('produk.create', compact('kategori', 'tanaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'id_kategori' => 'required|exists:kategoris,id_kategori',
            'id_tanaman' => 'required|exists:tanamans,id_tanaman',
        ]);

        $produkData = $request->all();

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . Str::random(10) . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('fotoproduk', $fileName, 'public');
            $produkData['gambar'] = Storage::url($filePath);
        }

        Produk::create($produkData);

        return redirect()->route('admin/produk')->with('success', 'produk added successfully');
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all();
        $tanaman = Tanaman::all();
        return view('produk.edit', compact('produk', 'kategori','tanaman'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'id_kategori' => 'required|exists:kategoris,id_kategori',
            'id_tanaman' => 'required|exists:tanamans,id_tanaman',
        ]);

        $produkData = $request->all();

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . Str::random(10) . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('fotoproduk', $fileName, 'public');
            $produkData['gambar'] = Storage::url($filePath);

            if ($produk->gambar) {
                Storage::disk('public')->delete(str_replace('/storage', '', $produk->gambar));
            }
        }

        $produk->update($produkData);

        return redirect()->route('admin/produk')->with('success', 'produk added successfully');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        if ($produk->gambar) {
            Storage::disk('public')->delete(str_replace('/storage', '', $produk->gambar));
        }
 
        $produk->delete();
 
        return redirect()->route('admin/produk')->with('success', 'produk deleted successfully');
    }
}
