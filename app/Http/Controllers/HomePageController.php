<?php

namespace App\Http\Controllers;

use App\Models\antrian;
use App\Models\AntrianPpdb;
use App\Models\Panggil;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('homepage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'NISN' => 'required|unique:antrian_ppdbs',
            'Nama' => 'required',
            'Jalur_Pendaftaran' => 'required',
            'No_Telefon' => 'required',
        ], [
            'NISN.required' => 'NISN wajib diisi',
            'NISN.unique' => 'NISN Sudah Terdaftar!!!',
            'Nama.required' => 'Nama wajib diisi',
            'Jalur_Pendaftaran.required' => 'Jalur Pendaftran wajib diisi',
            'No_Telefon.required' => 'No Telefon wajib diisi',
        ]);

        $antrianTerakhir = AntrianPpdb::latest()->value('Nomor_Antrian');

        if ($antrianTerakhir == null) {
            $noAntrian = 1;
        } else {
            $noAntrian = $antrianTerakhir + 1;
        }

        $store = AntrianPpdb::create([
            'NISN' => $request->NISN,
            'Nama' => $request->Nama,
            'Jalur_Pendaftaran' => $request->Jalur_Pendaftaran,
            'No_Telefon' => $request->No_Telefon,
            'Nomor_Antrian' => $noAntrian
        ]);

        return view('success', compact('store'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $panggil = Panggil::orderBy('created_at', 'desc')->first();
        $loket1 = Panggil::where('jalur', 'Zonasi')->orderBy('created_at', 'desc')->first();
        $loket2 = Panggil::where('jalur', 'Prestasi')->orderBy('created_at', 'desc')->first();
        $loket3 = Panggil::where('jalur', 'Afirmasi')->orderBy('created_at', 'desc')->first();
        $loket4 = Panggil::where('jalur', 'Perpindahan Orang Tua')->orderBy('created_at', 'desc')->first();
        return view('display', compact('panggil', 'loket1', 'loket2', 'loket3', 'loket4'));
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
