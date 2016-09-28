@extends('user.index')

@section('content')

<section id="main-content" id="reloading">
    <section class="wrapper site-min-height" id="wrapper">
        <div class="container-fluid">
            <div class="row mt">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 zametki-store">
                            <div class="alert alert-info"><b>Магизин</b> <br/><br/>
                                <ul class="info-ref">
                                    <li>Здесь вы можете преобрести статус VIP пользователя и пополнить баланс вашего аккаунта</li>
                                    <li>При возникновении вопросов вы можете обратиться в отдел <a href="{{ route('FeedbackUser') }}">технической поддержки</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt">
                        <div class="col-sm-10 col-sm-offset-1 zametki-store">

                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <div class="product-panel-2 height-tr block-hot">
                                    <div class="info-sell">
                                    <div class="badge badge-hot">HOT <i class="glyphicon glyphicon-fire"></i></div>
                                    <h5 class="mt">+1000 <i class="fa fa-heart"></i></h5>
                                    <h6>+1000 <i class="fa fa-heart"></i> на баланс</h6>
                                    <h6></h6>
                                    <h6></h6>
                                    <h6></h6>
                                    </div>
                                    <button data-toggle="modal" data-target="#Buy1000" class="btn btn-small btn-theme04">Посмотреть товар</button>
                                </div>
                            </div><! --/col-md-4 -->

                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <div class="product-panel-2 height-tr block-hot">
                                    <div class="info-sell">
                                    <div class="badge badge-hot">HOT <i class="glyphicon glyphicon-fire"></i></div>
                                    <h5 class="mt">VIP1 <i class="fa fa-user"></i></h5>
                                    <h6>+300 <i class="fa fa-heart"></i> на баланс </h6>
                                    <h6>Выделениев цветом списке заданий</h6>
                                    <h6>Улучшеная тех. поддержка</h6>
                                </div>
                                    <button data-toggle="modal" data-target="#BuyV1" class="btn btn-small btn-theme04">Посмотреть товар</button>
                                </div>
                            </div><! --/col-md-4 -->

                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <div class="product-panel-2 height-tr block-hot">
                                    <div class="info-sell">
                                    <div class="badge badge-hot">HOT <i class="glyphicon glyphicon-fire"></i></div>
                                    <h5 class="mt">VIP2 <i class="fa fa-user"></i></h5>
                                    <h6>+400 <i class="fa fa-heart"></i> на баланс</h6>
                                    <h6>Выделениев цветом списке заданий</h6>
                                    <h6>Множитель лайков х2</h6>
                                    <h6>Улучшеная тех. поддержка</h6>
                                </div>
                                    <button data-toggle="modal" data-target="#BuyV2" class="btn btn-small btn-theme04">Посмотреть товар</button>
                                </div>
                            </div><! --/col-md-4 -->
                        </div>
                    </div>
                    <div class="col-sm-6 mt">
                        <div class="col-sm-12 mt">
                            <div class="content-panel pn vnimanie">
                                <div id="profile-01">
                                    <h3>VIP 1 <i class="fa fa-user"></i></h3>
                                    <h6>Весьма полезный для новичков уровень доступа к дополнительным функциям</h6>
                                </div>
                                <div class="centered">
                                    <h4>Стоимость | 60 <i class="whhg-hryvniaalt"></i> 150 <i class="whhg-roublealt" ></i> </h4>
                                </div>
                                <a data-toggle="modal" data-target="#BuyV1">
                                    <div class="profile-01 centered" >
                                        <p class="text-uppercase">Посмотреть товар <i class="whhg-shopping-cart"></i></p>
                                    </div>
                                </a>
                            </div><! --/content-panel -->
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="content-panel pn vnimanie">
                                <div id="profile-01">
                                    <h3>VIP 2 <i class="fa fa-user"></i></h3>
                                    <h6>Пакет VIP1 + множитель лайков </h6>
                                </div>
                                <div class="centered">
                                    <h4>Стоимость | 200 <i class="whhg-hryvniaalt"></i> 500 <i class="whhg-roublealt"></i> </h4>
                                </div>
                                <a data-toggle="modal" data-target="#BuyV2">
                                    <div class="profile-01 centered" >
                                        <p class="text-uppercase">Посмотреть товар <i class="whhg-shopping-cart"></i></p>
                                    </div>
                                </a>
                            </div><! --/content-panel -->
                        </div>
                    </div>

                    <div class="col-sm-6 mt">
                        <div class="col-sm-12 mt">
                            <div class="content-panel pn">
                                <div id="profile-01">
                                    <h3> +100 <i class="fa fa-heart"></i></h3>
                                    <h6></h6>
                                </div>
                                <div class="centered">
                                    <h4>Стоимость | 4 <i class="whhg-hryvniaalt"></i> 10 <i class="whhg-roublealt"></i> </h4>
                                </div>
                                <a data-toggle="modal" data-target="#Buy100">
                                    <div class="profile-01 centered" >
                                        <p class="text-uppercase">Посмотреть товар <i class="whhg-shopping-cart"></i></p>
                                    </div>
                                </a>
                            </div><! --/content-panel -->
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="content-panel pn">
                                <div id="profile-01">
                                    <h3> +200 <i class="fa fa-heart"></i></h3>
                                    <h6></h6>
                                </div>
                                <div class="centered">
                                    <h4>Стоимость | 8 <i class="whhg-hryvniaalt"></i> 20 <i class="whhg-roublealt"></i> </h4>
                                </div>
                                <a data-toggle="modal" data-target="#Buy200">
                                    <div class="profile-01 centered" >
                                        <p class="text-uppercase">Посмотреть товар <i class="whhg-shopping-cart"></i></p>
                                    </div>
                                </a>
                            </div><! --/content-panel -->
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="content-panel pn">
                                <div id="profile-01">
                                    <h3> +300 <i class="fa fa-heart"></i></h3>
                                    <h6></h6>
                                </div>
                                <div class="centered">
                                    <h4>Стоимость | 12 <i class="whhg-hryvniaalt"></i> 30 <i class="whhg-roublealt" ></i> </h4>
                                </div>
                                <a data-toggle="modal" data-target="#Buy300">
                                    <div class="profile-01 centered" >
                                        <p class="text-uppercase">Посмотреть товар <i class="whhg-shopping-cart"></i></p>
                                    </div>
                                </a>
                            </div><! --/content-panel -->
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="content-panel pn">
                                <div id="profile-01">
                                    <h3> +500 <i class="fa fa-heart"></i></h3>
                                    <h6></h6>
                                </div>
                                <div class="centered">
                                    <h4>Стоимость | 20 <i class="whhg-hryvniaalt"></i> 50 <i class="whhg-roublealt" ></i> </h4>
                                </div>
                                <a data-toggle="modal" data-target="#Buy500">
                                    <div class="profile-01 centered" >
                                        <p class="text-uppercase">Посмотреть товар <i class="whhg-shopping-cart"></i></p>
                                    </div>
                                </a>
                            </div><! --/content-panel -->
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="content-panel pn vnimanie">
                                <div id="profile-01">
                                    <h3> +1000 <i class="fa fa-heart"></i></h3>
                                    <h6> + бонус 100 <i class="fa fa-heart"></i></h6>
                                </div>
                                <div class="centered">
                                    <h4>Стоимость | 40 <i class="whhg-hryvniaalt"></i> 100 <i class="whhg-roublealt" ></i> </h4>
                                </div>
                                <a data-toggle="modal" data-target="#Buy1000">
                                    <div class="profile-01 centered" >
                                        <p class="text-uppercase">Посмотреть товар <i class="whhg-shopping-cart"></i></p>
                                    </div>
                                </a>
                            </div><! --/content-panel -->
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="content-panel pn">
                                <div id="profile-01">
                                    <h3> +2000 <i class="fa fa-heart"></i></h3>
                                    <h6> + бонус 200 <i class="fa fa-heart"></i></h6>
                                </div>
                                <div class="centered">
                                    <h4>Стоимость | 80 <i class="whhg-hryvniaalt"></i> 200 <i class="whhg-roublealt" ></i> </h4>
                                </div>
                                <a data-toggle="modal" data-target="#Buy2000">
                                    <div class="profile-01 centered" >
                                        <p class="text-uppercase">Посмотреть товар <i class="whhg-shopping-cart"></i></p>
                                    </div>
                                </a>
                            </div><! --/content-panel -->
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="content-panel pn">
                                <div id="profile-01">
                                    <h3> +3000 <i class="fa fa-heart"></i></h3>
                                    <h6> + бонус 300 <i class="fa fa-heart"></i></h6>
                                </div>
                                <div class="centered">
                                    <h4>Стоимость | 120 <i class="whhg-hryvniaalt"></i> 300 <i class="whhg-roublealt" ></i> </h4>
                                </div>
                                <a data-toggle="modal" data-target="#Buy3000">
                                    <div class="profile-01 centered" >
                                        <p class="text-uppercase">Посмотреть товар <i class="whhg-shopping-cart"></i></p>
                                    </div>
                                </a>
                            </div><! --/content-panel -->
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="content-panel pn">
                                <div id="profile-01">
                                    <h3> +5000 <i class="fa fa-heart"></i></h3>
                                    <h6> + бонус 500 <i class="fa fa-heart"></i></h6>
                                </div>
                                <div class="centered">
                                    <h4>Стоимость | 200 <i class="whhg-hryvniaalt"></i> 500 <i class="whhg-roublealt" ></i> </h4>
                                </div>
                                <a data-toggle="modal" data-target="#Buy5000">
                                    <div class="profile-01 centered" >
                                        <p class="text-uppercase">Посмотреть товар <i class="whhg-shopping-cart"></i></p>
                                    </div>
                                </a>
                            </div><! --/content-panel -->
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="content-panel pn">
                                <div id="profile-01">
                                    <h3> +10000 <i class="fa fa-heart"></i></h3>
                                    <h6>+ бонус 1000 <i class="fa fa-heart"></i></h6>
                                </div>
                                <div class="centered">
                                    <h4>Стоимость | 400 <i class="whhg-hryvniaalt"></i> 1000 <i class="whhg-roublealt"></i> </h4>
                                </div>
                                <a data-toggle="modal" data-target="#Buy10000">
                                    <div class="profile-01 centered" >
                                        <p class="text-uppercase">Посмотреть товар <i class="whhg-shopping-cart"></i></p>
                                    </div>
                                </a>
                            </div><! --/content-panel -->
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="content-panel pn">
                                <div id="profile-01">
                                    <h3> +50000 <i class="fa fa-heart"></i></h3>
                                    <h6>+ бонус 5000 <i class="fa fa-heart"></i></h6>
                                </div>
                                <div class="centered">
                                    <h4>Стоимость | 2000 <i class="whhg-hryvniaalt"></i> 5000 <i class="whhg-roublealt"></i> </h4>
                                </div>
                                <a data-toggle="modal" data-target="#Buy50000">
                                    <div class="profile-01 centered" >
                                        <p class="text-uppercase">Посмотреть товар <i class="whhg-shopping-cart"></i></p>
                                    </div>
                                </a>
                            </div><! --/content-panel -->
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="content-panel pn">
                                <div id="profile-01">
                                    <h3> +100000 <i class="fa fa-heart"></i></h3>
                                    <h6>+ бонус 10000 <i class="fa fa-heart"></i></h6>
                                </div>
                                <div class="centered">
                                    <h4>Стоимость | 4000 <i class="whhg-hryvniaalt"></i> 10000 <i class="whhg-roublealt" ></i> </h4>
                                </div>
                                <a data-toggle="modal" data-target="#Buy100000">
                                    <div class="profile-01 centered" >
                                        <p class="text-uppercase">Посмотреть товар <i class="whhg-shopping-cart"></i></p>
                                    </div>
                                </a>
                            </div><! --/content-panel -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
<!-- Modal -->
<div class="modal fade" id="BuyV1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Покупка статус на сайте - VIP1</h4>
            </div>
            <div class="modal-body">
                <h3>В пакет входит</h3>
                <ul>
                    <li>Ваши задания выводятся первые в списке</li>
                    <li>Вы получаете специальную рамку для отображения ваших заданий</li>
                    <li>Высокий приоритет обращений в тех. поддержку</li>
                    <li>Пополнение баланса на 100 <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="BuyV2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Покупка статус на сайте - VIP2</h4>
            </div>
            <div class="modal-body">
                <h3>В пакет входит</h3>
                <ul>
                    <li>Множитель лайков х2</li>
                    <li>Ваши задания выводятся первые в списке</li>
                    <li>Вы получаете специальную рамку для отображения ваших заданий</li>
                    <li>Высокий приоритет обращений в тех. поддержку</li>
                    <li>Пополнение баланса на 200 <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Buy100" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Пополнение баланса на сайте</h4>
            </div>
            <div class="modal-body">
                <h3>В пакет входит</h3>
                <ul>
                    <li>Пополнение баланса на 100 <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Buy200" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Пополнение баланса на сайте</h4>
            </div>
            <div class="modal-body">
                <h3>В пакет входит</h3>
                <ul>
                    <li>Пополнение баланса на 200 <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Buy300" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Пополнение баланса на сайте</h4>
            </div>
            <div class="modal-body">
                <h3>В пакет входит</h3>
                <ul>
                    <li>Пополнение баланса на 300 <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Buy500" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Пополнение баланса на сайте</h4>
            </div>
            <div class="modal-body">
                <h3>В пакет входит</h3>
                <ul>
                    <li>Пополнение баланса на 500 <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Buy1000" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Пополнение баланса на сайте</h4>
            </div>
            <div class="modal-body">
                <h3>В пакет входит</h3>
                <ul>
                    <li>Пополнение баланса на 1000 <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Buy2000" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Пополнение баланса на сайте</h4>
            </div>
            <div class="modal-body">
                <h3>В пакет входит</h3>
                <ul>
                    <li>Пополнение баланса на 2000 <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Buy3000" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Пополнение баланса на сайте</h4>
            </div>
            <div class="modal-body">
                <h3>В пакет входит</h3>
                <ul>
                    <li>Пополнение баланса на 3000 <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Buy5000" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Пополнение баланса на сайте</h4>
            </div>
            <div class="modal-body">
                <h3>В пакет входит</h3>
                <ul>
                    <li>Пополнение баланса на 5000 <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Buy10000" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Пополнение баланса на сайте</h4>
            </div>
            <div class="modal-body">
                <h3>В пакет входит</h3>
                <ul>
                    <li>Пополнение баланса на 10000 <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Buy50000" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Пополнение баланса на сайте</h4>
            </div>
            <div class="modal-body">
                <h3>В пакет входит</h3>
                <ul>
                    <li>Пополнение баланса на 50000 <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Buy100000" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Пополнение баланса на сайте</h4>
            </div>
            <div class="modal-body">
                <h3>В пакет входит</h3>
                <ul>
                    <li>Пополнение баланса на 100000 <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить</button>
            </div>
        </div>
    </div>
</div>
@stop