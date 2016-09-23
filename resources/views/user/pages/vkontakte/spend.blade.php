@extends('user.index')

@section('content')

<section id="container" >

<!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->

    <!--header start-->
    @include('user.include.header')
    <!--header end-->

<!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->

    <!--sidebar start-->
    @include('user.include.sidebar')
    <!--sidebar end-->

<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
*********************************************************************************************************************************************************** -->

    <!--main content start-->
    <section id="main-content" class="inload reloading">
        <section class="wrapper site-min-height">

            <div class="row">
                <div class="col-sm-12 mt">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#addLike" data-toggle="tab">Накрутка лайков</a></li>
                        <li><a href="#addRepost" data-toggle="tab">Накрутка репостов</a></li>
                        <li><a href="#addFriends" data-toggle="tab">Накрутка друзей</a></li>
                        <li><a href="#addUserGroup" data-toggle="tab">Накрутка участников группы</a></li>
                        <li><a href="#addSocial" data-toggle="tab">Накрутка участников встречи</a></li>
                        <li><a href="#addInterview" data-toggle="tab">Накрутка опросов</a></li>
                        <li><a href="#addComments" data-toggle="tab">Накрутка комментарией</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="addLike">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addLike')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="addRepost">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addFollow')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="addFriends">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addFriend')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="addUserGroup">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addUserGroup')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="addSocial">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addSocial')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="addInterview">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addInterview')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="addComments">
                            <div class="row mt">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('user.forms.addLike')
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/><br/><br/><br/><br/>
                    <form class="form-horizontal style-form" method="get">
<!--                        <div class="refreshfield">-->
<!---->
<!--                        </div>-->






<!--                        <h3 class="mt col-sm-offset-1">-->
<!--                            <label class="control-label">Таргетинг</label>-->
<!--                        </h3>-->
<!---->
<!--                        <h4 class="mt col-sm-offset-1">-->
<!--                            <label class="control-label">Пол</label>-->
<!--                        </h4>-->
<!---->
<!--                        <div class="radio col-sm-offset-1">-->
<!--                            <label>-->
<!--                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="any" checked>-->
<!--                                Любой-->
<!--                            </label>&nbsp;&nbsp;-->
<!--                            <label>-->
<!--                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="man">-->
<!--                                Мужской-->
<!--                            </label>-->
<!--                            <label>&nbsp;&nbsp;-->
<!--                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="woman">-->
<!--                                Женский-->
<!--                            </label>-->
<!--                        </div>-->
                    </form>
                </div>
            </div>

<!--            Table Tasks-->
            <div class="row">
                <div class="col-md-12">
                    <div class="row mt">
                        <div class="col-md-12">
                            <div class="content-panel">
                                <table class="table table-striped table-advance table-hover">
                                    <h4><i class="fa fa-angle-right"></i> История заказов</h4>
                                    <hr>
                                    <thead>
                                    <tr>
                                        <th><i class="fa fa-sort-numeric-asc"></i> | #</th>
                                        <th class="hidden-phone"><i class="fa fa-file-text-o"></i> | Название</th>
                                        <th><i class="fa fa-bar-chart-o"></i> | Прогресс</th>
                                        <th><i class="fa fa-info"></i> | Статус выполнения</th>
                                        <th><i class="fa fa-external-link"></i> | Редактировать/Удалить</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="hidden-phone"><a href="">Поставить лайки на аву</a></td>
                                        <td>
                                            <div class="progress progress-striped active">
                                                    <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                        <span class="sr-only">45% Complete</span>
                                                    </div>
                                            </div>
                                        </td>
                                        <td><span class="label label-info label-mini">Выполняется</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="">2</a></td>
                                        <td class="hidden-phone"><a href="">Поставить лайки на аву</a></td>
                                        <td>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar"  role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                                                    <span class="sr-only">77% Complete</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="label label-info label-mini">Выполняется</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="">3</a></td>
                                        <td class="hidden-phone"><a href="">Поставить лайки на аву</a></td>
                                        <td>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="label label-success label-mini">Выполнено</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- /content-panel -->
                        </div><!-- /col-md-12 -->
                    </div><!-- /row -->
                </div>
            </div>
<!--            End Table Tasks-->


        </section><! --/wrapper -->

    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    @include('user.include.footer')
    <!--footer end-->
</section>
<!--    Script refresh -->

<!--script for this page-->

@stop

@section('scriptpage')
<script src="{{asset('user/assets/js/modernizr.custom.63321.js')}}"></script>
<script src="{{asset('user/assets/js/jquery.dropdown.js')}}"></script>

<script src="{{asset('user/assets/js/bootstrap-switch.js')}}"></script>
<script src="{{asset('user/assets/js/jquery.tagsinput.js')}}"></script>
<script src="{{asset('user/assets/js/form-component.js')}}"></script>


<script type="text/javascript">

    $( function() {

        $( '#cd-dropdown' ).dropdown( {
            gutter : 5,
            delay : 100,
            random : false
        } );

    });

</script>

<script>
    $(document).ready(function() {
        $("#slider").slider({
            range: "min",
            animate: true,
            value:1,
            min: 1,
            max: 10,
            step: 1,
            slide: function(event, ui) {
                update(1,ui.value); //changed
            }
        });

        $("#slider2").slider({
            range: "min",
            animate: true,
            value:5,
            min: 5,
            max: 300,
            step: 5,
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
        $( "#amount" ).val($amount);
        $( "#amount-label" ).text($amount);
        $( "#duration" ).val($duration);
        $( "#duration-label" ).text($duration);
        $( "#total" ).val($total);
        $( "#total-label" ).text($total);

        $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
        $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$duration+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
    }

</script>

@stop
