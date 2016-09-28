@extends('user.index')

@section('content')
    <!--main content start-->
    <section id="main-content" class="reloading">

        <section class="wrapper site-min-height">

            <div class="container-fluid">
                <div class="row mt">
                    <div class="col-sm-12 select-work">
                        <div class="fleft">
<!--                            <select id="cd-dropdown" class="cd-select">-->
<!--                                <option value="-1" selected>Выберите работу</option>-->
<!--                                <option value="depart.html" class="whhg-stacks">Любая</option>-->
<!--                                <option value="vk.com" onclick="goAdd()" class="whhg-skitch">Ставить лайки</option>-->
<!--                                <option value="3" onclick="goAdd()" class="whhg-shortcut">Делать репосты</option>-->
<!--                                <option value="4" onclick="goAdd()" class="whhg-adduseralt">Добавлять в друзья</option>-->
<!--                                <option value="4" onclick="goAdd()" class="whhg-groups-friends">Вступать в группы</option>-->
<!--                                <option value="4" onclick="goAdd()" class="whhg-city">Участвовать во встречах</option>-->
<!--                                <option value="4" onclick="goAdd()" class="whhg-analytics-piechart">Участвовать в опросах</option>-->
<!--                                <option value="4" onclick="goAdd()" class="whhg-addcomment">Комментировать</option>-->
<!--                            </select>-->
                            <ul class="nav nav-tabs workTabs"  id="tabs">

                                <div class="container-fluid">
                                    <div class="row  text-center">
                                        <div class="col-sm-3 nav nav-tabs respons">
                                            <li><a href="{{ route('TableAddAll') }}"  class="exp">Все</a></li>
                                        </div>
                                        <div class="col-sm-3 nav nav-tabs respons">
                                            <li><a href="{{ route('TableAddLike') }}"  class="exp">Ставить лайки</a></li>
                                        </div>
                                        <div class="col-sm-3 nav nav-tabs respons">
                                            <li><a href="{{ route('TableAddFollow') }}" class="exp">Делать репосты</a></li>
                                        </div>
                                        <div class="col-sm-3 nav nav-tabs respons">
                                            <li><a href="{{ route('TableAddFriend') }}" class="exp">Добавлять в друзья</a></li>
                                        </div>
                                    </div>
                                    <div class="row  text-center">
                                        <div class="col-sm-3 nav nav-tabs respons">
                                            <li><a href="{{ route('TableAddGroup') }}" class="exp">Вступать в группы</a></li>
                                        </div>
                                        <div class="col-sm-3 nav nav-tabs respons">
                                            <li><a href="{{ route('TableAddSocial') }}" class="exp">Участвовать во встречах</a></li>
                                        </div>
                                        <div class="col-sm-3 nav nav-tabs respons">
                                            <li><a href="{{ route('TableAddInterview') }}" class="exp">Участвовать в опросах</a></li>
                                        </div>
                                        <div class="col-sm-3 nav nav-tabs respons">
                                            <li><a href="{{ route('TableAddComments') }}"  class="exp">Комментировать</a></li>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 work-center mt">
                        <section class="task-panel tasks-widget">
                            <div class="panel-body">
                                <div class="tab-pane " id="goAddAll">
                                    <div class="row mt">
                                        <div class="col-sm-12" id="als">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <p class="all-center">Выберите тип заданий</p>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <br/>

                            </div>
                        </section>
                    </div>
                </div>
            </div>


        </section><! --/wrapper -->

    </section><!-- /MAIN CONTENT -->

@stop


