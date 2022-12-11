@extends('layout.main')
@section('web')
    <h1 class="m-0">Kuisioner</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Kuisioner</li>
@endsection
@section('content')
    <h1>Pengisian Berhasil</h1>
    <a href="{{ route('mahasiswa') }}" class="btn btn-default"><i
        class='nav-icon fas fa-arrow-left'></i>
    &nbsp; Kembali</a>
@endsection
@section('script')
    <script type="text/javascript">
        $("#kuisioner").addClass("active");
    </script>
@endsection
