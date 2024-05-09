<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\Penghuni;

use Illuminate\Http\Request;
use App\Http\Requests\StoreKostRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateKostRequest;

class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kost = Kost::all();
        return view('kost.index', [
            'title' => 'kost',
            'kost' => $kost
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('kost.create', [
            'title' => 'tambah kost',
            'penghuni' => Penghuni::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nama' => 'required',
            'foto_rumah' => 'required',
            'penghuni_id' => 'required',
            'alamat' => 'required',
            'harga' => 'required',
        ]);

         if ($request->hasFile('foto_rumah')) {
             $imagePath = $request->file('foto_rumah')->store('foto_rumah');
            // $imagePath = $request->file('foto_rumah')->store('foto_rumah');
            $validateData['foto_rumah'] = $imagePath;
         }

        Kost::create($validateData);

        return redirect('/kost')->with('success', 'data kost berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kost $kost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kost $kost)
    {
        $penghuni = Penghuni::all();
        return view('kost.edit', [
            'title' => 'edit kost',
            'kost' => $kost,
            'penghuni' => $penghuni
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kost $kost)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'foto_rumah' => 'required',
            'penghuni_id' => 'required',
            'alamat' => 'required',
            'harga' => 'required'
        ]);

          if ($request->hasFile('foto_rumah')) {
                $imagePath = $request->file('foto_rumah')->store('foto_rumah');
                $validateData['foto_rumah'] = $imagePath;
         }

        Kost::where('id', $kost->id)->update($validateData);
        return redirect('/kost')->with('success', 'edit data kost berhasil!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kost $kost)
    {

        if($kost->foto_rumah) {
            Storage::delete($kost->foto_rumah);
        }
        Kost::destroy($kost->id);
        return redirect('/kost')->with('success', 'data kost berhasil dihapus');
    }
}
