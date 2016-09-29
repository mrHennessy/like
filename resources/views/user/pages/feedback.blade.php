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
                    <div class="col-sm-12 work-center mt tab-content">
                        <div class="tab-pane fade" id="teh">
                            @include('user/forms/feedback/tehForm')
                        </div>
                        <div class="tab-pane fade" id="admin">
                            123
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
<!--            <div class="row mt">-->
<!--                <div class="col-sm-12" id="als">-->
<!--                    <div class="col-sm-8 col-sm-offset-2">-->
<!--                        <p class="all-center">Выберите тип заданий</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <br/>-->
<!--    </div>-->
<!--</section>-->

@section('scriptOnPage')

@stop