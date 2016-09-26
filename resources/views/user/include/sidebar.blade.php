<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <h4 class="centered" > Ваш аккаунт </h4>
            <p class="centered"><a href="{{ route('PersonalBoard')}}"><img src="user/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered">Имя Фамилия</h5>
            <hr/>
            <h5 class="centered">Баланс: 88 <i class="fa fa-heart"></i></h5>
            <h5 class="centered"><a href="{{ route('StoreUser')}}"><button type="button" class="btn btn-theme04"><i class="fa fa-heart"></i> Купить лайки</button></h5></a>
            <hr/>

            <li class="nav-link">
                <a class="active" href="{{ route('PersonalBoard')}}">
                    <i class="icon-user"></i>
                    <span>Мой кабинет</span>
                </a>
            </li>

            <li class="mt"class="nav-link">
                <a href="{{ route('UserIndexPage')}}">
                    <i class="icon-globe"></i>
                    <span>Главная</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="icon-vkontakte"></i>
                    <span></i>Вконтакте</span>
                </a>
                <ul class="sub">
                    <li class="nav-link"><a  href="{{ route('SpendUser')}}">Включить накрутку</a></li>
                    <li class="nav-link"><a  href="{{ route('WorkUser')}}">Заработать лайки</a></li>
                </ul>
            </li>

            <li class="nav-link">
                <a href="{{ route('PartnerUser')}}">
                    <i class="icon-users"></i>
                    <span>Партнёрская программа</span>
                </a>
            </li>
            <li class="nav-link">
                <a href="{{ route('FeedbackUser')}}">
                    <i class="icon-reply"></i>
                    <span>Обратная связь</span>
                </a>
            </li>

            <li class="nav-link">
                <a href="{{ route('StoreUser')}}">
                    <i class="icon-shopping-bag"></i>
                    <span>Магазин</span>
                </a>
            </li>

            <li class="nav-link">
                <a href="{{ route('FreeUser')}}">
                    <i class="icon-diamond"></i>
                    <span>Халява</span>
                </a>
            </li>
            <li class="nav-link">
                <a href="{{ route('UserIndexPage')}}">
                    <i class="icon-diamond"></i>
                    <span>Халява</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>