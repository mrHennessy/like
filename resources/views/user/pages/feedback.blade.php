@extends('user.index')

@section('content')
    <section id="main-content" class="reloading" >
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs workTabs col-sm-8 col-sm-offset-2 text-center"  id="tabs">
                        <li class="width50"><a href="#teh"  data-toggle="tab">Тех отдел</a></li>
                        <li class="width50"><a href="#admin" data-toggle="tab">Администрация</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt">
                <div class="col-md-offset-1 col-md-10 col-md offset-1">
                    <div class="col-sm-12 tab-content">
                        <div class="tab-pane fade in active">
                                <div class="col-sm-8 mt col-sm-offset-2">
                                    <p class="all-center">Выберите отдел</p>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="teh">
                            @include('user/forms/feedback/tehForm')
                        </div>
                        <div class="tab-pane fade" id="admin">
                            @include('user/forms/feedback/administrationForm')
                        </div>
                    </div>
                </div>
            </div>
            <!-- RedHelper -->
            <script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
                    src="https://web.redhelper.ru/service/main.js?c=mrheadshot62">
            </script>
            <!--/Redhelper -->
        </section>
    </section>

@stop
<!--<section class="task-panel tasks-widget">-->
<!--    <div class="panel-body">-->
<!--        <div class="tab-pane " id="goAddAll">-->
<!--
<!--        </div>-->
<!--        <br/>-->
<!--    </div>-->
<!--</section>-->

@section('scriptOnPage')

@stop