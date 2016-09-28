@extends('user.index')

@section('content')
    <section id="main-content" class="reloading">
        <section class="wrapper site-min-height" id="wrapper">
            <div class="container-fluid">
                <div class="row mt">
                    <div class="col-sm-12">
                        <div class="row mt">
                            <div class="col-sm-8 col-sm-offset-2 avatarka hidden-phone info-block">
                                <img class="" src="{{asset('user/assets/img/ava.jpg')}}" alt="132"/>
                                <div class="centered strong">
                                    Имя: Юрко <br/>
                                    <strong>Фамилия: </strong>Ололошев<br/>
                                    <strong>Реферальная ссылка: </strong>http://vk.com/a.novakovsky<br/>
                                    <strong>Психологический возвраст: </strong>48<br/>
                                    <strong>Физический возвраст: </strong>9<br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt">
                    <div class="col-md-12">
                        <div class="col-md-6">
                                        <h4><i class="fa fa-angle-right"></i> Chart Example 1</h4>
                                        <div class="panel-body">
                                            <div id="hero-graph" class="graph"></div>
                                        </div>
                        </div>
                        <div class="col-md-6">
                                        <h4><i class="fa fa-angle-right"></i>Статистика лакойв</h4>
                                        <div class="panel-body">
                                            <div id="hero-bar" class="graph"></div>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>


@stop