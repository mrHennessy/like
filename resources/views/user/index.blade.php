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
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/mypatch-ie7.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/mypatch-codes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/styleSelect.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/stylePrice.css')}}">
      <!--end big pack fonts ico-->

      <!-- Custom styles for this template -->
    <link href="{{asset('user/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('user/assets/css/style-responsive.css')}}" rel="stylesheet">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >

      @include('user.include.header')

      @include('user.include.sidebar')


      @include('user.include.scripts')

      @yield('scriptpage')

      @yield('content')





  </section>

  <script type="text/javascript">

      function loadScrol() {
          $(".slider").slider({
              range: "min",
              animate: true,
              value:1,
              min: 10,
              max: 1000,
              step: 10,
              slide: function(event, ui) {
                  update(1,ui.value); //changed
              }
          });

          $(".slider2").slider({
              range: "min",
              animate: true,
              value:1,
              min: 1,
              max: 365,
              step: 1,
              slide: function(event, ui) {
                  update(2,ui.value); //changed
              }
          });

          //Added, set initial value.
          $("#amount").val(0);
          $("#duration").val(0);
          $("#amount-label").text(0);
          $("#duration-label").text(0);

          update();
      }

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

    <script>
            $(document).pjax('#sidebar a, .box0 a', '.reloading', {fragment: '.reloading'});
    </script>

  </body>
</html>
