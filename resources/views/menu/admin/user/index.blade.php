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
            <div class="row">
                <div class="col-md-12">
                    <form class="form" method="get" action="{{ route('user.search') }}">
                        <div class="form-group w-100 mb-3">
                            <label for="search" class="d-block mr-2">Pencarian</label>
                            <input type="text" name="search" class="form-control w-75 d-inline" id="search"
                                placeholder="Masukkan keyword">
                            <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        </div>
                    </form>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="{{ route('user.add') }}" class="btn btn-primary btn-sm">
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah User
                                </a>
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
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->username }}</td>
                                            <td>{{ $data->role }}</td>
                                            <td>
                                                <form action="{{ route('user.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="" class="btn btn-info btn-sm"><i
                                                            class="nav-icon fas fa-eye"></i>Details
                                                    </a>
                                                    <a href="" class="btn btn-success btn-sm"><i
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
@endsection
@section('script')
    <script type="text/javascript">
        $("#user").addClass("active");
    </script>
@endsection
