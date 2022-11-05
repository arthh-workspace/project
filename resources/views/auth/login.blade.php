@extends('auth.layouts.app')

@section('content')
    <div class="row justify-content-center">

        <div class="" style="width: 1500px; height: 500px">

            <div class="card-deck o-hidden border-0 shadow-lg my-5 bg-light" style="height: 500px">
                <div class="card-body p-0">

                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="card o-hidden border-0 bg-primary text-white" style="border-radius: 0%; height: 500px">
                            <div class="row">
                                <div class="column" style="float: left; padding: 5px;">
                                    <img width="100"
                                        src="{{asset('assets/Politeknik-Negeri-Banyuwangi-removebg-preview.png')}}"
                                        style="margin-left: 10px">
                                </div>
                                <div class="column">
                                    <img width="110" src="{{asset('assets/HMTI.png')}}"
                                        style="margin-top: 10px">
                                </div>
                            </div>
                            <div class="card-body">
                                <p style="margin-top: 20px">Selamat datang</p>
                                <p style="font-size: 20px; margin-bottom:200px"><b> Sistem Informasi Penilaian<br> Kesesuaian Pelaksanaan
                                        Perkuliahan
                                    </b></p>
                            </div>
                            <div class="card-body">
                                <div class="column" style="float: left; padding: 5px;">
                                <a href="https://www.youtube.com/channel/UCq769ou-Gy0z5b8Nzgv4kfg">
                                    <img width="13" src="{{asset('assets/youtube.png')}}" style="margin-left: 10px">
                                </a>
                                    <b style="font-size: 12px">TI POLIWANGI TV</b>
                                </div>
                                <div class="column" style="float: left; padding: 5px;">
                                <a href="https://www.instagram.com/tipoliwangi/">
                                    <img width="13" src="{{asset('assets/instagram.png')}}" style="margin-left: 10px">
                                </a>
                                    <b style="font-size: 12px">@tipoliwangi</b>
                                </div>
                                <div class="column" style="float: left; padding: 5px;">
                                <a href="https://ti.poliwangi.ac.id/">
                                    <img width="13" src="{{asset('assets/browser.png')}}" style="margin-left: 10px">
                                </a>
                                    <b style="font-size: 12px">ti.poliwangi.ac.id</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                @if (Session::has('status'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif

                                <form method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input id="username" type="text"
                                            class="form-control form-control-user @error('username') is-invalid @enderror"
                                            name="username" value="{{ old('username') }}" required autocomplete="username"
                                            autofocus placeholder="Username">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong></strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input id="pass" type="password"
                                            class="form-control form-control-user @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong></strong>
                                            </span>
                                        @enderror
                                            <div class="input-group-append">
                                                <span id="mybutton" onclick="change()" class="input-group-text">
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
                                        <div class="custom-control custom-checkbox small">
                                            <input class="custom-control-input" type="checkbox" name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                        </div>

                                    </div>
                                    <button class="btn btn-primary btn-user btn-block" type="submit">
                                        Login
                                    </button>
                                    {{-- <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                </a> --}}
                                </form>
                                <hr>
                                <div class="text-center">
                                    {{-- <a class="small" href="">Forgot Password?</a> --}}
                                </div>
                                {{-- <div class="text-center">
                                <a class="small" href="{{('register')}}">Create an Account!</a>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
