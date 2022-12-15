<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Mahasiswa::all();
        return view('admin.user.mahasiswa.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.mahasiswa.add');
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
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'prodi' => 'required',
            'jenis_kelamin' => 'required',
            'username' => 'required',
            'email' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $gambar = $request->file('foto');

        $filenamewithextension  = $request->file('foto')->getClientOriginalName();
        $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $date                   = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y');
        $new_gambar             = Str::slug($filename, '-', $date) . '.' . $gambar->getClientOriginalExtension();
        $destinationPath        = 'public/images/mahasiswa';
        $gambar->storeAs($destinationPath, $new_gambar);

        Mahasiswa::create([
            'nim'           => $request->nim,
            'nama'          => $request->nama,
            'kelas'         => $request->kelas,
            'prodi'         => $request->prodi,
            'jenis_kelamin' => $request->jenis_kelamin,
            'username'      => $request->username,
            'email'         => $request->email,
            'password'      => Hash::make('1'),
            'foto'          => 'images/mahasiswa/' . $new_gambar,
        ]);
        return redirect('/user_mahasiswa')->with('success', 'Berhasil menambahkan data Mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $user = Mahasiswa::findorfail($id);
        return view('admin.user.mahasiswa.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $id)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'jenis_kelamin' => 'required',
            'username' => 'required',
            'email' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $gambar = $request->file('foto');

        if (!empty($gambar)) {
            $data = $request->all();
            $gambar = $request->file('foto');
            $new_foto = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->GetClientOriginalName();
            $data = [
                'nim' => $request->nim,
                'nama' => $request->nama,
                'prodi' => $request->prodi,
                'jenis_kelamin' => $request->jenis_kelamin,
                'username' => $request->username,
                'email' => $request->email,
                'foto' => 'images/mahasiswa/' . $new_foto,
            ];
            $gambar->storeAs('public/images/mahasiswa', $new_foto);
            $id->update($data);
        } else {
            $data = $request->all();
            $id->update($data);
        }

        return redirect()->route('user.mahasiswa')->with('success', 'Data Mahasiswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $id)
    {
        $filename = $id->foto;
        Storage::disk('public')->delete($filename);
        $id->delete();

        return redirect()->route('user.mahasiswa')->with('error', 'Data mahasiswa berhasil dihapus');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $user = Mahasiswa::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('admin.user.index', compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
