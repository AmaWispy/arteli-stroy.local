<header class="header">
    <div class="header__top">
        <div class="header__top-container">
            <div class="header__logo">
                @if ($_SERVER['REQUEST_URI'] == '/')
                <a href="javascript:void(0);" class="logo">
                    <picture>
                        <source srcset="/img/interface/logo-mobile.svg" media="(max-width: 767px)">
                        <img src="/img/interface/logo.svg" alt="логотип компании Артель и С">
                    </picture>
                </a>
                @else
                <a href="/" class="logo">
                    <picture>
                        <source srcset="/img/interface/logo-mobile.svg" media="(max-width: 767px)">
                        <img src="/img/interface/logo.svg" alt="логотип компании Артель и С">
                    </picture>
                </a>
                @endif
            </div>
            <div class="rating header__rating">
                <iframe src="https://yandex.ru/sprav/widget/rating-badge/28289659213?type=rating" width="150" height="50" frameborder="0"></iframe>
            </div>

            <div class="header__contacts">
                <a href="mailto:info@arteli-stroy.ru" target="_blank" rel="nofollow">info@arteli-stroy.ru</a>
                <a href="tel:+74952589397" rel="nofollow">+7 (495) 258-93-97 </a>
            </div>

            <div class="header__socials">
                <a class="socials socials__header" href="https://www.youtube.com/@arteli-stroy" target="_blank">
                    <img src="/img/interface/youtube.svg" alt="youtube icon" title="youtube">
                </a>
                <a class="socials socials__header" href="https://t.me/artelistroy" target="_blank">
                    <img src="/img/interface/telegram.svg" alt="telegram icon" title="telegram">
                </a>
                <a class="socials socials__header" href="https://wa.me/79162527728" target="_blank">
                    <img src="/img/interface/whatsapp.svg" alt="whatsApp" title="WhatsApp">
                </a>
                <span class="socials socials__header">
                    <img src="/img/interface/e-mail.svg" alt="Email" title="E-mail" class="mail__open">
                </span>
            </div>

            <div class="header__feedback">
                <a href="tel:+74952589397" rel="nofollow">+7 (495) 258-93-97 </a>
                <button id="call-order-btn" class="button modal-open__call header-btn">Заказать звонок</button>
            </div>
        </div>
    </div>
</header>