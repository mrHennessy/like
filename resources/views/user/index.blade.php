<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('user/assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('user/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/js/gritter/css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/lineicons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/font-awesome.css')}}">
      <!--add big pack fonts ico-->
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/mypatch-codes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/mypatch.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/mypatch-embedded.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/animation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/mypatch-ie7.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/mypatch-codes.css')}}">
      <!--end big pack fonts ico-->

      <!-- Custom styles for this template -->
    <link href="{{asset('user/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('user/assets/css/style-responsive.css')}}" rel="stylesheet">

    <script src="{{asset('user/assets/js/chart-master/Chart.js')}}"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  @yield('content')

    @include('user.include.scripts')

    <!--script for this page-->
    <script src="{{asset('user/assets/js/sparkline-chart.js')}}"></script>
	<script src="{{asset('user/assets/js/zabuto_calendar.js')}}"></script>

	
	<script type="application/javascript">
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
  

  </body>
</html>
