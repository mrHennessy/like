@extends('user.index')

@section('content')
    <section id="main-content" class="reloading" >
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-md-12">
                    <ul class="nav nav-tabs workTabs"  id="tabs">
                        <div class="container-fluid">
                            <div class="row  text-center">
                                <div class="col-md-6 nav nav-tabs respons">
                                    <li><a href="{{ route('tehForm') }}">Тех отдел</a></li>
                                </div>
                                <div class="col-md-6 nav nav-tabs respons">
                                    <li ><a href="{{ route('TableAddLike') }}">Администрация</a></li>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="row mt">
                <div class="col-md-offset-1 col-md-10 col-md offset-1">
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
            <!-- RedHelper -->
            <script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
                    src="https://web.redhelper.ru/service/main.js?c=mrheadshot62">
            </script>
            <!--/Redhelper -->
        </section>
    </section>
@stop