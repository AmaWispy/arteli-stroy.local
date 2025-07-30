<!DOCTYPE html>
<html lang="ru">

<x-head>
    {{ $meta }}
</x-head>

<body itemscope="" itemtype="https://schema.org/WebPage">

    <x-header />
    <x-menu />

    <div itemprop="inLanguage" itemscope="" itemtype="https://schema.org/Language">
        <meta itemprop="name" content="Russian">
        <meta itemprop="alternateName" content="ru">
    </div>

    {{ $slot }}

    <x-modal-call />
    <!-- /.modal-call -->

    <x-modal-application />
    <!-- /.modal-application -->

    <x-modal-feedback />
    <!-- /.modal-feedback -->

    <x-modal-mail />
    <!-- /.modal-mail.php -->

    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <link itemprop="url" href="https://arteli-stroy.ru/">
        <div itemprop="logo image" itemscope itemtype="https://schema.org/ImageObject" style="display:none">
            <img itemprop="url contentUrl" src="https://arteli-stroy.ru/img/interface/logo.png" alt="logo">
            <meta itemprop="width" content="300">
            <meta itemprop="height" content="42">
        </div>
        <meta itemprop="name" content="Артель и С">
        <meta itemprop="description"
            content="Реконструкция, строительство, отделка, утепление, крыши, фундамент, электрика, отопление, водоснабжение и канализация вашего дома!">
        <meta itemprop="address" content="г. Красногорск, ул. Ленина, дом 22а">
        <meta itemprop="telephone" content="+7 (495) 258-93-97">
    </div>

    <!-- Snowflakes -->
    @php
    $month = date("n");
    @endphp

    @if ($month > 11 || $month
    < 3)
        <x-snowflakes />
    @endif
    <!-- end Snowflakes -->

    <x-footer />

    <div class="widgets">
        <a class="scroller animate__animated" id="scroller">
            <span class="scroller__arrow"></span>
        </a>

        <div class="message">
            <button class="message__button">
                <img src="/img/interface/message.svg" alt="задать вопрос">
            </button>
            <ul class="message__list">
                <li class="message__item mail__open"><img src="/img/interface/e-mail.svg" alt="e-mail"></li>
                <li class="message__item" data-external data-href="https://wa.me/79162527728" target="_blank"><img
                        src="/img/interface/whatsapp.svg" alt="whatsapp"></li>
                <li class="message__item" data-external data-href="https://t.me/artelistroy" target="_blank"><img
                        src="/img/interface/telegram.svg" alt="telegram"></li>
            </ul>
        </div>
    </div>

    <script src="https://www.google.com/recaptcha/api.js?render=6LehQDYqAAAAACGss2gNoIo7q9fw5p04pCdWCHuX"></script>

    <script src="/js/script.min.js?ver=1.6.0"></script>

</body>

</html>