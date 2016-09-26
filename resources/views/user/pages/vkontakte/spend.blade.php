@extends('user.index')

@section('content')
    <!--main content start-->
    <section id="main-content" class="reloading">

        <section class="wrapper site-min-height">

            <div class="row">
                <div class="col-sm-12 mt">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs"  id="reg">
                        <li><a href="#addLike" class="exp" onclick="loadScrol()" data-toggle="tab">Накрутка лайков</a></li>
                        <li><a href="#addRepost" class="exp" onclick="loadScrol()" data-toggle="tab">Накрутка репостов</a></li>
                        <li><a href="#addFriends" class="exp" onclick="loadScrol()" data-toggle="tab">Накрутка друзей</a></li>
                        <li><a href="#addUserGroup" class="exp" onclick="loadScrol()" data-toggle="tab">Накрутка участников группы</a></li>
                        <li><a href="#addSocial" class="exp" onclick="loadScrol()" data-toggle="tab">Накрутка участников встречи</a></li>
                        <li><a href="#addInterview" class="exp" onclick="loadScrol()" data-toggle="tab">Накрутка опросов</a></li>
                        <li><a href="#addComments" class="exp" onclick="loadScrol()" data-toggle="tab">Накрутка комментарией</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade" id="addLike">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addLike')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="addRepost">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addFollow')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="addFriends">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addFriend')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="addUserGroup">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addUserGroup')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="addSocial">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addSocial')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="addInterview">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addInterview')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="addComments">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addLike')
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                </div>
            </div>

<!--            Table Tasks-->
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
<!--            End Table Tasks-->

        </section><! --/wrapper -->

    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    @include('user.include.footer')
    <!--footer end-->



@stop


