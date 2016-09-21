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
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-md-12">
                    <div class="row mt">
                        <div class="col-md-2 col-md-offset-2">
                                <button class="btn-clear-g nakrutka-btn animated" >
                                    <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                    <p>Накрутка лайков</p>
                                </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                    </div>
                    <div class="row mt">
                        <div class="col-md-2 col-md-offset-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn-clear-g nakrutka-btn animated" >
                                <img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" alt="Накрутка лайков" width="64" height="64"/>
                                <p>Накрутка лайков</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    @include('user.include.footer')
    <!--footer end-->
</section>

@stop