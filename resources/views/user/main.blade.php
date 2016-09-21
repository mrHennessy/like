@extends('user.index')

@section('content')
<section id="container" >
<!-- **********************************************************************************************************************************************************
TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->
<!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Скрыть/Показать навигацию"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>VK Likers</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-theme">4</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 4 pending tasks</p>
                        </li>
                        <li>
                            <a href="{{ route('UserIndexPage')}}">
                                <div class="task-info">
                                    <div class="desc">DashGum Admin Panel</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('UserIndexPage')}}">
                                <div class="task-info">
                                    <div class="desc">Database Update</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('UserIndexPage')}}">
                                <div class="task-info">
                                    <div class="desc">Product Development</div>
                                    <div class="percent">80%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('UserIndexPage')}}">
                                <div class="task-info">
                                    <div class="desc">Payments Sent</div>
                                    <div class="percent">70%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                        <span class="sr-only">70% Complete (Important)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="{{ route('UserIndexPage')}}">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-theme">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href="{{ route('UserIndexPage')}}">
                                <span class="photo"><img alt="avatar" src="user/assets/img/ui-zac.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Zac Snider</span>
                                        <span class="time">Just now</span>
                                        </span>
                                        <span class="message">
                                            Hi mate, how is everything?
                                        </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('UserIndexPage')}}">
                                <span class="photo"><img alt="avatar" src="user/assets/img/ui-divya.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Divya Manian</span>
                                        <span class="time">40 mins.</span>
                                        </span>
                                        <span class="message">
                                         Hi, I need your help with this.
                                        </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('UserIndexPage')}}">
                                <span class="photo"><img alt="avatar" src="user/assets/img/ui-danro.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Dan Rogers</span>
                                        <span class="time">2 hrs.</span>
                                        </span>
                                        <span class="message">
                                            Love your new Dashboard.
                                        </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('UserIndexPage')}}">
                                <span class="photo"><img alt="avatar" src="user/assets/img/ui-sherman.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Dj Sherman</span>
                                        <span class="time">4 hrs.</span>
                                        </span>
                                        <span class="message">
                                            Please, answer asap.
                                        </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('UserIndexPage')}}">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="{{ route('UserIndexPage')}}">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <h4 class="centered" > Ваш аккаунт </h4>
                <p class="centered"><a href="{{ route('PersonalBoard')}}"><img src="user/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                <h5 class="centered">Имя Фамилия</h5>
                <hr/>
                <h5 class="centered">Баланс: 88 <i class="fa fa-heart"></i></h5>
                <h5 class="centered"><a href="{{ route('StoreUser')}}"><button type="button" class="btn btn-theme04"><i class="fa fa-heart"></i> Купить лайки</button></h5></a>
                <hr/>

                <li class="">
                    <a class="active" href="{{ route('PersonalBoard')}}">
                        <i class="icon-user"></i>
                        <span>Мой кабинет</span>
                    </a>
                </li>

                <li class="mt">
                    <a href="{{ route('UserIndexPage')}}">
                        <i class="icon-globe"></i>
                        <span>Главная</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="icon-vkontakte"></i>
                        <span></i>Вконтакте</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{ route('SpendUser')}}">Включить накрутку</a></li>
                        <li><a  href="{{ route('WorkUser')}}">Заработать лайки</a></li>
                    </ul>
                </li>

                <li class="">
                    <a href="{{ route('PartnerUser')}}">
                        <i class="icon-users"></i>
                        <span>Партнёрская программа</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('FeedbackUser')}}">
                        <i class="icon-reply"></i>
                        <span>Обратная связь</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{ route('StoreUser')}}">
                        <i class="icon-shopping-bag"></i>
                        <span>Магазин</span>
                    </a>
                </li>

                <li class="">
                        <a href="{{ route('FreeUser')}}">
                        <i class="icon-diamond"></i>
                        <span>Халява</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
    <section class="wrapper">

    <div class="row">
    <div class="col-lg-9 main-chart">

        <div class="row mtbox">
            <div class="col-md-3 col-sm-3  col-xs-6 box0">
                <a href="{{ route('SpendUser')}}">
                    <div class="box1">
                        <img src="user/assets/img/ico-flat/gears.png" width="96px"  height="96px" alt=""/>
                        <h3>Включить <br/> накрутку</h3>
                    </div>
                    <p>Поднять популярность вашей страницы</p>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 box0">
                <a href="{{ route('WorkUser')}}">
                    <div class="box1">
                        <img src="user/assets/img/ico-flat/screen-security-hand.png" width="96px" height="96px" alt=""/>
                        <h3>Заработать <br/> лайки</h3>
                    </div>
                    <p>Выполняйте задания и получайте лайки</p>
                </a>

            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 box0">
                <a href="{{ route('PartnerUser')}}">
                    <div class="box1">
                        <img src="user/assets/img/ico-flat/file-folder-pencil.png" width="96px" height="96px" alt=""/>
                        <h3>Список <br/> рефералов</h3>
                    </div>
                    <p>Проанализируйте активность ваших рефералов</p>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 box0">
                <a href="{{ route('FeedbackUser')}}">
                    <div class="box1">
                        <img src="user/assets/img/ico-flat/screen-girl-chat.png" width="96px" height="96px" alt=""/>
                        <h3>Поддержка <br/> FAQ</h3>
                    </div>
                    <p>База ответов на часто-задаваемые вопросы</p>
                </a>
            </div>

        </div><!-- /row mt -->


        <div class="row mt">
            <!-- SERVER STATUS PANELS -->
            <div class="col-md-4 col-sm-4 col-xs-4 mb">
                <div class="content-panel pn">
                    <div id="spotify">
                        <div class="col-xs-4 col-xs-offset-8">
                            <a href="{{ route('UserIndexPage')}}" target="_blank"><button class="btn btn-sm btn-clear-g">Просмотреть</button><a/>
                        </div>
                        <div class="sp-title">
                            <a href="{{ route('UserIndexPage')}}" target="_blank"><h3>LORDE</h3><a/>
                        </div>
                        <div class="play">
                            <a href="{{ route('UserIndexPage')}}" target="_blank"><i class="fa fa-play-circle"></i><a/>
                        </div>
                    </div>
                    <p class="followers"><i class="fa fa-user"></i> 576,000 ПОДПИСЧИКОВ</p>
                </div>
            </div><!-- /col-md-4-->


            <div class="col-md-4 col-sm-4 col-xs-4 mb">
                <div class="content-panel pn">
                    <div id="spotify">
                        <div class="col-xs-4 col-xs-offset-8">
                            <a href="{{ route('UserIndexPage')}}" target="_blank"><button class="btn btn-sm btn-clear-g">Просмотреть</button></a>
                        </div>
                        <div class="sp-title">
                            <a href="{{ route('UserIndexPage')}}" target="_blank"><h3>LORDE</h3><a/>
                        </div>
                        <div class="play">
                            <a href="{{ route('UserIndexPage')}}" target="_blank"><i class="fa fa-play-circle"></i><a/>
                        </div>
                    </div>
                    <p class="followers"><i class="fa fa-user"></i> 576,000 ПОДПИСЧИКОВ</p>
                </div>
            </div><!-- /col-md-4 -->

            <div class="col-md-4 col-xs-4 mb">
                <div class="content-panel pn">
                    <div id="spotify">
                        <div class="col-xs-4 col-xs-offset-8">
                            <a href="{{ route('UserIndexPage')}}" target="_blank"><button class="btn btn-sm btn-clear-g">Просмотреть</button><a/>
                        </div>
                        <div class="sp-title">
                            <a href="{{ route('UserIndexPage')}}" target="_blank"><h3>LORDE</h3><a/>
                        </div>
                        <div class="play">
                            <a href="{{ route('UserIndexPage')}}" target="_blank"><i class="fa fa-play-circle"></i><a/>
                        </div>
                    </div>
                    <p class="followers"><i class="fa fa-user"></i> 576,000 ПОДПИСЧИКОВ</p>
                </div>
            </div><!-- /col-md-4 -->


        </div><!-- /row -->


        <div class="row">
            <!-- TWITTER PANEL -->
            <div class="col-md-4 col-xs-4 mb">

            </div><!-- /col-md-4 -->


            <div class="col-md-4 col-xs-4 mb">

            </div><!-- /col-md-4 -->

            <div class="col-md-4 col-sm-4 col-xs-4 mb">

            </div><!-- /col-md-4 -->

        </div><!-- /row -->

        <!--<div class="row mt">-->
        <!--&lt;!&ndash;CUSTOM CHART START &ndash;&gt;-->
        <!--<div class="border-head">-->
        <!--<h3>VISITS</h3>-->
        <!--</div>-->
        <!--<div class="custom-bar-chart">-->
        <!--<ul class="y-axis">-->
        <!--<li><span>10.000</span></li>-->
        <!--<li><span>8.000</span></li>-->
        <!--<li><span>6.000</span></li>-->
        <!--<li><span>4.000</span></li>-->
        <!--<li><span>2.000</span></li>-->
        <!--<li><span>0</span></li>-->
        <!--</ul>-->
        <!--<div class="bar">-->
        <!--<div class="title">JAN</div>-->
        <!--<div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>-->
        <!--</div>-->
        <!--<div class="bar ">-->
        <!--<div class="title">FEB</div>-->
        <!--<div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>-->
        <!--</div>-->
        <!--<div class="bar ">-->
        <!--<div class="title">MAR</div>-->
        <!--<div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>-->
        <!--</div>-->
        <!--<div class="bar ">-->
        <!--<div class="title">APR</div>-->
        <!--<div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>-->
        <!--</div>-->
        <!--<div class="bar">-->
        <!--<div class="title">MAY</div>-->
        <!--<div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>-->
        <!--</div>-->
        <!--<div class="bar ">-->
        <!--<div class="title">JUN</div>-->
        <!--<div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>-->
        <!--</div>-->
        <!--<div class="bar">-->
        <!--<div class="title">JUL</div>-->
        <!--<div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--&lt;!&ndash;custom chart end&ndash;&gt;-->
        <!--</div>&lt;!&ndash; /row &ndash;&gt;	-->

    </div><!-- /col-lg-9 END SECTION MIDDLE -->


    <!-- **********************************************************************************************************************************************************
    RIGHT SIDEBAR CONTENT
    *********************************************************************************************************************************************************** -->

    <div class="col-lg-3 ds">
    <!--COMPLETED ACTIONS DONUTS CHART-->
    <h3><img src="user/assets/img/ico-flat/screen-file-checkmark.png" height="36" width="36" alt="topuser"/> ВАШИ ЗАДАНИЯ</h3>

    <!-- First Action -->
    <div class="desc">
        <div class="thumb">
            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
        </div>
        <div class="details">
            <p><muted>3 часа назад</muted><br/>
                <!--<p style="text-align: center">Выполнено</p>-->
                <!--<div class="progress progress-striped active">-->
                <!--<div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 90%">-->
                <!--<span class="sr-only">90% Complete</span>-->
                <!--</div>-->
                <!--</div>-->
            <div class="task-title">
                <span class="task-title-sp">Накрутка лайков</span><br/>
                <span class="task-title-sp">Статус:</span>
                <span class="badge bg-theme">В процессе</span>

                <div class="pull-right">
                    <br/>
                    <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Second Action -->
    <div class="desc">
        <div class="thumb">
            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
        </div>
        <div class="details">
            <p><muted>3 часа назад</muted><br/>
                <!--<p style="text-align: center">Выполнено</p>-->
                <!--<div class="progress progress-striped active">-->
                <!--<div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 90%">-->
                <!--<span class="sr-only">90% Complete</span>-->
                <!--</div>-->
                <!--</div>-->
            <div class="task-title">
                <span class="task-title-sp">Накрутка лайков</span><br/>
                <span class="task-title-sp">Статус:</span>
                <span class="badge bg-success">Выполнено</span>

                <div class="pull-right">
                    <br/>
                    <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Third Action -->
    <div class="desc">
        <div class="thumb">
            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
        </div>
        <div class="details">
            <p><muted>3 часа назад</muted><br/>
                <!--<p style="text-align: center">Выполнено</p>-->
                <!--<div class="progress progress-striped active">-->
                <!--<div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 90%">-->
                <!--<span class="sr-only">90% Complete</span>-->
                <!--</div>-->
                <!--</div>-->
            <div class="task-title">
                <span class="task-title-sp">Накрутка лайков</span><br/>
                <span class="task-title-sp">Статус:</span>
                <span class="badge bg-success">Выполнено</span>

                <div class="pull-right">
                    <br/>
                    <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fourth Action -->
    <div class="desc">
        <div class="thumb">
            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
        </div>
        <div class="details">
            <p><muted>3 часа назад</muted><br/>
                <!--<p style="text-align: center">Выполнено</p>-->
                <!--<div class="progress progress-striped active">-->
                <!--<div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 90%">-->
                <!--<span class="sr-only">90% Complete</span>-->
                <!--</div>-->
                <!--</div>-->
            <div class="task-title">
                <span class="task-title-sp">Накрутка лайков</span><br/>
                <span class="task-title-sp">Статус:</span>
                <span class="badge bg-theme">В процессе</span>

                <div class="pull-right">
                    <br/>
                    <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fifth Action -->
    <div class="desc">
        <div class="thumb">
            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
        </div>
        <div class="details">
            <p><muted>3 часа назад</muted><br/>
                <!--<p style="text-align: center">Выполнено</p>-->
                <!--<div class="progress progress-striped active">-->
                <!--<div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 90%">-->
                <!--<span class="sr-only">90% Complete</span>-->
                <!--</div>-->
                <!--</div>-->
            <div class="task-title">
                <span class="task-title-sp">Накрутка лайков</span><br/>
                <span class="task-title-sp">Статус:</span>
                <span class="badge bg-success">Выполнено</span>

                <div class="pull-right">
                    <br/>
                    <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- USERS ONLINE SECTION -->
    <h3><img src="user/assets/img/ico-flat/medal.png" height="36" width="36" alt="topuser"/> ТОП 5 ПОЛЬЗОВАТЕЛЕЙ</h3>
    <!-- First Member -->
    <div class="desc">
        <div class="thumb">
            <img class="img-circle" src="user/assets/img/ui-divya.jpg" width="35px" height="35px" align="">
        </div>
        <div class="details">
            <p>#1 <a href="#">DIVYA MANIAN</a><br/>
                <muted>14389 <i class="fa fa-heart"></i></muted>
            </p>
        </div>
    </div>
    <!-- Second Member -->
    <div class="desc">
        <div class="thumb">
            <img class="img-circle" src="user/assets/img/ui-sherman.jpg" width="35px" height="35px" align="">
        </div>
        <div class="details">
            <p>#2 <a href="#">DJ SHERMAN</a><br/>
                <muted>9183 <i class="fa fa-heart"></i></muted>
            </p>
        </div>
    </div>
    <!-- Third Member -->
    <div class="desc">
        <div class="thumb">
            <img class="img-circle" src="user/assets/img/ui-danro.jpg" width="35px" height="35px" align="">
        </div>
        <div class="details">
            <p>#3 <a href="#">DAN ROGERS</a><br/>
                <muted>7329 <i class="fa fa-heart"></i></muted>
            </p>
        </div>
    </div>
    <!-- Fourth Member -->
    <div class="desc">
        <div class="thumb">
            <img class="img-circle" src="user/assets/img/ui-zac.jpg" width="35px" height="35px" align="">
        </div>
        <div class="details">
            <p>#4 <a href="#">Zac Sniders</a><br/>
                <muted>4809 <i class="fa fa-heart"></i></muted>
            </p>
        </div>
    </div>
    <!-- Fifth Member -->
    <div class="desc">
        <div class="thumb">
            <img class="img-circle" src="user/assets/img/ui-sam.jpg" width="35px" height="35px" align="">
        </div>
        <div class="details">
            <p>#5 <a href="#">Marcel Newman</a><br/>
                <muted>3055 <i class="fa fa-heart"></i></muted>
            </p>
        </div>
    </div>

    <!--&lt;!&ndash; CALENDAR&ndash;&gt;-->
    <!--<div id="calendar" class="mb">-->
    <!--<div class="panel green-panel no-margin">-->
    <!--<div class="panel-body">-->
    <!--<div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">-->
    <!--<div class="arrow"></div>-->
    <!--<h3 class="popover-title" style="disadding: none;"></h3>-->
    <!--<div id="date-popover-content" class="popover-content"></div>-->
    <!--</div>-->
    <!--<div id="my-calendar"></div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>&lt;!&ndash; / calendar &ndash;&gt;-->

    <!--<script type="text/javascript">-->
    <!--$(document).ready(function () {-->
    <!--var unique_id = $.gritter.add({-->
    <!--// (string | mandatory) the heading of the notification-->
    <!--title: 'Welcome to Dashgum!',-->
    <!--// (string | mandatory) the text inside the notification-->
    <!--text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',-->
    <!--// (string | optional) the image to display on the left-->
    <!--image: 'assets/img/ui-sam.jpg',-->
    <!--// (bool | optional) if you want it to fade out on its own or just sit there-->
    <!--sticky: true,-->
    <!--// (int | optional) the time you want it to be alive for before fading out-->
    <!--time: '',-->
    <!--// (string | optional) the class name you want to apply to that specific message-->
    <!--class_name: 'my-sticky-class'-->
    <!--});-->

    <!--return false;-->
    <!--});-->
    <!--</script>-->

    </div><!-- /col-lg-3 -->
    </div><! --/row -->
    </section>
    </section>

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2014 - Alvarez.is
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>
@stop