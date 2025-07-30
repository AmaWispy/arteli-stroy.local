<!DOCTYPE html>
<html lang="ru">
<x-head>
    <meta name="robots" content="noindex,follow">

    <meta name="description" content="Страница неправильных переходов внутри сайта - Артель и С">

    <meta property="og:site_name" content="Артель и С">
    <meta property="og:title" content="Страница ошибки 404 - Артель и С">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://arteli-stroy.ru/404">
    <meta property="og:image" content="https://arteli-stroy.ru/img/header/slide-2.webp">
    <meta property="og:image:type" content="image/webp">

    <title>Страница ошибки 404 - Артель и С</title>
</x-head>

<body itemscope="" itemtype="https://schema.org/WebPage">
    <div class="header">

        <div class="header-slider">
            <div class="header-slider__item">
                <img src="/img/header/slide-2.webp" alt="slide" class="header-slider__bg">
                <div class="wrapper wrapper-404">
                    <div class="wrapper__text">
                        <p>Такое бывает, вам нужно вернуться и постараться указать страницу правильно</p>
                        <h1 class="wrapper__text-title"><span class="error-404" itemprop="headline">404</span> Вы попали
                            на несуществующую страницу</h1>
                    </div>
                    <div class="wrapper__button">
                        <button class="button" onClick="document.location='{{ route('home') }}'">Вернуться на
                            главную</button>
                    </div>
                </div>
            </div>

        </div> <!-- .header-slider -->

    </div>
</body>

</html>
