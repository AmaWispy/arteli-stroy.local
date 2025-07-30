<footer class="footer">
    <div class="footer__container">
        <div class="footer__left">
            <div class="footer__logo">
                @if (\Request::getRequestUri() === '/')
                    <a href="javascript:void(0);" class="logo">
                        <img src="/img/interface/logo.svg" alt="логотип компании Артель и С">
                    </a>
                @else
                    <a href="/" class="logo">
                        <img src="/img/interface/logo.svg" alt="логотип компании Артель и С">
                    </a>
                @endif
            </div>

            <ul class="footer__menu">
                <li class="footer__menu-item">
                    <a href="{{ route('about') }}" class="footer__menu-link">О компании</a>
                </li>
                <li class="footer__menu-item">
                    <a href="{{ route('service') }}" class="footer__menu-link">Услуги</a>
                </li>
                <li class="footer__menu-item">
                    <a href="{{ route('price') }}" class="footer__menu-link">Цены</a>
                </li>
                <li class="footer__menu-item">
                    <a href="{{ route('portfolio') }}" class="footer__menu-link">Портфолио</a>
                </li>
                <li class="footer__menu-item">
                    <a href="{{ route('special-offers') }}" class="footer__menu-link">Акции</a>
                </li>
                <li class="footer__menu-item">
                    <a href="{{ route('all-feedback') }}" class="footer__menu-link">Отзывы</a>
                </li>
                <li class="footer__menu-item">
                    <a href="{{ route('articles') }}" class="footer__menu-link">Статьи</a>
                </li>
                <li class="footer__menu-item">
                    <a href="{{ route('contacts') }}" class="footer__menu-link">Контакты</a>
                </li>
            </ul>
        </div>

        <div class="footer__center">
            <ul class="footer__menu footer__menu_capitalize">
                @foreach ($categories as $category)
                    <li class="footer__menu-item">
                        <a href="/{{ $category->link }}" class="footer__menu-link">{{ $category->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="footer__right">
            <div class="footer__socials">
                <div class="footer__socials-links">
                    <a class="socials socials__footer" href="https://www.youtube.com/@arteli-stroy" target="_blank"
                        rel="nofollow"><img src="/img/interface/youtube.svg" alt="youtube icon" title="telegram"></a>
                    <a class="socials socials__footer" href="https://t.me/artelistroy" target="_blank"
                        rel="nofollow"><img src="/img/interface/telegram.svg" alt="telegram icon" title="telegram"></a>
                    <a class="socials socials__footer" href="https://wa.me/79162527728" rel="nofollow" target="_blank">
                        <img src="/img/interface/whatsapp.svg" alt="whatsApp" title="WhatsApp">
                    </a>
                    <span class="socials socials__footer">
                        <img src="/img/interface/e-mail.svg" alt="Email" title="E-mail" class="mail__open">
                    </span>
                </div>
                <button class="button footer-block__button modal-application__open">Заказать звонок</button>
            </div>

            <div class="footer__info">
                <div class="footer__info-part">
                    <div class="footer__info-title">Адрес:</div>
                    <div class="footer__info-title">Телефон:</div>
                    <div class="footer__info-title">Email:</div>
                    <div class="footer__info-title">График:</div>
                    <div class="footer__info-title">Регион:</div>
                </div>
                <div class="footer__info-part">
                    <div>г. Красногорск, ул. Ленина, <br> дом 22а</div>
                    <a class="footer__info-link" href="tel:+74952589397">+7 (495) 258-93-97</a>
                    <a class="footer__info-link" href="mailto:info@arteli-stroy.ru">info@arteli-stroy.ru</a>
                    <div>
                        ПН-ПТ с 10:00 до 19:00
                        <br>
                        СБ с 10:00 до 15:00
                        <br>
                        ВС выходной
                    </div>
                    <button class="footer__regions">
                        Москва
                        <div class="footer__regions-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.1314 16.6339C10.6432 17.122 9.85042 17.122 9.36223 16.6339L1.8637 9.13532C1.37551 8.64714 1.37551 7.85433 1.8637 7.36614C2.35188 6.87795 3.1447 6.87795 3.63288 7.36614L10.2488 13.982L16.8647 7.37004C17.3529 6.88186 18.1457 6.88186 18.6339 7.37004C19.122 7.85823 19.122 8.65104 18.6339 9.13923L11.1353 16.6378L11.1314 16.6339Z"
                                    fill="#FA8300" />
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__copyright">Все права защищены. Вся информация на сайте носит чисто информационный характер и не
        является публичной офертой</div>

    <x-modal-city />
</footer>
