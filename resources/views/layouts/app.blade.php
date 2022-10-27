<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reunion</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dashboard.scss')}}">

    <style>
        body{
            background-color: #252936;
        }

        .text-sm.text-gray-700.dark\:text-gray-500.underline {
            color: #fff;
            text-decoration: none;
            margin-right: 15px;
        }
        .text-sm.text-gray-700.dark\:text-gray-500.underline:hover {
            color: #e45914;
        }
        .bg-light {
            background-color: rgba(0,0,0,0.7) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .llb{
            padding-bottom: 150px;
            background-image: url("/images/sponser-img.png") !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important; 
            /* height: 150vh; */
        }
        .footer{
            padding-top: 50px;
            padding-bottom: 20px;
            background-image: url("/images/footer.png") !important;
            background-position: center top;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .top-part {
            text-align: center;
            margin-bottom: 50px;
        }
        .social ul li {
            list-style: none;
            padding: 0;
            display: inline-block;
            position: relative;
            margin: 0 30px;
        }
        .social ul li a{
            padding: 20px 18px 24px 18px;
            transition: all 400ms ease;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #ffffff;
        }
        .social ul li a svg{
            width: 30px;
            height: 30px;
            color: #888c9a;
        }
        .social ul li a:hover svg
        {
            color: #e45914;
        }
        .copyright {
            position: relative;
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
        }
        .copyright p {
            margin-top: 20px;
            color: #fff;
        }
        .form-control:focus {
            color: #212529;
            background-color: #f8fafc;
            border-color: #db4312;
            outline: 0;
            box-shadow: 0 0 0 0rem rgba(13, 110, 253, 0.25);
        }
        @media (max-width: 575.98px) {
            .footer {
                position: relative !important;
            }
            .log {
                padding-top: 110px;
                padding-bottom: 50px;
            }
            .social ul li {
                margin: 0 0px;
            }
            .social ul li a {
                border-radius: 0;
            }
        }
        @media (min-width: 576px) and (max-width: 767.98px) {
            .footer {
                position: relative !important;
            }
            .log {
                padding-top: 110px;
                padding-bottom: 50px;
            }
            .social ul li {
                margin: 0 0px;
            }
            .social ul li a {
                border-radius: 0;
            }
        }
        @media (min-width: 768px) and (max-width: 991.98px) {
            .footer {
                position: relative !important;
            }
            .log {
                padding-top: 110px;
                padding-bottom: 50px;
            }
            .social ul li {
                margin: 0 0px;
            }
            .social ul li a {
                border-radius: 0;
            }
        }
        @font-face {
            font-family: SutonnyOMJ;
            src: url('/fonts/SutonnyOMJ Regular.ttf');
        }
        body{
            font-family: SutonnyOMJ;
        }
        
    </style>
    
</head>
<body>
    <!-- <div id=""> -->
        @include('layouts.nav-t')

        <!-- <main class="py-4 llb"> -->
        @yield('content')
        <!-- </main> -->
        @include('layouts.footer')
    <!-- </div>
 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{asset('js/form.js')}}"></script>
    
    <script>
        $(function(){
            $("#mySelectBox").change(function(){
                if($(this).val() =="1")
                {
                    $("#register_table").css({"display":"block"});
                }
                else
                {
                    $("#register_table").css({"display":"none"});
                }
            });
        });
    </script>
    <script>
        $('form').on('click', '.addNewline', function(){

            let $newRow = $('tr.add:first').clone();

            $newRow.find('input.serial').val('');
            $newRow.find('input.relative').val('');
            $newRow.find('input.relation').val('');
            $newRow.find('select.r_tshirt').val('');
            
            $('.re_table').append($newRow);
        });
    </script>
    
</body>
</html>
