<section class="wrapper">
    <div class="grid-container">
        <div class="brand-logo"><img src="/assets/img/logo.png" alt="">
        </div>
        <div class="social">
            <ul>
                <li><a href="#facebook">facebook</a></li>
                <li><a href="#vk">vk</a></li>
                <li><a href="#ok">ok</a></li>
            </ul>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="#landing-page">Главная</a></li>
                <li><a href="#features-list">Услуги</a></li>
                <li><a href="#guarantees">Гарантии</a></li>
                <li><a href="#product">Стоимость</a></li>
                <li><a href="#team">Наша команда</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>
        </div>
        <div class="Login">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Домашняя</a>
                @else
                    <a href="{{ route('login') }}">Вход</a>
                    <a href="{{ route('register') }}">Регистрация</a>
                @endauth
            </div>
        @endif
    </div>
</div>
</section>