@extends('layout.main')
@section('web')
    <h1 class="m-0">Dashboard</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection
@section('content')
    <p align="center">Tampilan Profil Data</p>
    <div id="wrapper">
        <div class="titleprofile">Profil Saya</div>
        <div class="photoprofile">
            <img src="logo.png" class="imgprofile"></img>
        </div>
        <div class="dataprofile">Website ini adalah website yang menyediakan tutorial tentang teknologi yang terutama desain
            grafis.<br>No. Kontak : 0123-4567-8901</div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $("#Dashboard").addClass("active");
    </script>
@endsection
