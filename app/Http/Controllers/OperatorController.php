<?php

namespace App\Http\Controllers;

use App\Models\antrian;
use App\Models\antriann;
use App\Models\AntrianPpdb;
use App\Models\Panggil;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = AntrianPpdb::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('datas'));
    }

    public function loket1()
    {
        $datas = AntrianPpdb::orderBy('created_at', 'desc')
            ->where('Jalur_Pendaftaran', 'Zonasi')
            ->get();
        return view('loket1', compact('datas'));
    }

    public function loket2()
    {
        $datas = AntrianPpdb::orderBy('created_at', 'desc')
            ->where('Jalur_Pendaftaran', 'Prestasi')
            ->get();
        return view('loket2', compact('datas'));
    }

    public function loket3()
    {
        $datas = AntrianPpdb::orderBy('created_at', 'desc')
            ->where('Jalur_Pendaftaran', 'Afirmasi')
            ->get();
        return view('loket3', compact('datas'));
    }

    public function loket4()
    {
        $datas = AntrianPpdb::orderBy('created_at', 'desc')
            ->where('Jalur_Pendaftaran', 'Perpindahan Orang Tua')
            ->get();
        return view('loket4', compact('datas'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = AntrianPpdb::where("id", $id)->first();
        $update = AntrianPpdb::where("id", $id)->update([
            'status' => true
        ]);
        if ($update) {
            $store = Panggil::create([
                'nama' => $data->Nama,
                'jalur' => $data->Jalur_Pendaftaran,
                'no_antrian' => $data->Nomor_Antrian
            ]);
        }

        $playsound = $data->Nomor_Antrian . '.mp3';
        return back()->with('playsound', $playsound);
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
    public function destroy($id)
    {
        $deleted = DB::table('antrian_ppdbs')
            ->where('id', $id)
            ->delete();

        if ($deleted) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Gagal menghapus data');
        }
    }

    public function count()
    {
        $data = Panggil::latest()->first();
        return json_encode($data);
    }
}
