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
            <h1>Nama : {{ Auth::user()->name }}</h1>
    </div> --}}
@endsection
@section('script')
    <script type="text/javascript">
        $("#Dashboard").addClass("active");
    </script>
@endsection
