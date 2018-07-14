<div class="wrapper">
    <div class="grid-container">
    <div class="brand-logo"><img src="/assets/img/logo.png" alt=""></div>
        <div class="social">
            <ul class="socialIcons">
                <li><a href="#" class="facebook">Facebook</a></li>
                <li><a href="#" class="twitter">twitter</a></li>
                <li><a href="#" class="vk">vk</a></li>
                <li><a href="#" class="googlePlus">google</a></li>
            </ul>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="{{ url('/') }}">Главная</a></li>
                <li><a href="#features-list">Услуги</a></li>
                <li><a href="#guarantees">Гарантии</a></li>
                <li><a href="#product">Стоимость</a></li>
                <li><a href="#team">Наша команда</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>
        </div>
        <div class="login">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Домашняя</a>
                @else
                    <a href="{{ route('login') }}">Вход</a>
                @endauth
            </div>
        @endif
    </div>
    </div>
</div>
