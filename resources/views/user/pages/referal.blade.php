@extends('user.index')

@section('content')
<section id="main-content" class="reloading">
    <section class="wrapper site-min-height" id="wrapper">
        <div class="container-fluid">
            <div class="row mt">
                <div class="col-md-8 col-sm-offset-2 refer-link">
                    <label class="col-sm-4 col-sm-offset-1 control-label  text-c">Ваша реферальная ссылка</label>
                    <div class="col-sm-5">
                        <input class="form-control" id="ref-link" type="text" value="http://refer.com/fe8Uj2" placeholder="http://refer.com/fe8Uj2" disabled>
                    </div>
                    <div class="col-sm-1">
                        <button type="button" class="btn btn-theme05" id="btn-copy-ref-link"><i class="whhg-link"></i> Копировать</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt">
                    <div class="content-panel work-center">
                        <table class="table table-hover t-block">
                            <h4><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i> Ваши рефералы</h4>
                            <hr>
                            <thead >
                            <tr>
                                <th>#</th>
                                <th>Пользователь</th>
                                <th>Дата регистрации</th>
                                <th>Вам принёс</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="">Mark Twain</a></td>
                                <td>28.08.2016</td>
                                <td class="prise ">1390 <i class="whhg-squareheart"></i></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="">Николай Петренко</a></td>
                                <td>26.09.2016</td>
                                <td class="prise ">954 <i class="whhg-squareheart"></i></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="">Андрей Новаковский</a></td>
                                <td>27.09.2016</td>
                                <td class="prise ">402 <i class="whhg-squareheart"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div><! --/content-panel -->
                </div><!-- /col-md-12 -->
            </div>
        </div>
    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
@stop