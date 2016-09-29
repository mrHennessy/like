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
@stop