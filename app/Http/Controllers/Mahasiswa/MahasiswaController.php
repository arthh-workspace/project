<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.dashboard.index');
    }
    public function edit()
    {
        return view('mahasiswa.edit_profile.edit');
    }
    public function store(Request $request, Mahasiswa $id)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'jenis_kelamin' => 'required',
            'username' => 'required',
            'email' => 'required',
        ]);

        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'jenis_kelamin' => $request->jenis_kelamin,
            'username' => $request->username,
            'email' => $request->email,
        ];

        $id->update($data);
        // $gambar = $request->file('foto');
        // if (!empty($gambar)) {
        //     $data = $request->all();
        //     $gambar = $request->file('foto');
        //     $new_foto = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->GetClientOriginalName();
        //     $data = [
        //         'nim' => $request->nim,
        //         'nama' => $request->nama,
        //         'prodi' => $request->prodi,
        //         'jenis_kelamin' => $request->jenis_kelamin,
        //         'username' => $request->username,
        //         'email' => $request->email,
        //         'foto' => 'images/mahasiswa/' . $new_foto,
        //     ];
        //     $gambar->storeAs('public/images/mahasiswa', $new_foto);
        //     $id->update($data);
        // } else {
        //     $data = $request->all();
        //     $id->update($data);
        // }

        return redirect()->route('mahasiswa')->with('success', 'Data Mahasiswa berhasil diubah');
    }
}
