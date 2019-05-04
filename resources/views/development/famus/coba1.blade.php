<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LPencerdas - </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('template/images/logo.png') !!}">
    @include('partials.css')
    @yield('AddCss')

</head>

<body class="h-100">
    @include('layouts.preloader')
    <div id="main-wrapper" class="h-100">
        <div style="height:calc(100vh - 150px)" class="login-form-bg mh-100 mt-5 mb-5">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <img src="{!! asset('template/images/logo.png') !!}" width="25%" height="25%" class="mx-auto d-block" alt="Responsive image">
                                <a type="image/png" sizes="16x16" href="{!! asset('template/images/logo.png') !!}"></a>

                                <form class="mt-5 login-input" method="POST" action="{{route('login')}}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama Pengguna" name="username">
                                        @error("username")
                                            <div id="val-username-error" class="invalid-feedback animated fadeInDown" style="display: block;">Masukkan nama pengguna</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Kata Sandi" name="password">
                                        @error("password")
                                            <div id="val-username-error" class="invalid-feedback animated fadeInDown" style="display: block;">Masukkan kata sandi</div>
                                        @enderror
                                    </div>
                                    <button class="btn login-form__btn submit w-100" type="submit">Sign In</button>
                                    <p class="mt-5 login-form__footer" align="right"><a href="{{ route('password.request') }}" class="text-primary">Lupa kata sandi?</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('partials.js')

</body>

