<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tanaman;
use Illuminate\Http\Request;

class TanamanGetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tanamans = Tanaman::all();
        return response()->json($tanamans);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tanaman = Tanaman::find($id);
        if (!$tanaman) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return response()->json($tanaman);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
