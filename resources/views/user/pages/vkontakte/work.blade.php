@extends('user.index')

@section('content')
    <!--main content start-->
    <section id="main-content" class="reloading">

        <section class="wrapper site-min-height">

            <div class="container">
                <div class="row mt">
                    <div class="col-sm-12 select-work">
                        <div class="fleft">
                            <select id="cd-dropdown" class="cd-select">
                                <option value="-1" selected>Выберите работу</option>
                                <option value="1" class="whhg-stacks">Любая</option>
                                <option value="2" class="whhg-skitch">Ставить лайки</option>
                                <option value="3" class="whhg-shortcut">Делать репосты</option>
                                <option value="4" class="whhg-adduseralt">Добавлять в друзья</option>
                                <option value="4" class="whhg-groups-friends">Вступать в группы</option>
                                <option value="4" class="whhg-city">Участвовать во встречах</option>
                                <option value="4" class="whhg-analytics-piechart">Участвовать в опросах</option>
                                <option value="4" class="whhg-addcomment">Комментировать</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 work-center mt">
                        <section class="task-panel tasks-widget">
                            <div class="panel-body">
                                <div class=" add-task-row">
                                    <a class="btn btn-success btn-sm pull-left" href="todo_list.html#">Add New Tasks</a>
                                    <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a>
                                </div>
                                <div class="task-content">
                                    <ul class="task-list">
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="list-child" value=""  />
                                            </div>
                                            <div class="task-title">
                                                <span class="task-title-sp">Dashgum - Admin Panel Theme</span>
                                                <span class="badge bg-theme">Done</span>
                                                <div class="pull-right hidden-phone">
                                                    <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="list-child" value=""  />
                                            </div>
                                            <div class="task-title">
                                                <span class="task-title-sp">Extensive collection of plugins</span>
                                                <span class="badge bg-warning">Cool</span>
                                                <div class="pull-right hidden-phone">
                                                    <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="list-child" value=""  />
                                            </div>
                                            <div class="task-title">
                                                <span class="task-title-sp">Free updates always, no extra fees.</span>
                                                <span class="badge bg-success">2 Days</span>
                                                <div class="pull-right hidden-phone">
                                                    <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="list-child" value=""  />
                                            </div>
                                            <div class="task-title">
                                                <span class="task-title-sp">More features coming soon</span>
                                                <span class="badge bg-info">Tomorrow</span>
                                                <div class="pull-right hidden-phone">
                                                    <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="list-child" value=""  />
                                            </div>
                                            <div class="task-title">
                                                <span class="task-title-sp">Hey, seriously, you should buy this Dashboard</span>
                                                <span class="badge bg-important">Now</span>
                                                <div class="pull-right">
                                                    <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class=" add-task-row">
                                    <a class="btn btn-success btn-sm pull-left" href="todo_list.html#">Add New Tasks</a>
                                    <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>


        </section><! --/wrapper -->

    </section><!-- /MAIN CONTENT -->

@stop


