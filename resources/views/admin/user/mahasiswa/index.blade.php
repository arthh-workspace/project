@extends('layout.main')
@section('web')
    <h1 class="m-0">User Management Mahasiswa</h1>
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
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Mahasiswa
                                </button>
                            </h3>
                        </div>
                        <!-- /.card-header -->
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
                                                <form action="{{ route('user.mahasiswa.destroy', $data->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="" class="btn btn-info btn-sm"><i
                                                            class="nav-icon fas fa-eye"></i>Details
                                                    </a>
                                                    <a href="{{ route('user.mahasiswa.edit', Crypt::encrypt($data->id)) }}"
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
                                        Jenis Kelamin tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
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
        $("#mahasiswa").addClass("active");
    </script>
@endsection
