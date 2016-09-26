@extends('user.index')

@section('content')
    <!--main content start-->
    <section id="main-content" class="reloading">

        <section class="wrapper site-min-height">

            <div class="container-fluid">
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

                                @include('user.tablesWork.tableAddLike')

                                <div class=" add-task-row mt">
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


