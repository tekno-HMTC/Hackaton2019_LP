<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title') LPencerdas </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('template/images/idea.png') !!}">
    @include('partials.css')
    @yield('AddCss')

</head>

<body>
    @include('layouts.preloader')
    <div id="main-wrapper"style="margin-bottom:-18px">
        @include('layouts.header')
        <div class="content-body">
            @yield('content')

            <!-- #/ container -->
        </div>
        @include('layouts.footer')
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('partials.js')

    @yield('addJS')
    <script>
        function asd(){
            $.ajax({ 
                type: 'GET', 
                url: 'http://localhost:8000/api/wish/',
                dataType: 'json',
                success: function (data) { 
                    console.log($('#change'))
                    if(JSON.parse(data)==0){
                        $('#change').css('display','none');
                    } else{
                        $('#change').css('display','block');
                        $('#change').html(JSON.parse(data));
                    }
                    
                }
            });
        }
        asd();
    </script>

</body>

</html>
,
,
