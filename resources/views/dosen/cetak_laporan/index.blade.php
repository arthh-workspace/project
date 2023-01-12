@extends('layout.main')
@section('web')
    <h1 class="m-0">Kontrol Kuisioner</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Kontrol Kuisioner</li>
@endsection
@section('content')
    <div class="card-group">
        <div class="card">
            <div class="card-header">
                Project Aplikasi Lanjut
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Dosen Pengampu</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="mb-0">Dilan Setiawan</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Capaian Pembelajaran</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="mb-0">Mahasiswa mampu menerapkan dasar pemograman PHP</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Pertemuan ke</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">1</p>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-info btn-sm"><i
                    class="mr-2 nav-icon fas fa-trash-alt"></i>Cetak Laporan</button>
            </div>
        </div>

    </div>

    <style>
        /* The switch - kotak di sekitar slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Sembunyikan checkbox HTML secara default */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* slider bulat*/
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
@endsection
@section('script')
    <script type="text/javascript">
        $("#cetak").addClass("active");
    </script>
@endsection
