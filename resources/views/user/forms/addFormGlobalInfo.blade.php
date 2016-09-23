<div class="col-sm-10 col-sm-offset-1 mt">
    <label class="col-sm-4 control-label text-c">Название:</label>
    <div class="col-sm-6 col-sm-offset-1">
        <input type="text" class="form-control text-center" title="Данное название будет отображаться в списке" placeholder="Введите название задания">
    </div>
</div>
<!--<div class="col-sm-10 mt">-->
<!--    <label class="col-sm-8 control-label text-c">Ваш баланс:</label>-->
<!--    <div class="col-sm-4">-->
<!--        <p class="form-control-static text-warning text-center balans-text" title="Ваш баланс">213 <i class="fa fa-heart"></i></p>-->
<!--    </div>-->
<!--    <br/>-->
<!--    <hr/>-->
<!--</div>-->
<div class="col-sm-10 col-sm-offset-1 mt">
    <label class="col-sm-2 control-label text-c">Цена:</label>
    <div class="col-sm-8  col-sm-offset-1">
        <div class="price-slider my-mt">
            <div class="col-sm-12">
                <div id="slider"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-10 col-sm-offset-1 mt">
    <label class="col-sm-2 control-label text-c">Количество:</label>
    <div class="col-sm-8  col-sm-offset-1">
        <div class="price-slider my-mt">
            <div class="col-sm-12">
                <div id="slider2"></div>
            </div>
        </div>
    </div>
</div>


<!--<div class="col-sm-10">-->
<!--    <label class="col-sm-8 control-label text-c">Задание для пользователей с хорошей репутацией-->
<!--        <br/> (х3 стоимость заказа)</label><br/>-->
<!--    <div class="col-sm-4 text-center">-->
<!--        <input type="checkbox" id="verUser" checked="" title="Фильтр от ботов" data-toggle="switch" />-->
<!--    </div>-->
<!--    <hr/>-->
<!--</div>-->

<br/>
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="form-group">
            <label for="amount" class="col-sm-4 control-label"> Цена: </label>
            <span class="help-text">за 1</span>
            <div class="col-sm-8 text-center">
                <input type="hidden" id="amount" class="form-control">
                <p class="price lead" id="amount-label"></p>
                <span class="price"><img src="/user/assets/img/ico/heart-black-shape-for-valentines.png" height="16" width="16" alt=""/></span>
            </div>
        </div>
    </div>
    <div class="col-sm-10 col-sm-offset-1">
        <div class="form-group">
            <label for="duration" class="col-sm-4 control-label">Количество</label>
            <span class="help-text"></span>
            <div class="col-sm-8 text-center">
                <input type="hidden" id="duration" class="form-control">
                <p class="price lead" id="duration-label"></p>
                <span class="price"><img src="/user/assets/img/ico/icon.png" height="16" width="16" alt=""/></span>
            </div>
        </div>
    </div>
<!--    <div class="col-sm-10 col-sm-offset-1">-->
<!--        <div class="form-group">-->
<!--            <label for="duration" class="col-sm-6 control-label">Duration: </label>-->
<!--            <span class="help-text">Choose your commitment</span>-->
<!--            <div class="col-sm-6">-->
<!--                <input type="hidden" id="duration" class="form-control">-->
<!--                <p class="price lead" id="duration-label"></p>-->
<!--                <span class="price">days</span>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <div class="col-sm-10 col-sm-offset-1">
        <div class="form-group total">
            <label for="total" class="col-sm-4 control-label"><strong>В сумме: </strong></label>
            <span class="help-text">спишется со счёта</span>
            <div class="col-sm-8 text-center">
                <input type="hidden" id="total" class="form-control">
                <p class="price lead" id="total-label"></p>
                <span class="price"><i class="fa fa-heart"></i></span>
            </div>
        </div>
    </div>
    <div class="col-sm-8 col-sm-offset-2">
        <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Добавить задание <span class="glyphicon glyphicon-chevron-right pull-right" style="padding-right: 10px;"></span></button>
            </div>
        </div>
    </div>




</div>
<!--<div class="col-sm-10 mt">-->
<!--    <label class="col-sm-8 control-label text-c">Стоимость задания</label><br/>-->
<!--    <div class="col-sm-10">-->
<!--        <input class="form-control" id="finalPrice" type="text" placeholder="Disabled input here..." >-->
<!--    </div>-->
<!--</div>-->