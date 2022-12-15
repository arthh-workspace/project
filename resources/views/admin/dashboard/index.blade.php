@extends('layout.main')
@section('web')
    <h1 class="m-0">Dashboard</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection
@section('content')
    {{-- <p align="center">Profil Saya</p>
    <div id="wrapper">
            <div class="photoprofile">
                <img src="logo.png" class="imgprofile"></img>
            </div>
            <h1>Nama : {{ Auth::admins()->username }}</h1>
    </div> --}}
    <p align="center">Profil Saya</p>

    <div class="card-group">
        {{-- <div class="col-lg-4"> --}}
        <div class="card mb-4 elevation-3" style=" border-radius: 10px">
            <div class="row no-gutters">
                <div class="col-md-3" style="margin-left: 80px;  margin-top: 30px;">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                    <h1
                        style="font-family: 'Garamond', Times, serif; font-size: 25px; align: right; margin-left: 40px; margin-top: 10px">
                        {{ Auth::user()->username }}</h1>
                    <a href="#" class="btn btn-primary btn-sm" style="margin-left: 40px"><i
                            class="mr-2 nav-icon fas fa-edit"></i> Edit</a>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nama</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="mb-0">{{ Auth::user()->username }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::user()->username }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">NIP</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">6574839056712348</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">No. Telp</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">080899998888</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Alamat</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Perum Sangar RT.01/RW.00 Kel. Jabrik Kec. Banyuwangi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-8">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">

                                        <p>Dosen</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="{{ route('user.dosen') }}" class="small-box-footer">Lihat<i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-8">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">

                                        <p>Mahasiswa</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="{{ route('user.mahasiswa') }}" class="small-box-footer">Lihat<i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-8">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">

                                        <p>Dosen</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="{{ route('user.dosen') }}" class="small-box-footer">Lihat<i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
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
