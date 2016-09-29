<div class="row">
    <div class="col-sm-12 text-center">
        <label>
            Показывать моё задание <br/>
            <input type="radio" name="sex" id="optionsRadios1" value="option1" checked>
            Всем |
            <input type="radio" name="sex" id="optionsRadios2" value="option2">
            Парням |
            <input type="radio" name="sex" id="optionsRadios3" value="option3">
            Девушкам
        </label>
    </div>
</div>
<div class="row mt">
    <div class="col-sm-12 text-center">
        <div class="col-sm-4 col-sm-offset-4">
            <label>Возраст</label><br/>
            <label>От</label>
                <select name="ageMin" class="form-control">
                    <option value="0"></option>
                    @for ($i = 14; $i < 81; $i++)
                    <option value="{{ $i }}">от {{ $i }}</option>
                    @endfor
                </select>
            <br/>
            <label>До</label>
                <select name="ageMax" class="form-control">
                    <option value="0"></option>
                    @for ($i = 14; $i < 81; $i++)
                    <option value="{{ $i }}"> до {{ $i }}</option>
                    @endfor
                </select>
        </div>
    </div>
</div>
<div class="row mt">
    <div class="col-sm-6 col-sm-offset-3 text-center">
        <label>Cтрана</label>
        <select class="form-control">
            <option>Неважно</option>
            <option>Украина</option>
            <option>Россия</option>
            <option>Беларусь</option>
            <option>Казахстан</option>
            <option>Польша</option>
        </select>
    </div>
</div>
<div class="row mt">
    <div class="col-sm-6 col-sm-offset-3 text-center">
        <label>Возраст страницы</label>
        <select class="form-control">
            <option>Неважно</option>
            <option>Не менее одного месяца</option>
            <option>Не менее трёх месяцев</option>
            <option>Не менее шести месяцев</option>
            <option>Не менее одного года</option>
            <option>Не менее двух лет</option>
        </select>
    </div>
</div>
<div class="row mt">
    <div class="col-sm-6 col-sm-offset-3 text-center">
        <label>Количество друзей и подписчиков</label>
        <select class="form-control">
            <option>Неважно</option>
            <option>10+</option>
            <option>30+</option>
            <option>50+</option>
            <option>100+</option>
        </select>
    </div>
</div>
<div class="row mt">
    <div class="col-sm-12">

    </div>
</div>