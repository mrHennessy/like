@extends('user.index')

@section('content')
<section id="main-content" class="reloading">
    <section class="wrapper site-min-height" id="wrapper">
        <div class="container-fluid">
            <div class="alert alert-info mt col-sm-12"><b>Список рефералов</b> <br/><br/>
                <ul class="info-ref">
                    <li>На данной странице вы можете узнать вашу реферальную ссылку и посмотреть список людей которыйх вы пригласили в проект.</li>
                    <li>За каждого человека вы будуте получать бонусы на ваш аккаунт в виде пополнения баланса лайков.</li>
                    <li>Так же здесь находится информация о доле полученых лайков от каждого реферала</li>
                </ul>
            </div>
            <div class="row mt">
                <div class="col-md-12 refer-link">
                    <label class="col-sm-4 col-md-offset-1 col-sm-offset-0  control-label  text-c">Ваша реферальная ссылка</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="ref-link" type="text" value="http://refer.com/fe8Uj2" placeholder="http://refer.com/fe8Uj2" disabled>
                    </div>
                    <div class="col-sm-1">
                        <button type="button" class="btn btn-theme05" id="btn-copy-ref-link"><i class="whhg-link"></i> Копировать</button>
                    </div>
                </div>
            </div>

            <div class="row mt">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-4 mb">
                            <div class="darkblue-panel refer-panel pn">
                                <div class="darkblue-header">
                                    <h5>Mark Twain</h5>
                                </div>
                                <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                                <h5>Дата регистрации</h5>
                                <p>21.09.2016</p>
                                <footer>
                                    <div class="centered">
                                        <h5>+ 17,988<i class="fa fa-heart"></i></h5>
                                    </div>
                                </footer>
                            </div><! -- /darkblue panel -->
                        </div><!-- /col-md-4 -->

                        <div class="col-sm-4 mb">
                            <div class="darkblue-panel refer-panel pn">
                                <div class="darkblue-header">
                                    <h5>Mark Twain</h5>
                                </div>
                                <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                                <h5>Дата регистрации</h5>
                                <p>21.09.2016</p>
                                <footer>
                                    <div class="centered">
                                        <h5>+ 17,988<i class="fa fa-heart"></i></h5>
                                    </div>
                                </footer>
                            </div><! -- /darkblue panel -->
                        </div><!-- /col-md-4 -->

                        <div class="col-sm-4 mb">
                            <div class="darkblue-panel refer-panel pn">
                                <div class="darkblue-header">
                                    <h5>Mark Twain</h5>
                                </div>
                                <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                                <h5>Дата регистрации</h5>
                                <p>21.09.2016</p>
                                <footer>
                                    <div class="centered">
                                        <h5>+ 17,988<i class="fa fa-heart"></i></h5>
                                    </div>
                                </footer>
                            </div><! -- /darkblue panel -->
                        </div><!-- /col-md-4 -->

                        <div class="col-sm-4 mb">
                            <div class="darkblue-panel refer-panel pn">
                                <div class="darkblue-header">
                                    <h5>Mark Twain</h5>
                                </div>
                                <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                                <h5>Дата регистрации</h5>
                                <p>21.09.2016</p>
                                <footer>
                                    <div class="centered">
                                        <h5>+ 17,988<i class="fa fa-heart"></i></h5>
                                    </div>
                                </footer>
                            </div><! -- /darkblue panel -->
                        </div><!-- /col-md-4 -->

                        <div class="col-sm-4 mb">
                            <div class="darkblue-panel refer-panel pn">
                                <div class="darkblue-header">
                                    <h5>Mark Twain</h5>
                                </div>
                                <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                                <h5>Дата регистрации</h5>
                                <p>21.09.2016</p>
                                <footer>
                                    <div class="centered">
                                        <h5>+ 17,988<i class="fa fa-heart"></i></h5>
                                    </div>
                                </footer>
                            </div><! -- /darkblue panel -->
                        </div><!-- /col-md-4 -->

                        <div class="col-sm-4 mb">
                            <div class="darkblue-panel refer-panel pn">
                                <div class="darkblue-header">
                                    <h5>Mark Twain</h5>
                                </div>
                                <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                                <h5>Дата регистрации</h5>
                                <p>21.09.2016</p>
                                <footer>
                                    <div class="centered">
                                        <h5>+ 17,988<i class="fa fa-heart"></i></h5>
                                    </div>
                                </footer>
                            </div><! -- /darkblue panel -->
                        </div><!-- /col-md-4 -->
                    </div>



                </div>
            </div>

<!--            <div class="row">-->
<!--                <div class="col-md-12 mt">-->
<!--                    <div class="content-panel work-center">-->
<!--                        <table class="table table-hover t-block">-->
<!--                            <h4><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i> Ваши рефералы</h4>-->
<!--                            <hr>-->
<!--                            <thead >-->
<!--                            <tr>-->
<!--                                <th>#</th>-->
<!--                                <th>Пользователь</th>-->
<!--                                <th>Дата регистрации</th>-->
<!--                                <th>Вам принёс</th>-->
<!--                            </tr>-->
<!--                            </thead>-->
<!--                            <tbody>-->
<!--                            <tr>-->
<!--                                <td>1</td>-->
<!--                                <td><a href="">Mark Twain</a></td>-->
<!--                                <td>28.08.2016</td>-->
<!--                                <td class="prise ">1390 <i class="whhg-squareheart"></i></td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>2</td>-->
<!--                                <td><a href="">Николай Петренко</a></td>-->
<!--                                <td>26.09.2016</td>-->
<!--                                <td class="prise ">954 <i class="whhg-squareheart"></i></td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>3</td>-->
<!--                                <td><a href="">Андрей Новаковский</a></td>-->
<!--                                <td>27.09.2016</td>-->
<!--                                <td class="prise ">402 <i class="whhg-squareheart"></i></td>-->
<!--                            </tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div><! --/content-panel -->
<!--                </div><!-- /col-md-12 -->
<!--            </div>-->
        </div>
    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
@stop