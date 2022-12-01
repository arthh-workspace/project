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
                <img src="{{ asset('dist/img/user1-128x128.jpg') }}" class="imgprofile" style="margin:20px;"></img>
                <h1 style="font-family: 'Garamond', Times, serif; align: right; margin-top: 15px">Nama : {{ Auth::user()->name }}</h1>
            </div>
            {{-- <h1 style="font-family:'Garamond', Times, serif; margin:10px; align= left"><img src="{{ asset('dist/img/user1-128x128.jpg') }}"> Nama : {{ Auth::user()->name }}</h1> --}}
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $("#Dashboard").addClass("active");
    </script>
@endsection
