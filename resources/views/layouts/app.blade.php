<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="icon" href="/img/icon.gif" type="image/gif">
    <link href="/css/googleapis.css" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{--TODO:website icon--}}
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

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
        body, html {
            height: 100%;
            margin: 0;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background: dimgrey;
            color: white;
            text-align: center;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .bg {
            background-image: url("/img/bg.png");
            height: 100%;
            background-position: center;
            background-repeat: repeat-y;
            background-size: cover;
        }
        .carousel {
            border-radius: 20px 20px 20px 20px;
            overflow: hidden;
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    {{--for-bootstrap-new-badge--}}
    <style>
        .badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}a.badge:focus,a.badge:hover{color:#fff;text-decoration:none;cursor:pointer}.badge-pill{padding-right:.6em;padding-left:.6em;border-radius:10rem}.badge-default{background-color:#636c72}.badge-default[href]:focus,.badge-default[href]:hover{background-color:#4b5257}.badge-primary{background-color:#0275d8}.badge-primary[href]:focus,.badge-primary[href]:hover{background-color:#025aa5}.badge-success{background-color:#5cb85c}.badge-success[href]:focus,.badge-success[href]:hover{background-color:#449d44}.badge-info{background-color:#5bc0de}.badge-info[href]:focus,.badge-info[href]:hover{background-color:#31b0d5}.badge-warning{background-color:#f0ad4e}.badge-warning[href]:focus,.badge-warning[href]:hover{background-color:#ec971f}.badge-danger{background-color:#d9534f}.badge-danger[href]:focus,.badge-danger[href]:hover{background-color:#c9302c}
    </style>
</head>
<body class="bg" style="font-family:'Font'">

    <nav class="navbar navbar-expand bg-light navbar-default">
        <div class="container">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li class="different"><a href="{{ route('home') }}">
                        <i class="fas fa-phone" style="color:red"></i>
                        تماس با ما
                    </a>
                </li>

                <li class="dropdown different">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        <i class="fas fa-landmark" style="color:rebeccapurple"></i>
                        سفارت ها
                    </a>
                    <ul class="dropdown-menu">

                        <li class="text-center">

                            <a href="{{ route('home') }}">
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
@yield('content')
</body>
</html>