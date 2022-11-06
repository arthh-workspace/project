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
                        <form action="{{ route('user.dosen.store') }}" method="post" enctype="multipart/form-data">
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
                                    <label for="name">Nama </label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Nama">
                                    <div class="text-danger">
                                        @error('name')
                                            Nama tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nip">Nip </label>
                                    <input type="text" name="nip" value="{{ old('nip') }}"
                                        class="form-control @error('nip') is-invalid @enderror" placeholder="Nip">
                                    <div class="text-danger">
                                        @error('nip')
                                            Nip tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username </label>
                                    <input type="text" name="username" value="{{ old('username') }}"
                                        class="form-control @error('username') is-invalid @enderror" placeholder="Username">
                                    <div class="text-danger">
                                        @error('username')
                                            Username tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="pass" value="{{ old('password') }}"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password">
                                        <div class="input-group-append">

                                            <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                                            <span id="mybutton" onclick="change()" class="input-group-text">

                                                <!-- icon mata bawaan bootstrap  -->
                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-eye-fill" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="role">Kepala Bagian</label>
                                    <select name="role" value="{{ old('role') }}"
                                        class="form-control @error('role') is-invalid @enderror">
                                        <option value="">-- Pilih Role --</option>
                                        <option value="admin">Admin</option>
                                        <option value="gugus_kendali">Gugus Kendali</option>
                                        <option value="dosen_koor">Dosen Koor</option>
                                        <option value="dosen_pengampu">Dosen Pengampu</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('role')
                                            Role tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
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
    </section>
    <!-- /.content -->
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
        $("#masteruser").addClass("menu-open");
        $("#user").addClass("active");
        $("#dosen").addClass("active");
    </script>
@endsection
