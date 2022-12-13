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
            <div class="card">
                <div class="col">
                    <div class="col-md-5 mt">
                        <div class="mt-3">
                            <h3 class="lead">Gambar pada saat ini</h3>
                            <img src="{{ asset($user->foto) }}" class="img img-thumbnail" alt="" width="80%" />
                        </div>
                    </div>
                    <div class="col-md-6">

                        <form action="{{ route('user.dosen.update', $user->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="email">Email </label>
                                    <input type="email" name="email" value="{{ $user->email }}"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                        readonly>
                                    <div class="text-danger">
                                        @error('email')
                                            Email tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username </label>
                                    <input type="text" name="username" value="{{ $user->username }}"
                                        class="form-control @error('username') is-invalid @enderror" placeholder="Username"
                                        readonly>
                                    <div class="text-danger">
                                        @error('username')
                                            Username tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama </label>
                                    <input type="text" name="name" value="{{ $user->name }}"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Nama"
                                        readonly>
                                    <div class="text-danger">
                                        @error('name')
                                            Nama tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="role">Nama </label>
                                    <input type="text" name="role" value="{{ $user->role }}"
                                        class="form-control @error('role') is-invalid @enderror" placeholder="Nama"
                                        readonly>
                                    <div class="text-danger">
                                        @error('role')
                                            Role tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer justify-content-between">
                                <a href="{{ route('user.dosen') }}" class="btn btn-default float-right" id="back"><i
                                        class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
                            </div>
                        </form>
                        <!-- /.card -->
                    </div>

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('script')
    <script type="text/javascript">
        $("#masteruser").addClass("menu-open");
        $("#user").addClass("active");
        $("#dosen").addClass("active");
    </script>
@endsection
