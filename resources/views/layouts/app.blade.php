<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/img/icon.jpg" type="image/gif">
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/flag-icon.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.4.0.0.css">
    <link rel="stylesheet" href="/css/bootstrap.min.3.3.7.css">
    <!-- Scrips -->
    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js//popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <style type="text/css">
        @font-face {
            font-family:'Font';
            src: url('/fonts/BTITRBOLD.ttf');
        }
        @font-face {
            font-family: 'IranNastaliq';
            src: url('/fonts/IranNastaliq.eot?#') format('eot'),
            url('/fonts/IranNastaliq.ttf') format('truetype'),
            url('/fonts/IranNastaliq.woff') format('woff');
        }
        .iran{
            font-family:IranNastaliq,'IranNastaliq',tahoma;
            font-size:12px;
        }
        .bg {
            background-image: url("/img/bg.jpg");
            height: 100%;
            background-position: center;
            background-repeat: repeat-y;
            background-size: cover;
        }
        li.different{
            border:none;
            position: relative;
        }
        li.different:hover{
            border: none;
        }
        li:hover {
            border-bottom: 5px solid #FFFFFF;
        }
        .different::after{
            content: '';
            position: absolute;
            width: 0px;
            height: 5px;
            left: 50%;
            bottom:0;
            background-color: darkblue;
            transition: all ease-in-out .2s;
        }
        .different:hover::after{
            width: 100%;
            left: 0;
        }
    </style>
</head>
<body class="bg" style="font-family:'Font'">

    <nav class="navbar navbar-expand bg-light navbar-default">
        <div class="container">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li class="different"><a href="{{ route('contactus') }}">
                        <i class="fas fa-phone" style="color:red"></i>
                        تماس با ما
                    </a>
                </li>

                <li class="dropdown different">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        <i class="fas fa-landmark" style="color:#4e87c4"></i>
                        سفارت ها
                    </a>
                    <ul class="dropdown-menu">

                        <li class="text-center">

                            <a href="{{ route('france') }}">
                                <span class="flag-icon flag-icon-fr"></span>
                                سفارت فرانسه
                            </a>

                        </li>
                    </ul>
                </li>
                <li class="different"><a href="{{ route('home') }}">
                        <i class="fas fa-home" style="color: black"></i>
                        صفحه اصلی
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
    </div>

@yield('content')
</body>
</html>