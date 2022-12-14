@extends('layouts.main')
@section('web')
    <h1 class="m-0">Dashboard</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection
@section('content')
    <p align="center">Dashboard K</p>
    <div id="wrapper">
        <div class="photoprofile">
            <img src="{{ Storage::url(Auth::user()->foto) }}" class="imgprofile"></img>
        </div>
        <h1>Nama : {{ Auth::user()->dosen->nama }}</h1>
        <h1>Nip : {{ Auth::user()->dosen->nip }}</h1>
        <h1>Jenis Kelamin : {{ Auth::user()->dosen->jenis_kelamin }}</h1>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $("#Dashboard").addClass("active");
    </script>
@endsection
