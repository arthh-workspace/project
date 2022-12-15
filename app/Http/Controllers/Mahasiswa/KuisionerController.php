<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\rps;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\evaluasi_rps_pertemuan;
use App\Models\matkul;
use App\Models\perkuliahan;
use App\Models\rps_pertemuan;
use App\Models\jadwal;

class KuisionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::all();
        $matkul = matkul::latest()->get();
        $evaluasi = evaluasi_rps_pertemuan::all();
        $jadwal = jadwal::all();
        $pertemuan = rps_pertemuan::all();
        return view('mahasiswa.kuisioner.index', compact('dosen', 'matkul', 'evaluasi','jadwal','pertemuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function result()
    {
        return view('mahasiswa.kuisioner.result');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'nama_matkul'=>'required',
            'kesesuaian' => 'required',
            'id_jadwal'  => 'required',
            'id_rps_mingguan' => 'required',
            'capaian_pembelajaran_pertemuan' => 'required'
        ]);

        $perkuliahan=perkuliahan::create([
            'id_jadwal' => $request->id_jadwal,
            'id_mahasiswa' => auth()->user()->id,
        ]);

        evaluasi_rps_pertemuan::create([
            'id_rps_mingguan' => $request->id_rps_mingguan,
            'id_kuliah' => $perkuliahan->id,
            'kesesuaian' => $request->kesesuaian,
        ]);

        return redirect('/mahasiswa/kuisioner/result')->with('success', 'Berhasil Mengisi Kuisioner');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rps  $rps
     * @return \Illuminate\Http\Response
     */


    public function show(rps $rps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function edit(rps $rps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rps $rps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function destroy(rps $rps)
    {
        //
    }
}
