{{--<div class="col-md-12 text-st">--}}
    {{--<label class="name">123</label>--}}
    {{--<input type="text" class="form-control name" />--}}
{{--</div>--}}
<div class="col-sm-12  text-st">
    <form class="form-horizontal form-pricing " role="form">
        <div class="col-sm-10 col-sm-offset-1">
            <label class="col-sm-4 control-label text-c">Ссылка на Опрос:</label>
            <div class="col-sm-6 col-sm-offset-1">
                <input type="url" class="form-control text-center" title="Ссылка на контент" placeholder="Введите ссылку на опрос">
            </div>
        </div>
        @include('user.forms.addFormGlobalInfo')
    </form>
</div>