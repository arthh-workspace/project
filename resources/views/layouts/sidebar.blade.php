<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-uppercase" aria-current="page">
                    <span data-feather="user" class="align-text-bottom"></span>
                    {{ Auth::user()->name }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>

            {{-- Admin --}}
            @can('admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.m') }}">
                        <span data-feather="file" class="align-text-bottom"></span>
                        User Management
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/post">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Menu admin 2
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/post">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Menu admin 3
                    </a>
                </li>
            @endcan
            {{-- Gugus Kendali --}}
            @can('gugus_kendali')
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Menu gugus 1
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/post">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Menu gugus 2
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/post">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Menu gugus 3
                    </a>
                </li>
            @endcan
            {{-- Mahasiswa --}}
            @can('mahasiswa')
                <li class="nav-item">
                    <a class="nav-link" href="/post">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Menu mahasiswa 1
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/post">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Menu mahasiswa 2
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/post">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Menu mahasiswa 3
                    </a>
                </li>
            @endcan
            {{-- Dosen Koor --}}
            @can('dosen_koor')
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Menu Dosen koor 1
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Menu Dosen koor 2
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Menu Dosen koor 3
                    </a>
                </li>
            @endcan
            {{-- Dosen Pengampu --}}
            @can('dosen_pengampu')
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Menu Dosen pengampu 1
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Menu Dosen pengampu 2
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Menu Dosen pengampu 3
                    </a>
                </li>
            @endcan
        </ul>
    </div>
</nav>
