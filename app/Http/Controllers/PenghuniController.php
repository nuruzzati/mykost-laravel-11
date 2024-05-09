<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Penghuni;
use App\Http\Requests\StorePenghuniRequest;
use App\Http\Requests\UpdatePenghuniRequest;

class PenghuniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penghuni = Penghuni::all();
        return view('penghuni.index', [
            'title' => 'penghuni',
            'penghuni' => $penghuni
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penghuni.create', [
            'title' => 'tambah penghuni'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'kelamin' => 'required'
        ]);

        Penghuni::create($validateData);
        return redirect('/penghuni')->with('success', 'penghuni berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Penghuni $penghuni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penghuni $penghuni)
    {
        return view('penghuni.edit', [
            'title' => 'edit penghuni',
            'penghuni' => $penghuni
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penghuni $penghuni)
    {
         $validateData = $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'kelamin' => 'required'
        ]);

        Penghuni::where('id', $penghuni->id)->update($validateData);
        return redirect('/penghuni')->with('success', 'penghuni berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penghuni $penghuni)
    {
        penghuni::destroy($penghuni->id);
        return redirect('/penghuni')->with('success', 'data penghuni berhasil dihapus');
    }
}
