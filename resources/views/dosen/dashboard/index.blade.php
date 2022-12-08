@extends('layout.main')
@section('web')
    <h1 class="m-0">Dashboard</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection
@section('content')
    {{-- <p align="center">Profil Saya</p>
    <div id="wrapper">
<<<<<<< HEAD:resources/views/dosen/dashboard/index.blade.php
        <div class="photoprofile">
            <img src="{{ Storage::url(Auth::guard('dosen')->user()->foto) }}" class="imgprofile"></img>
        </div>
        <h1>Nama : {{ Auth::guard('dosen')->user()->nama }}</h1>
=======
            <div class="photoprofile">
                <img src="logo.png" class="imgprofile"></img>
            </div>
            <h1>Nama : {{ Auth::user()->name }}</h1>
    </div> --}}
    <p align="center">Profil Saya</p>

        <div class="card-group">
          {{-- <div class="col-lg-4"> --}}
            <div class="card mb-4 elevation-3" style=" border-radius: 10px">
                <div class="row no-gutters">
                    <div class="col-md-3" style="margin-left: 10px">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                        <h1 style="font-family: 'Garamond', Times, serif; align: right; margin-left: 25px; margin-top: 10px">{{ Auth::user()->name }}</h1>
                      <button class="btn btn-primary btn-sm" style="margin-left: 40px"><i
                        class="mr-2 nav-icon fas fa-edit"></i>Edit</button>
                    </div>
            <div class="col-md-4">
              <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Nama</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0">{{ Auth::user()->name }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">example@example.com</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">NIP</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">6574839056712348</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">No. Telp</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">080899998888</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Alamat</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Perum Sangar RT.01/RW.00 Kel. Jabrik Kec. Banyuwangi</p>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card-body">
              <div class="row">
                <div class="col-lg-6 col-8">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            
                            <p>Dosen</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('user.dosen') }}" class="small-box-footer">Lihat<i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-8">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            
                            <p>Mahasiswa</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('user.mahasiswa') }}" class="small-box-footer">Lihat<i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-8">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            
                            <p>Dosen</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('user.dosen') }}" class="small-box-footer">Lihat<i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                </div>
              </div>
            </div>  

            </div>
            {{-- <div class="card mb-4 mb-lg-0">
              <div class="card-body p-0">
                <ul class="list-group list-group-flush rounded-3">
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class="fas fa-globe fa-lg text-warning"></i>
                    <p class="mb-0">https://mdbootstrap.com</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                    <p class="mb-0">mdbootstrap</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                    <p class="mb-0">@mdbootstrap</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                    <p class="mb-0">mdbootstrap</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                    <p class="mb-0">mdbootstrap</p>
                  </li>
                </ul>
              </div>
            </div>
          </div> --}}
          
            {{-- <div class="card mb-4 elevation-3" style="border-radius: 10px">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                  </div>
                  <div class="col-sm-9">
                    <p>{{ Auth::user()->name }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">example@example.com</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">NIP</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">6574839056712348</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">No. Telp</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">080899998888</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Alamat</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">Perum Sangar RT.01/RW.00 Kel. Jabrik Kec. Banyuwangi</p>
                  </div>
                </div>
              </div>
            </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
>>>>>>> 64a1ed44b9a73acea72eae6a2fa673fa7563f383:resources/views/menu/admin/dashboard/index.blade.php
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $("#Dashboard").addClass("active");
    </script>
@endsection
{{-- <section style="background-color: #eee;"> --}}
    
  {{-- </section> --}}
