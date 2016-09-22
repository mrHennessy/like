@extends('user.index')

@section('content')

<section id="container" >
<!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->

    <!--header start-->
    @include('user.include.header')
    <!--header end-->

<!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->

    <!--sidebar start-->
    @include('user.include.sidebar')
    <!--sidebar end-->

<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
*********************************************************************************************************************************************************** -->

    <!--main content start-->
    <section id="main-content" class="reloading">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-md-12">
                    <div class="row mt">
                        <div class="col-md-2 col-md-offset-2">
                                <button class="btn-clear-g nakrutka-btn animated" >
                                    <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                    <p>Накрутка лайков</p>
                                </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                    </div>
                    <div class="row mt">
                        <div class="col-md-2 col-md-offset-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row mt">
                        <div class="col-md-12">
                            <div class="content-panel">
                                <table class="table table-striped table-advance table-hover">
                                    <h4><i class="fa fa-angle-right"></i> История заказов</h4>
                                    <hr>
                                    <thead>
                                    <tr>
                                        <th><i class="fa fa-sort-numeric-asc"></i> | #</th>
                                        <th class="hidden-phone"><i class="fa fa-file-text-o"></i> | Название</th>
                                        <th><i class="fa fa-bar-chart-o"></i> | Прогресс</th>
                                        <th><i class="fa fa-info"></i> | Статус выполнения</th>
                                        <th><i class="fa fa-external-link"></i> | Редактировать/Удалить</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="hidden-phone"><a href="">Поставить лайки на аву</a></td>
                                        <td>
                                            <div class="progress progress-striped active">
                                                    <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                        <span class="sr-only">45% Complete</span>
                                                    </div>
                                            </div>
                                        </td>
                                        <td><span class="label label-info label-mini">Выполняется</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="">2</a></td>
                                        <td class="hidden-phone"><a href="">Поставить лайки на аву</a></td>
                                        <td>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar"  role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                                                    <span class="sr-only">77% Complete</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="label label-info label-mini">Выполняется</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="">3</a></td>
                                        <td class="hidden-phone"><a href="">Поставить лайки на аву</a></td>
                                        <td>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="label label-success label-mini">Выполнено</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- /content-panel -->
                        </div><!-- /col-md-12 -->
                    </div><!-- /row -->
                </div>
            </div>
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    @include('user.include.footer')
    <!--footer end-->
</section>

@stop