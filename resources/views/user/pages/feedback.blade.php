@extends('user.index')

@section('content')
    <section id="main-content" class="inload reloading" >
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Тех отдел</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Администрация</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Онлайн помощь</button>
                    </div>
                </div>
            </div>
            <div class="row mt">
                <div class="col-md-offset-1 col-md-10 col-md offset-1">
                    <div style="height: 400px" class="info-block">

                    </div>
                </div>
            </div>
        </section>
    </section>
@stop