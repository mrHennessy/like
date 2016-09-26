@extends('user.index')

@section('content')
    <!--main content start-->
    <section id="main-content" class="reloading">

        <section class="wrapper site-min-height">

            <div class="row">
                <div class="col-sm-12 mt">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs"  id="reg">
                        <li><a href="#addLike" class="exp" onclick="loadScroll()" data-toggle="tab">Накрутка лайков</a></li>
                        <li><a href="#addRepost" class="exp" onclick="loadScroll()" data-toggle="tab">Накрутка репостов</a></li>
                        <li><a href="#addFriends" class="exp" onclick="loadScroll()" data-toggle="tab">Накрутка друзей</a></li>
                        <li><a href="#addUserGroup" class="exp" onclick="loadScroll()" data-toggle="tab">Накрутка участников группы</a></li>
                        <li><a href="#addSocial" class="exp" onclick="loadScroll()" data-toggle="tab">Накрутка участников встречи</a></li>
                        <li><a href="#addInterview" class="exp" onclick="loadScroll()" data-toggle="tab">Накрутка опросов</a></li>
                        <li><a href="#addComments" class="exp" onclick="loadScroll()" data-toggle="tab">Накрутка комментарией</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade" id="addLike">
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


