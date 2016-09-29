@extends('user.index')

@section('content')
    <!--main content start-->
    <section id="main-content" class="reloading">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 mt">
                    <!-- Nav tabs -->
                    <div class="container-fluid">
                        <div class="row  text-center">
                            <ul class="nav nav-tabs col-sm-12">
                                    <li class="col-sm-3"><a href="#addLike" data-toggle="tab">Накрутка
                                            <br/> лайков</a></li>
                                    <li class="col-sm-3"><a href="#addRepost" data-toggle="tab">Накрутка
                                            <br/> репостов</a></li>
                                    <li class="col-sm-3"><a href="#addFriends" data-toggle="tab">Накрутка
                                            <br/> друзей</a></li>
                                    <li class="col-sm-3"><a href="#addInterview" data-toggle="tab">Накрутка
                                        <br/> опросов</a></li>
                                    <li class="col-sm-3"><a href="#addSocial" data-toggle="tab">Накрутка
                                            <br/> участников встречи</a></li>
                                    <li class="col-sm-3"><a href="#addUserGroup" data-toggle="tab">Накрутка
                                            <br/> участников группы</a></li>
                                    <li class="col-sm-3"><a href="#addComments" data-toggle="tab">Накрутка
                                            <br/> комментарией</a></li>
                                    <li class="col-sm-3"><a href="#addComments" data-toggle="tab">ПУСТОЙ
                                            <br/> контейнер</a></li>
                            </ul>
                        </div>
                    </div>


                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in" id="addLike">
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
                                    @include('user.forms.addComment')
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                </div>
            </div>

    @include('user.include.tableSpend')

        </section><! --/wrapper -->

    </section><!-- /MAIN CONTENT -->
@stop

@section('scriptOnPage')
<script>
    $(document).ready(function loadScroll() {
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
@stop

