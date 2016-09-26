<div class="col-sm-12  text-st">
    <form class="form-horizontal form-pricing " role="form">
        <div class="col-sm-10 col-sm-offset-1">
            <label class="col-sm-4 control-label text-c">Ссылка на Встречу:</label>
            <div class="col-sm-6 col-sm-offset-1 mb">
                <input type="url" class="form-control text-center" title="Ссылка на контент" placeholder="Введите ссылку на встречу">
            </div>
            <label class="col-sm-4 control-label text-c">Нужный параметр:</label>
            <div class="col-sm-6 col-sm-offset-1">
                <label class="checkbox">
                    <input type="checkbox" name="optionsRadios" id="go-soc1" value="option1" checked>
                    Точно пойду
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="optionsRadios" id="go-soc2" value="option2">
                    Возможно пойду
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="optionsRadios" id="go-soc3" value="option2">
                Не смогу пойти
                </label>
            </div>
        </div>
        @include('user.forms.addFormGlobalInfo')
    </form>
</div>