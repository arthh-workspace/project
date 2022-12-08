@extends('layout.main')
@section('web')
    <h1 class="m-0">User Management</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">User Management</li>
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
                        <form action="{{ route('user.mahasiswa.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="email">Email </label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                    <div class="text-danger">
                                        @error('email')
                                            Email tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username </label>
                                    <input type="text" name="username" value="{{ old('username') }}"
                                        class="form-control @error('username') is-invalid @enderror" placeholder="Username">
<<<<<<< HEAD:resources/views/admin/user/mahasiswa/add.blade.php
=======
                                    <div class="text-danger">
                                        @error('username')
                                            Username tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama Lengkap </label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Nama">
>>>>>>> 64a1ed44b9a73acea72eae6a2fa673fa7563f383:resources/views/menu/admin/user/mahasiswa/add.blade.php
                                    <div class="text-danger">
                                        @error('username')
                                            Username tidak boleh kosong.
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
                                <div class="form-group">
                                    <label for="nim">Nim </label>
                                    <input type="text" name="nim" value="{{ old('nim') }}"
                                        class="form-control @error('nim') is-invalid @enderror" placeholder="Nim">
                                    <div class="text-danger">
                                        @error('nim')
                                            Nim tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
<<<<<<< HEAD:resources/views/admin/user/mahasiswa/add.blade.php
                                    <label for="kelas">Kelas</label>
                                    <select name="kelas" value="{{ old('kelas') }}"
                                        class="form-control @error('kelas') is-invalid @enderror">
                                        <option value="">-- Jenis Kelamin --</option>
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
=======
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" value="{{ old('jenis_kelamin') }}"
                                        class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                        <option value="">-- Jenis Kelamin --</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('jenis_kelamin')
>>>>>>> 64a1ed44b9a73acea72eae6a2fa673fa7563f383:resources/views/menu/admin/user/mahasiswa/add.blade.php
                                            Jenis Kelamin tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
<<<<<<< HEAD:resources/views/admin/user/mahasiswa/add.blade.php
                                <div class="form-group">
                                    <label for="prodi">Prodi </label>
                                    <input type="text" name="prodi" value="{{ old('prodi') }}"
                                        class="form-control @error('prodi') is-invalid @enderror" placeholder="Nim">
                                    <div class="text-danger">
                                        @error('prodi')
                                            Prodi tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
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
=======
>>>>>>> 64a1ed44b9a73acea72eae6a2fa673fa7563f383:resources/views/menu/admin/user/mahasiswa/add.blade.php
                                {{-- <div class="form-group">
                                    <label for="password">Password </label>
                                    <input type="text" name="password" value="{{ old('password') }}"
                                        class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                    <div class="text-danger">
                                        @error('password')
                                            Password tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div> --}}
<<<<<<< HEAD:resources/views/admin/user/mahasiswa/add.blade.php
                                {{-- <div class="form-group">
=======
                                <div class="form-group">
>>>>>>> 64a1ed44b9a73acea72eae6a2fa673fa7563f383:resources/views/menu/admin/user/mahasiswa/add.blade.php
                                    <label for="role">Role</label>
                                    <select name="role" value="{{ old('role') }}"
                                        class="form-control @error('role') is-invalid @enderror">
                                        <option value="mahasiswa">Mahasiswa</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('role')
                                            Role tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="form-group">
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
                                </div>
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
        $("#masteruser").addClass("menu-open");
        $("#user").addClass("active");
        $("#mahasiswa").addClass("active");
    </script>
@endsection
