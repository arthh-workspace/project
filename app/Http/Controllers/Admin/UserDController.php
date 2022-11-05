<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

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
        $user = User::all();
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
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        $dosen = Dosen::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'foto' => $request->foto,
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
    public function update(Request $request)
    {
        $user = User::where('id', $request->id)
            ->update([
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);
        $dosen = Dosen::where('user_id', $request->id)
            ->update([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'foto' => $request->foto,
                'user_id' => $user->id
            ]);

        return redirect()->route('user.dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        $id->delete();

        return redirect()->route('user.dosen')->with('error', 'Data pengumuman berhasil dihapus');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $user = User::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('menu.admin.user.index', compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}