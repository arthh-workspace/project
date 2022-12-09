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
                        <form action="{{ route('user.dosen.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="jenis_kelamin">Mata Kuliah</label>
                                    <select name="jenis_kelamin" value="{{ old('jenis_kelamin') }}"
                                        class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                        <option value="">-- Mata Kuliah --</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('jenis_kelamin')
                                            Jenis Kelamin tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Mata Kuliah</label>
                                    <select name="jenis_kelamin" value="{{ old('jenis_kelamin') }}"
                                        class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                        <option value="">-- Jenis Kelamin --</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('jenis_kelamin')
                                            Jenis Kelamin tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap </label>
                                    <input type="text" name="nama" value="{{ old('nama') }}"
                                        class="form-control @error('nama') is-invalid @enderror" placeholder="Nama">
                                    <div class="text-danger">
                                        @error('nama')
                                            Nama tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer justify-content-between">
                                <a href="{{ route('user.dosen') }}" class="btn btn-default"><i
                                        class='nav-icon fas fa-arrow-left'></i>
                                    &nbsp; Kembali</a>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
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
        $("#Dashboard").addClass("active");
    </script>
@endsection
