<!DOCTYPE html>
<html lang="ru">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>[ Liker.com ]</title>

    <!-- Bootstrap core CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/bootstrap.css')}}" />
    <!--external css-->
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/font-awesome.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/zabuto_calendar.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/js/gritter/css/jquery.gritter.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/lineicons/style.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/font-awesome.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/themify-icons.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/web-hosting-glyphs.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/style.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/to-do.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/fontstyle.css')}}" />

    <!--add big pack fonts ico-->
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/mypatch-codes.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/mypatch.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/mypatch-ie7.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/mypatch-codes.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/stylePrice.css')}}" />
    <!--end big pack fonts ico-->

    <!-- Custom styles for this template -->
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/style-responsive.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/styleSelect.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/mystyle.css')}}" />



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>

        <section id="container" >

    <!--        //Подключение шапки(статика)-->
            @include('user.include.header')

    <!--        //Подключение главное менюшки(статика)-->
            @include('user.include.sidebar')

    <!--        //Подключение контента блоков страниц(динамика)-->
            @yield('content')

    <!--        //Подключение футера(статика)-->
            @include('user.include.footer')

        </section>

        <!--        //Подключение скриптов-->
        @include('user.include.scripts')

        @yield('scriptOnPage')

    </body>
</html>
