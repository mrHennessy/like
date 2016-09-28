<!DOCTYPE html>
<html lang="ru">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>[ Liker.com ]</title>

    <!-- Bootstrap core CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/bootstrap.css')}}" />
    <!--external css-->
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/font-awesome.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/zabuto_calendar.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/js/gritter/css/jquery.gritter.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/lineicons/style.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/font-awesome.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/themify-icons.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/web-hosting-glyphs.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/style.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/to-do.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/fontstyle.css')}}" />

    <!--add big pack fonts ico-->
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/mypatch-codes.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/mypatch.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/mypatch-ie7.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/mypatch-codes.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/stylePrice.css')}}" />
    <!--end big pack fonts ico-->

    <!-- Custom styles for this template -->
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/style-responsive.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/styleSelect.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('user/assets/css/mystyle.css')}}" />



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>

        <section id="container" >

    <!--        //Подключение шапки(статика)-->
        @include('user.include.header')

    <!--        //Подключение главное менюшки(статика)-->
        @include('user.include.sidebar')

    <!--        //Подключение контента блоков страниц(динамика)-->
        @yield('content')

    <!--        //Подключение футера(статика)-->
        @include('user.include.footer')

    <!--        //Подключение скриптов-->
        @include('user.include.scripts')

        </section>



    <!--dropdown-->
        <script type="text/javascript">
            $( function() {
                $( '#cd-dropdown' ).dropdown();
            });
        </script>

    <!--  scroll  -->
        <script>
        $(document).on('ready', function loadScroll() {
            $(".slider").slider({
                range: "min",
                animate: true,
                value:2,
                min: 2,
                max: 20,
                step: 1,
                slide: function(event, ui) {
                update(1,ui.value); //changed
                }
            });

        $(".slider2").slider({
                range: "min",
                animate: true,
                value:10,
                min: 10,
                max: 500,
                step: 5,
                slide: function(event, ui) {
                update(2,ui.value); //changed
                }
            });

            //Added, set initial value.
            $("#amount").val(2);
            $("#duration").val(10);
            $("#amount-label").text(0);
            $("#duration-label").text(0);

            update();
        });

        //changed. now with parameter
        function update(slider,val) {
            //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
            var $amount = slider == 1?val:$("#amount").val();
            var $duration = slider == 2?val:$("#duration").val();

            /* commented
            $amount = $( "#slider" ).slider( "value" );
            $duration = $( "#slider2" ).slider( "value" );
            */

            $total = "" + ($amount * $duration);
            $( ".amount" ).val($amount);
            $( ".amount-label" ).text($amount);
            $( ".duration" ).val($duration);
            $( ".duration-label" ).text($duration);
            $( ".total" ).val($total);
            $( ".total-label" ).text($total);

            $('.slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
            $('.slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$duration+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
        }
        </script>

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

    <!--  kalendar  -->
        <script>
            $(document).ready(function () {
                $("#date-popover").popover({html: true, trigger: "manual"});
                $("#date-popover").hide();
                $("#date-popover").click(function (e) {
                    $(this).hide();
                });

                $("#my-calendar").zabuto_calendar({
                    action: function () {
                        return myDateFunction(this.id, false);
                    },
                    action_nav: function () {
                        return myNavFunction(this.id);
                    },
                    ajax: {
                        url: "show_data.php?action=1",
                        modal: true
                    },
                    legend: [
                        {type: "text", label: "Special event", badge: "00"},
                        {type: "block", label: "Regular event", }
                    ]
                });
            });


            function myNavFunction(id) {
                $("#date-popover").hide();
                var nav = $("#" + id).data("navigation");
                var to = $("#" + id).data("to");
                console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
            }
        </script>

        <!--     pjax  -->
        <script>
                $(document).pjax('#tabs li a', '#als', {fragment: '.table-load'});
        </script>

<!--        <!--     pjax  -->-->
<!--        <script>-->
<!--            $(document).pjax('#sidebar a, .box0 a', '.reloading', {fragment: '.reloading'});-->
<!--        </script>-->



        <script type="text/javascript">
                $('#btn-copy-ref-link').zclip({
                    path: "user/assets/js/ZeroClipboard.swf",
                    copy: function(){return $('#ref-link').val()},
                    afterCopy: function () {
                        alert('Ваша реферальная ссылка скопирована');
                    }
                });
        </script>





    </body>
</html>
