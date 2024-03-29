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
                    <img src="{{ Storage::url(Auth::guard('dosen')->user()->foto) }}" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nama</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="mb-0">{{ Auth::guard('dosen')->user()->id }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jenis Kelamin</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::guard('dosen')->user()->jenis_kelamin }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::guard('dosen')->user()->email }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">NIP</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::guard('dosen')->user()->nip }}</p>
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
        $("#masteruser").addClass("menu-open");
        $("#user").addClass("active");
        $("#dosenp2").addClass("active");
    </script>
@endsection
