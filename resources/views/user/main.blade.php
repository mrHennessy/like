@extends('user.index')

@section('content')
    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->

    <section id="main-content" class="reloading">
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
                </div><!-- /col-lg-3 -->
            </div><! --/row -->
        </section>
    </section>
@stop