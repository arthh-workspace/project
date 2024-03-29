<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/HMTI.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">informatika {{ Auth::user()->name }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div> -->

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                {{-- <li class="nav-item">
                    <a href="{{ route('admin') }}" class="nav-link" id="Dashboard">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li> --}}

                {{-- Admin --}}
                @if (Str::length(Auth::guard('admin')->user()) > 0)
                    <li class="nav-item">
                        <a href="{{ route('admin') }}" class="nav-link" id="Dashboard">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview" id="masteruser">
                        <a href="#" class="nav-link" id="user">
                            <i class="nav-icon fas fa-users"></i>
                            <p> User Management
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('user.dosen') }}" class="nav-link" id="dosen">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>Dosen </p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('user.mahasiswa') }}" class="nav-link" id="mahasiswa">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>Mahasiswa </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if (Str::length(Auth::guard('dosen')->user()) > 0)
<<<<<<< HEAD
                    @if (Auth::guard('dosen')->user()->role == 'dosen_pengampu')
                        {{-- Dosen Pengampu --}}
                        <li class="nav-item">
                            <a href="{{ route('dosen') }}" class="nav-link" id="Dashboard">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dosen.kontrol') }}" class="nav-link" id="kontrols">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Kontrol Kuesioner
                                </p>
                            </a>
                        </li>
                    @endif
                    @if (Auth::guard('dosen')->user()->role == 'dosen_koor')
                        <li class="nav-item">
                            <a href="{{ route('dosen') }}" class="nav-link" id="Dashboard">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    RPS
                                </p>
                            </a>
                        </li>
                    @endif
                    @if (Auth::guard('dosen')->user()->role == 'gugus_kendali')
                        <li class="nav-item">
                            <a href="{{ route('dosen') }}" class="nav-link" id="Dashboard">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gugus.cetak') }}" class="nav-link" id="cetak">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Cetak Laporan
                                </p>
                            </a>
                        </li>
                    @endif
                    @if (Auth::guard('dosen')->user()->role == 'super_dosen1')
                        <li class="nav-item">
                            <a href="{{ route('dosenp1') }}" class="nav-link" id="Dashboard">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dosen.kontrol') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Kontrol Kuesioner
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview" id="masteruser">
                            <a href="#" class="nav-link" id="user">
                                <i class="nav-icon fas fa-users"></i>
                                <p> Login Sebagai
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('dosenp1') }}" class="nav-link" id="dosenp1">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>Dosen Pengampu </p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('dosenk1') }}" class="nav-link" id="dosenk1">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>Dosen Koor </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if (Auth::guard('dosen')->user()->role == 'super_dosen2')
                        <li class="nav-item">
                            <a href="{{ route('dosenp2') }}" class="nav-link" id="Dashboard">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dosen.kontrol') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Kontrol Kuesioner
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview" id="masteruser">
                            <a href="#" class="nav-link" id="user">
                                <i class="nav-icon fas fa-users"></i>
                                <p> Login Sebagai
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('dosenp2') }}" class="nav-link" id="dosenp2">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>Dosen Pengampu </p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('gugusk2') }}" class="nav-link" id="gugusk2">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>Gugus Kendali </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if (Auth::guard('dosen')->user()->role == 'super_dosen3')
                        <li class="nav-item">
                            <a href="{{ route('dosenk3') }}" class="nav-link" id="Dashboard">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    RPS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview" id="masteruser">
                            <a href="#" class="nav-link" id="user">
                                <i class="nav-icon fas fa-users"></i>
                                <p> Login Sebagai
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('dosenk3') }}" class="nav-link" id="dosenk3">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>Dosen Koor </p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('gugusk3') }}" class="nav-link" id="gugusk3">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>Gugus Kendali </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if (Auth::guard('dosen')->user()->role == 'super_dosen4')
                        <li class="nav-item">
                            <a href="{{ route('dosenp4') }}" class="nav-link" id="Dashboard">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dosen.kontrol') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Kontrol Kuesioner
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview" id="masteruser">
                            <a href="#" class="nav-link" id="user">
                                <i class="nav-icon fas fa-users"></i>
                                <p> Login Sebagai
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('dosenp4') }}" class="nav-link" id="dosenp4">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>Dosen Pengampu </p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('dosenk4') }}" class="nav-link" id="dosenk4">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>Dosen Koor </p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('gugusk4') }}" class="nav-link" id="gugusk4">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>Gugus Kendali </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                @endif
=======
                    <li class="nav-item">
                        <a href="{{ route('dosen') }}" class="nav-link" id="Dashboard">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('dosen.kontrol')}}" class="nav-link" id="kontrol">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Kontrol Kuisioner
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            @if (Auth::guard('dosen')->user()->id ==
                                DB::table('koordinators')->select('id_dosen')->count() &&
                                DB::table('gugus_kendalis')->select('id_dosen')->count() &&
                                DB::table('jadwals')->select('id_dosen')->count())
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Koor</a>
                                    <a class="dropdown-item" href="#">Gugus Kendali</a>
                                    <a class="dropdown-item" href="#">Dosen Pengampu</a>
                                </div>
                            @elseif (Auth::guard('dosen')->user()->id ==
                                DB::table('koordinators')->select('id_dosen')->count())
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Koor</a>
                                </div>
                            @elseif (Auth::guard('dosen')->user()->id ==
                                DB::table('gugus_kendalis')->select('id_dosen')->count())
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Gugus Kendali</a>
                                </div>
                            @elseif (Auth::guard('dosen')->user()->id ==
                                 DB::table('jadwals')->select('id_dosen')->count())
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown button
                                 </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href="#">Dosen Pengampu</a>
                                </div>
                            @else
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    ndak punya akses
                                </button>
                            @endif
                        </div>
                    </li>
                @endif

                {{-- Dosen Pengampu --}}
                {{-- @if (Str::length(Auth::guard('dosen')->user()->koor()-) > 0)
                    <li class="nav-item">
                        <a href="{{ route('dosen') }}" class="nav-link" id="Dashboard">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dosen.kontrol') }}" class="nav-link" id="kontrols">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Kontrol Kuesioner
                            </p>
                        </a>
                    </li>
                @endif --}}
                @can('koor')
                    <li class="nav-item has-treeview" id="masteruser">
                        <a href="#" class="nav-link" id="user">
                            <i class="nav-icon fas fa-users"></i>
                            <p> Login Sebagai
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="dosen">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>Koor </p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="mahasiswa">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>Gugus </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
>>>>>>> c4a11937e111e05cf990cbb1a08c2292a837b125

                {{-- Mahasiswa --}}
                @if (Str::length(Auth::guard('mahasiswa')->user()) > 0)
                    <li class="nav-item">
                        <a href="{{ route('mahasiswa') }}" class="nav-link" id="Dashboard">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('kuisioner') }}" class="nav-link" id="kuisioner">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Kuesioner</p>
                        </a>
                    </li>
                @endif
<<<<<<< HEAD
=======

                {{-- Super Dosen 1 --}}
                @can('super_dosen1')
                    <li class="nav-item">
                        <a href="{{ route('dosenp1') }}" class="nav-link" id="Dashboard">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Kontrol Kuesioner
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview" id="masteruser">
                        <a href="#" class="nav-link" id="user">
                            <i class="nav-icon fas fa-users"></i>
                            <p> Login Sebagai
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dosenp1') }}" class="nav-link" id="dosen">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>Dosen Pengampu </p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dosenk1') }}" class="nav-link" id="mahasiswa">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>Dosen Koor </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
>>>>>>> c4a11937e111e05cf990cbb1a08c2292a837b125
                <!-- /.sidebar -->
</aside>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->
