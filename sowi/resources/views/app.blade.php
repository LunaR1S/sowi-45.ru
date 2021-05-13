<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="{{asset('assets/img/scenery/logo.png')}}" type="image/png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('page_title', 'Главная')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/smoothproducts.css') }}">

  
   
</head>


<body style="background: url({{asset('assets/img/bg/background.jpg')}}) ; -moz-background-size: 100%;  background-size: 470%; height: 100vh;  ">
<nav class="navbar  navbar-expand-lg fixed-top  clean-navbar" style=" color: black;">
        <div class="container"  ><a class="navbar-brand logo " href="{{ route('home') }}"><img style="height: 60px; margin-left:-200px" src="{{asset('assets/img/scenery/logo1.png')}}"><br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span  class="sr-only">Toggle navigation</span><span style="color: black;" class="navbar-toggler-icon">≣</span></button>
            <div class="collapse navbar-collapse " id="navcol-1" >
                <ul class="nav navbar-nav  " style="color:black;width: 1500px;margin-left:2%; ">
                    @auth 
                    <li class="nav-item" role="presentation"><a class="nav-link active " href="{{ route('home') }}">Главная</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('features') }}">Услуги</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('about') }}">Галерея</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('list') }}">Прайси лист</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" style="color:white;  " > {{$u->email}}</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" style="width: 80px;"  href="{{ route('logout') }}">Выход</a></li>
                    <br>
                    <li class="nav-item" role="presentation"><a class="nav-link active btn btn-success rounded-pill" style="width: 82px;"  href="{{ route('review') }}">Отзывы</a></li>
                    <br>
                    <li class="nav-item " role="presentation"><a class="nav-link active btn  rounded-pill" style="width: 150px;background: #31b7bc;" href="{{ route('listzayvka') }}">Онлайн запись</a></li>

                    @else
                    
                    
                    <li class="nav-item" role="presentation"><a class="nav-link active " href="{{ route('home') }}">Главная</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('features') }}">Услуги</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('about') }}">Галерея</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('list') }}">Прайси лист</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link  " style="width: 135px;" href="{{ route('register') }} ">Регистрация</a></li>

                    <li class="nav-item" role="presentation"><a class="nav-link  " style="width: 135px;" href="{{ route('login') }} ">Авторизация</a></li>
                    <br>
                    <li class="nav-item" role="presentation"><a class="nav-link active btn btn-success rounded-pill" style="width: 82px;" href="{{ route('review') }}">Отзывы</a></li>
                    <br>
                    <li class="nav-item " role="presentation"><a class="nav-link active btn  rounded-pill" style="width: 150px;background: #31b7bc;" href="{{ route('listzayvka') }}">Онлайн запись</a></li>

                    @endauth
                </ul>
            </div>
        </div>
    </nav>

                @php
                    $admin = DB::table('users')->where([
                        ['id', Auth::id()],
                        ['admin' , 1 ]
                        ])->pluck('admin')->first();
                @endphp

                @if($admin == 1)
                    <li style="margin-top: 125px; position: fixed; right: 50px; padding: -250px" class="nav-item btn btn-info" role="presentation"><a class="nav-link active " href="{{ route('admin') }}">Админка</a></li>
                @endif

    @yield('content')


    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/js.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
</html>