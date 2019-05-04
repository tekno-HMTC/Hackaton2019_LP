<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LPencerdas - </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('template/images/idea.png') !!}">
    @include('partials.css')
    @yield('AddCss')

</head>

<body>
    @include('layouts.preloader')
    <div id="main-wrapper"style="margin-bottom:-18px">
        @include('layouts.header')
        <div style="min-height: calc(100vh - 133px)">
            <div class="row">
                <div class="col-3" style="min-height: calc(100vh - 133px)">
                    @yield('content-kiri')
                </div>
                <div class="col-9" style="min-height: calc(100vh - 133px)">
                    @yield('content-kanan')
                </div>
            </div>
            <!-- #/ container -->
        </div>
        @include('layouts.footer')
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('partials.js')

</body>

</html>
,
,
