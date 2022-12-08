@extends('layout.main')
@section('web')
    <h1 class="m-0">Dashboard</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">Selamat datang Kembali {{ Auth::user()->name }}</h4>
            <p class="mb-0"></p>
        </div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            {{-- ---------------- Dosen ------------------ --}}
            <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $dosen }}</h3>
                        <p>Dosen</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('user.dosen') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            {{-- --------------- Teknisi ----------------------}}
            <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $mahasiswa }}</h3>
                        <p>Mahasiswa</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('user.mahasiswa') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
    <script type="text/javascript">
        $("#Dashboard").addClass("active");
    </script>
@endsection
