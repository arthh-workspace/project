@extends('layout.main')
@section('web')
    <h1 class="m-0">Dashboard</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection
@section('content')
    <p align="center">Profil Saya</p>
    <div class="card elevation-3" style="border-radius: 10px; background-color: white; position: relative;">
            <div class="photoprofile row">
                <img src="{{ asset('dist/img/avatar2.png') }}" class="imgprofile elevation-3" style="margin: 20px; margin-left: 20px"></img>
                <div class="card-body">
                <h1 class="row" style="font-family:'Courier', Courier, monospace; align: right; margin-top: 15px; margin-left: 10px">Nama : {{ Auth::user()->mahasiswa->nama }}</h1>
                <h1 style="font-family: 'Courier', Courier, monospace; align: right; margin-left: 10px">Nim : {{ Auth::user()->mahasiswa->nim }}</h1>
                <h1 style="font-family: 'Courier', Courier, monospace; align: right; margin-left: 10px">Jenis Kelamin : {{ Auth::user()->mahasiswa->jenis_kelamin }}</h1>
                </div>
            </div>
            
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $("#Dashboard").addClass("active");
    </script>
@endsection
