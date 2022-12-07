<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with('dosen')->get();
        return view('menu.admin.user.dosen.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.admin.user.dosen.add');
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
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'jenis_kelamin'=>'required',
            'role' => 'required',
            'nip' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $gambar = $request->file('foto');

        $filenamewithextension  = $request->file('foto')->getClientOriginalName();
        $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $date                   = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y');
        $new_gambar             = Str::slug($filename, '-', $date) . '.' . $gambar->getClientOriginalExtension();
        $destinationPath        = 'public/images/dosen';
        $gambar->storeAs($destinationPath, $new_gambar);

        $user = User::create([
            'foto' => 'images/dosen/' . $new_gambar,
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->username),
            'role' => $request->role,
        ]);

        Dosen::create([
            'nip'  => $request->nip,
            'nama' => $user->name,
            'user_id' => $user->id
        ]);

        return redirect('/user_dosen')->with('success', 'Berhasil menambahkan data Dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $user = User::findorfail($id);
        return view('menu.admin.user.dosen.view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $user = User::findorfail($id);
        return view('menu.admin.user.dosen.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $id)
    {
        // $user = User::where('id', $request->id)
        //     ->update([
        //         'email' => $request->email,
        //         'name' => $request->name,
        //         'username' => $request->username,
        //         'password' => Hash::make($request->password),
        //         'role' => $request->role,
        //     ]);

        // return redirect()->route('user.dosen');

        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'role' => 'required',
        ]);

        $gambar = $request->file('foto');

        if (!empty($gambar)) {
            $data = $request->all();
            $gambar = $request->file('foto');
            $new_foto = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->GetClientOriginalName();
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'role' => $request->role,
                'foto' => 'images/dosen/' . $new_foto
            ];
            $gambar->storeAs('public/images/dosen', $new_foto);
            $id->update($data);
        } else {
            $data = $request->all();
            $id->update($data);
        }

        return redirect()->route('user.dosen')->with('success', 'Data Dosen berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        $filename = $id->foto;
        Storage::disk('public')->delete($filename);
        $id->delete();

        return redirect()->route('user.dosen')->with('error', 'Data dosen berhasil dihapus');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $user = User::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('menu.admin.user.index', compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
