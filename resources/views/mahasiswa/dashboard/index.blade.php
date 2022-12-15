@extends('layout.main')
@section('web')
    <h1 class="m-0">Dashboard</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection
@section('content')
<p align="center">Profil Saya</p>

<div class="card-group">
  {{-- <div class="col-lg-4"> --}}
    <div class="card mb-4 elevation-3" style=" border-radius: 10px">
        <div class="row no-gutters">
            <div class="col-md-3" style="margin-left: 110px;  margin-top: 30px;">
                <img src="{{ Auth::guard('mahasiswa')->user()->foto }}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
                <h1 style="font-family: 'Garamond', Times, serif; font-size: 25px; align: right; margin-left: -40px; margin-top: 30px">{{ Auth::guard('mahasiswa')->user()->nama }}</h1>
              <button class="btn btn-primary btn-sm" style="margin-left: 40px"><i
                class="mr-2 nav-icon fas fa-edit"></i>Edit</button>
            </div>
    <div class="col-md-4">
      <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Nama</p>
            </div>
            <div class="col-sm-9">
              <p class="mb-0">{{ Auth::guard('mahasiswa')->user()->nama }}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">NIM</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{ Auth::guard('mahasiswa')->user()->nim }}</p>
            </div>
          </div>

          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Email</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{ Auth::guard('mahasiswa')->user()->email }}</p>
            </div>
          </div>

          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Kelas</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{ Auth::guard('mahasiswa')->user()->kelas }}</p>
            </div>
          </div>

          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Prodi</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{ Auth::guard('mahasiswa')->user()->prodi }}</p>
            </div>
          </div>

          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Jenis Kelamin</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{ Auth::guard('mahasiswa')->user()->jenis_kelamin }}</p>
            </div>
          </div>
      </div>
    </div>
    </div>
          </div>
        </div>
@endsection
@section('script')
    <script type="text/javascript">
        $("#Dashboard").addClass("active");
    </script>
@endsection
