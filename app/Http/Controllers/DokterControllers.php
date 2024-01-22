<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Ruangan;

class DokterControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dktr = Dokter::latest()->paginate(5);
        return view('dktr.index', compact('dktr'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function getRuangan()
    {
        $ruangan = Ruangan::all();
        // Di dalam controller
        return view('dktr.create', compact('ruangan'));
        // return view('dktr.create')->with('ruangan', $ruangan);

        // Atau menggunakan with()
        // return view('view_name')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ruangan = Ruangan::all();
        return view('dktr.create', compact('ruangan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'idDokter' => 'required',
            'namaDokter' => 'required',
            'tanggalLahir' => 'required',
            'spesialisasi' => 'required',
            'lokasiPraktik' => 'required',
            'jamPraktik' => 'required',
        ]);
        Dokter::create($request->all());
        return redirect()->route('dktr.index')->with('success', 'Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dktr)
    {
        return view('dktr.show', compact('dktr'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dktr)
    {
        $ruangan = Ruangan::all();
        return view('dktr.edit', compact('ruangan'), compact(('dktr')));
        // return view('dktr.edit', compact('dktr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dktr)
    {
        $request->validate([
            'idDokter' => 'required',
            'namaDokter' => 'required',
            'tanggalLahir' => 'required',
            'spesialisasi' => 'required',
            'lokasiPraktik' => 'required',
            'jamPraktik' => 'required',
        ]);
        $dktr->update($request->all());
        return redirect()->route('dktr.index')->with('success', 'Dokter Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dktr)
    {
        $dktr->delete();
        return redirect()->route('dktr.index')->with('success', 'Dokter Berhasil di Hapus');
    }
}
