<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\rps;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KuisionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.kuisioner.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
