@extends('layout.main')
@section('web')
    <h1 class="m-0">Dashboard</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection
@section('content')
    <p align="center">Profil Saya</p>
    <div id="wrapper">
        <div class="photoprofile">
            <img src="{{ Storage::url(Auth::guard('mahasiswa')->user()->foto) }}" width="100" height="100"
                class="imgprofile"></img>
        </div>
        <p>Nama : {{ Auth::guard('mahasiswa')->user()->nama }}</p>
        <p>Nim : {{ Auth::guard('mahasiswa')->user()->nim }}</p>
        <p>Kelas : {{ Auth::guard('mahasiswa')->user()->kelas }}</p>
        <p>Prodi : {{ Auth::guard('mahasiswa')->user()->prodi }}</p>
        <p>Jenis Kelamin : {{ Auth::guard('mahasiswa')->user()->jenis_kelamin }}</p>
    </div>
    <div>
        <a href="{{ route('mahasiswa.edit') }}" class="btn btn-default">
            &nbsp; Edit Profile</a>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $("#Dashboard").addClass("active");
    </script>
@endsection
