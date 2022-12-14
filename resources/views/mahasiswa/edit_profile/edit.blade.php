@extends('layout.main')
@section('web')
    <h1 class="m-0">Edit Profile</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Edit Profile</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-10">
                    <!-- general form elements -->
                    <div class="card card-outline card-info">
                        <form action="{{ route('mahasiswa.editprofile') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="email">Email </label>
                                    <input type="email" name="email"
                                        value="{{ Auth::guard('mahasiswa')->user()->email }}"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                    <div class="text-danger">
                                        @error('email')
                                            Email tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username </label>
                                    <input type="text" name="username"
                                        value="{{ Auth::guard('mahasiswa')->user()->username }}"
                                        class="form-control @error('username') is-invalid @enderror" placeholder="Username">
                                    <div class="text-danger">
                                        @error('username')
                                            Username tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap </label>
                                    <input type="text" name="nama"
                                        value="{{ Auth::guard('mahasiswa')->user()->nama }}"
                                        class="form-control @error('nama') is-invalid @enderror" placeholder="Nama">
                                    <div class="text-danger">
                                        @error('nama')
                                            Nama tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nim">Nim </label>
                                    <input type="text" name="nim" value="{{ Auth::guard('mahasiswa')->user()->nim }}"
                                        class="form-control @error('nim') is-invalid @enderror" placeholder="Nim">
                                    <div class="text-danger">
                                        @error('nim')
                                            Nim tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <select name="kelas" value="{{ $user->kelas }}"
                                        class="form-control @error('kelas') is-invalid @enderror">
                                        <option value="{{ $user->kelas }}">{{ $user->kelas }}</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('kelas')
                                            Kelas tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="prodi">Prodi </label>
                                    <input type="text" name="prodi"
                                        value="{{ Auth::guard('mahasiswa')->user()->prodi }}"
                                        class="form-control @error('prodi') is-invalid @enderror" placeholder="Nim">
                                    <div class="text-danger">
                                        @error('prodi')
                                            Prodi tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin"
                                        value="{{ Auth::guard('mahasiswa')->user()->jenis_kelamin }}"
                                        class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                        <option value="{{ Auth::guard('mahasiswa')->user()->jenis_kelamin }}">
                                            {{ Auth::guard('mahasiswa')->user()->jenis_kelamin }}</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('jenis_kelamin')
                                            Jenis Kelamin tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="foto" class="form-label">Foto </label>
                                    <div class="input-group">
                                        <input class="form-control @error('foto') is-invalid @enderror" type="file"
                                            id="formFile" name="foto">
                                    </div>
                                    <div class="text-danger">
                                        @error('foto')
                                            Foto tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="foto">Pilih File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('foto') is-invalid @enderror"
                                                name="foto">
                                            <label class="custom-file-label" for="foto">Pilih Foto</label>
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('foto')
                                            Foto tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div> --}}
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer justify-content-between">
                                <a href="{{ route('user.mahasiswa') }}" class="btn btn-default"><i
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
    </section>
    <!-- /.content -->
@endsection
@section('script')
    <script type="text/javascript">
        $("#Dashboard").addClass("active");
    </script>
@endsection

