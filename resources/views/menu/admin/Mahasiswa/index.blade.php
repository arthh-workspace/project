@extends('layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome, {{ Auth::user()->name }}</h1>
        {{-- <h1 class="h2">{{ $users->mahasiswa->nim }}</h1> --}}
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Halo</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"></span>
                This week
            </button>
        </div>
    </div>

    <h3 class="card-title">
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
            <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data User
        </button>
    </h3>
    <br>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>Nama</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            {{-- <tbody>
                @foreach ($magang as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td> <img src="{{ Storage::url($data->gambar) }}" width="60px"
                                class="img-thumbnail">
                        <td>{{ $data->nama_perusahaan }}</td>
                        <td>{{ $data->lokasi }}</td>
                        </td>
                        <td>
                            <form action="{{ route('magang.destroy', $data->id_perusahaan) }}"
                                method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('magang.view', Crypt::encrypt($data->id_perusahaan)) }}"
                                    class="btn btn-info btn-sm"><i
                                        class="nav-icon fas fa-eye"></i>Details
                                </a>
                                <a href="{{ route('magang.edit', Crypt::encrypt($data->id_perusahaan)) }}"
                                    class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i>
                                    &nbsp; Edit</a>
                                <button class="btn btn-danger btn-sm"><i
                                        class="mr-2 nav-icon fas fa-trash-alt"></i>Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody> --}}
        </table>
    </div>

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
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input  @error('gambar') is-invalid @enderror" name="gambar">
                                        <label class="custom-file-label" for="gambar">Pilih File</label>
                                    </div>
                                </div>
                                <div class="text-danger">
                                    @error('gambar')
                                        Gambar tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama Dosen</label>
                                <input type="text" name="nama" value=""
                                    class="form-control @error('nama') is-invalid @enderror" placeholder="Nama">
                                <div class="text-danger">
                                    @error('nama')
                                        Nama tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nip">Nip Dosen</label>
                                <input type="text" name="nip" value=""
                                    class="form-control @error('nip') is-invalid @enderror" placeholder="Nip">
                                <div class="text-danger">
                                    @error('nip')
                                        Nip tidak boleh kosong.
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

    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
