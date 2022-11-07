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
    public function __construct()
    {
        $this->middleware(['auth', 'checkRole:admin']);
    }
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
            'password' => 'required',
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
            'password' => Hash::make($request->password),
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $dosen = Dosen::all();
        return view('menu.admin.user.dosen.edit', compact('user','dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
            'nip' => 'required',
        ]);

        $user = User::findorfail($id);

        if ($request->gambar) {
            $name_file = $request->gambar;
            $new_file = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . "_" . $name_file->getClientOriginalName();
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => $request->password,
                'role' => $request->role,
                'foto' => 'images/dosen/' . $new_file
            ];
            $name_file->storeAs('public/images/dosen', $new_file);
            $user->dosen()->sync([
                'nip'  => $request->nip,
                'nama' => $user->name,
                'user_id' => $user->id
            ]);
            $user->update($data);
        } else {
            $data = [
                'judul_berita' => $request->judul_berita,
                'isi' => $request->isi,
                'user_id' => $request->user_id
            ];

            $user->update($data);
        }

        return redirect()->route('berita.index')->with('success', 'Data berita berhasil diperbarui!');
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
