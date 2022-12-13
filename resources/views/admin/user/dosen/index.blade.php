@extends('layout.main')
@section('web')
    <h1 class="m-0">User Management Dosen</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">User Management</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target=".bd-example-modal-lg">
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Dosen
                                </button>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th width="30%">Nama</th>
                                        <th>Username</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->username }}</td>
                                            <td>
                                                <form action="{{ route('user.dosen.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('user.dosen.view', Crypt::encrypt($data->id)) }}"
                                                        class="btn btn-info btn-sm"><i
                                                            class="nav-icon fas fa-eye"></i>Details
                                                    </a>
                                                    <a href="{{ route('user.dosen.edit', Crypt::encrypt($data->id)) }}"
                                                        class="btn btn-success btn-sm"><i
                                                            class="nav-icon fas fa-edit"></i>Edit
                                                    </a>
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="mr-2 nav-icon fas fa-trash-alt"></i>Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div class="modal fade bd-example-modal-md bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Dosen</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                            {{-- <div class="form-group">
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
                            </div> --}}
                            {{-- <div class="form-group">
                                <label for="role">Role</label>
                                <select name="role" value="{{ old('role') }}"
                                    class="form-control @error('role') is-invalid @enderror">
                                    <option value="">-- Pilih Role --</option>
                                    <option value="admin">Admin</option>
                                    <option value="gugus_kendali">Gugus Kendali</option>
                                    <option value="dosen_koor">Dosen Koor</option>
                                    <option value="dosen_pengampu">Dosen Pengampu</option>
                                    <option value="super_dosen1">Super Dosen 1</option>
                                    <option value="super_dosen2">Super Dosen 2</option>
                                    <option value="super_dosen3">Super Dosen 3</option>
                                    <option value="super_dosen4">Super Dosen 4</option>
                                </select>
                                <div class="text-danger">
                                    @error('role')
                                        Role tidak boleh kosong.
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="form-group">
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


                                {{-- <label for="foto">Pilih File</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input @error('foto') is-invalid @enderror"
                                            name="foto">
                                        <label class="custom-file-label" for="foto">Pilih Foto</label>
                                    </div>
                                </div>
                                 --}}
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                    class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
                            <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp;
                                Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
