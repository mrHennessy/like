@extends('user.index')

@section('content')
    <section id="main-content" class="reloading">
        <section class="wrapper site-min-height" id="wrapper">
            <div class="container-fluid">
                <div class="row mt">
                    <div class="col-sm-12">
                        <div class="row mt">
                            <div class="col-sm-12 col-md-10 col-md-offset-1 hidden-phone user-block">
                                <div class="col-sm-8">
                                    <div class="row mt">
                                        <div class="col-sm-offset-1 col-sm-6">
                                            <p>Имя Фамилия</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>Юрец Ололошев</p>
                                        </div>
                                    </div>
                                    <div class="row mt">
                                        <div class="col-sm-offset-1 col-sm-6 ">
                                            <p>Возраст</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>8</p>
                                        </div>
                                    </div>
                                    <div class="row mt">
                                        <div class="col-sm-offset-1 col-sm-6">
                                            <div class="refer-link">
                                                <p>Реферальная ссылка <button type="button" class="btn btn-theme05" id="btn-copy-ref-link"><i class="whhg-link"></i></button></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="refer-link">
                                                <input class="form-control" id="ref-link" type="text" value="http://refer.com/fe8Uj2" placeholder="http://refer.com/fe8Uj2" disabled/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt">
                                        <div class="col-sm-offset-1 col-sm-6">
                                            <p>Дата регистрации</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>20.09.2016</p>
                                        </div>
                                    </div>
                                    <div class="row mt">
                                        <div class="col-sm-offset-1 col-sm-6">
                                            <p>Статус</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>Администратор</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 centered">
                                    <img class="avatarka" src="{{asset('user/assets/img/ava.jpg')}}" alt="132"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt">
                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-12 col-sm-12">
                            <h4>Статистика ваших заказов</h4>
                            <div class="panel-body">
                                <div id="hero-graph" class="graph"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <h4>Статистика выполненых заданий</h4>
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

@section('scriptOnPage')
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>


<script src="{{asset('user/assets/js/sparkline-chart.js')}}"></script>
<script>
    var Script = function () {

        $(function () {

            var tax_data = [
                {"period": "<?php echo date('d')-0 . ' ' . date('m'); ?>", "licensed": 50, "sorned": 60},
                {"period": "<?php echo date('d')-1 . ' ' . date('m'); ?>", "licensed": 60, "sorned": 70},
                {"period": "<?php echo date('d')-2 . ' ' . date('m'); ?>", "licensed": 70, "sorned": 20},
                {"period": "<?php echo date('d')-3 . ' ' . date('m'); ?>", "licensed": 70, "sorned": 20},
                {"period": "<?php echo date('d')-4 . ' ' . date('m'); ?>", "licensed": 70, "sorned": 20},
            ];
            Morris.Bar({
                element: 'hero-graph',
                data: [
                    {day: "<?php echo date('d') . '.' . date('m')?>", geekbench: 1000},
                    {day: "<?php echo date('d')-1 . '.' . date('m')?>", geekbench: 900},
                    {day: "<?php echo date('d')-2 . '.' . date('m')?>", geekbench: 800},
                    {day: "<?php echo date('d')-3 . '.' . date('m')?>", geekbench: 700},
                    {day: "<?php echo date('d')-4 . '.' . date('m')?>", geekbench: 600},
                    {day: "<?php echo date('d')-5 . '.' . date('m')?>", geekbench: 500}
                ],
                xkey: 'day',
                ykeys: ['geekbench'],
                labels: ['Licensed'],
                lineColors:['#4ECDC4']
            });

            Morris.Bar({
                element: 'hero-bar',
                data: [
                    {day: "<?php echo date('d') . '.' . date('m')?>", geekbench: 1000},
                    {day: "<?php echo date('d')-1 . '.' . date('m')?>", geekbench: 900},
                    {day: "<?php echo date('d')-2 . '.' . date('m')?>", geekbench: 800},
                    {day: "<?php echo date('d')-3 . '.' . date('m')?>", geekbench: 700},
                    {day: "<?php echo date('d')-4 . '.' . date('m')?>", geekbench: 600},
                    {day: "<?php echo date('d')-5 . '.' . date('m')?>", geekbench: 500}
                ],
                xkey: 'day',
                ykeys: ['geekbench'],
                labels: ['Geekbench'],
                barRatio: 0.4,
                xLabelAngle: 35,
                hideHover: 'auto',
                barColors: ['#ac92ec']
            });

            $('.code-example').each(function (index, el) {
                eval($(el).text());
            });
        });

    }();
</script>

<script type="text/javascript">
    $('#btn-copy-ref-link').zclip({
        path: "user/assets/js/ZeroClipboard.swf",
        copy: function(){return $('#ref-link').val()},
        afterCopy: function () {
            alert('Ваша реферальная ссылка скопирована');
        }
    });
</script>
@stop