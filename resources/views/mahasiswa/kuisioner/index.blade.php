@extends('layout.main')
@section('web')
    <h1 class="m-0">Kuisioner</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Kuisioner</li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- left column -->
            <div class="col-md-10">
                <!-- general form elements -->
                <div class="card card-outline card-info">
                    <form action="{{ route('kuisioner.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Dosen Pengampu</label>
                                <select name="nama" value="{{ old('nama') }}"
                                    class="form-control @error('nama') is-invalid @enderror">
                                    <option value="">-- Pilih Dosen --</option>
                                    @foreach ($dosen as $item)
                                        <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('nama')
                                        Nama tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_matkul">Mata Kuliah</label>
                                <select name="nama_matkul" value="{{ old('nama_matkul') }}"
                                    class="form-control @error('nama_matkul') is-invalid @enderror">
                                    <option value="">-- Pilih Mata Kuliah --</option>
                                    @foreach ($matkul as $item)
                                        <option value="{{ $item->nama_matkul }}">{{ $item->nama_matkul }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('nama_matkul')
                                        Matkul tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id_jadwal">Jadwal</label>
                                <select name="id_jadwal" value="{{ old('jadwal') }}"
                                    class="form-control @error('id_jadwal') is-invalid @enderror">
                                    <option value="">-- Pilih Jadwal --</option>
                                    @foreach ($jadwal as $item)
                                        <option value="{{ $item->id }}">Tanggal :
                                            {{ showDateTime($item->hari, 'l, d F Y') }} Waktu : {{ $item->waktu }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('id_jadwal')
                                        Jadwal tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id_rps_mingguan">Pertemuan</label>
                                <select name="id_rps_mingguan" value="{{ old('pertemuan_ke') }}"
                                    class="form-control @error('id_rps_mingguan') is-invalid @enderror">
                                    <option value="">-- Pertemuan ke --</option>
                                    @foreach ($pertemuan as $item)
                                        <option value="{{ $item->id }}">Pertemuan ke {{ $item->pertemuan_ke }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('id_rps_mingguan')
                                        Pertemuan tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="capaian_pembelajaran_pertemuan">Capaian Materi</label>
                                <select name="capaian_pembelajaran_pertemuan"
                                    value="{{ old('capaian_pembelajaran_pertemuan') }}"
                                    class="form-control @error('capaian_pembelajaran_pertemuan') is-invalid @enderror">
                                    <option value="">-- Capaian --</option>
                                    @foreach ($pertemuan as $item)
                                        <option value="{{ $item->capaian_pembelajaran_pertemuan }}">Pertemuan ke
                                            {{ $item->capaian_pembelajaran_pertemuan }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('capaian_pembelajaran_pertemuan')
                                        Capaian Materi tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin :</label> <br>
                                <div class="form-check form-check-inline">
                                    <label for="kesesuaian">
                                        <input type="radio" name="kesesuaian" value="S" id="kesesuaian">Sesuai
                                        <input type="radio" name="kesesuaian" value="TS" id="kesesuaian">Tidak Sesuai
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer justify-content-between">
                            <button type="submit" class="btn btn-primary float-left">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('script')
    <script type="text/javascript">
        $("#kuisioner").addClass("active");
    </script>
@endsection
