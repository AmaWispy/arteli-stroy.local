<x-layout>
    <x-slot:meta>
        <title>{{ $page->title }}</title>
        <meta name="description" content="{{ $page->description }}">

        <meta property="og:site_name" content="Артель и С">
        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://arteli-stroy.ru/{{ $page->link }}">
        <meta property="og:image" content="https://arteli-stroy.ru/{{ $page->image }}">
        <meta property="og:image:type" content="image/webp">

        @if (!$page->indexing)
            <meta name="robots" content="noindex,follow">
        @endif

        <x-plagins />
    </x-slot:meta>

    <main>

        <div class="container">

            <section class="section">

                <x-sidebar />

                <div class="content-900">

                    <ul class="navigation" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <meta itemprop="position" content="0">
                            <a itemprop="item" href="/"><span itemprop="name">Главная</span></a>
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <meta itemprop="position" content="1">
                            <span itemprop="name">{{ $page->h1 }}</span>
                            <div itemprop="item" itemscope="" itemtype="https://schema.org/Thing">
                                <link itemprop="url" href="/{{ $page->link }}">
                            </div>
                        </li>
                    </ul>

                    <div itemprop="inLanguage" itemscope="" itemtype="https://schema.org/Language">
                        <meta itemprop="name" content="Russian">
                        <meta itemprop="alternateName" content="ru">
                    </div>

                    <meta itemprop="name" content="{{ $page->title }}">
                    <link itemprop="url" href="https://arteli-stroy.ru/{{ $page->link }}">
                    <meta itemprop="image" content="https://arteli-stroy.ru/{{ $page->image }}">

                    <article class="article" itemprop="articleBody">
                        <h1 class="article__title" itemprop="headline">{{ $page->h1 }}</h1>
                        <div class="article__block">
                            <div class="bold">
                                @php
                                    $months = [
                                        '01' => 'января',
                                        '02' => 'февраля',
                                        '03' => 'марта',
                                        '04' => 'апреля',
                                        '05' => 'мая',
                                        '06' => 'июня',
                                        '07' => 'июля',
                                        '08' => 'августа',
                                        '09' => 'сентября',
                                        '10' => 'октября',
                                        '11' => 'ноября',
                                        '12' => 'декабря',
                                    ];

                                    $currentDay = date('d');
                                    $currentMonth = date('m');
                                    $currentYear = date('Y');
                                    $from = 15;
                                    $to = date('t');

                                    if ((int) $currentDay < 15) {
                                        $from = 1;
                                        $to = 15;
                                    }
                                @endphp
                                <p>Акции с {{ $from }} {{ $months[$currentMonth] }} {{ $currentYear }} года
                                    по {{ $to }} {{ $months[$currentMonth] }} {{ $currentYear }} года</p>
                                <ul>
                                    <li>
                                        <p><span style="font-size:22px;">Проектирование - в подарок!</span> <br> При
                                            заказе углубленной реконструкции, внешней и внутренней отделки, а также
                                            коммуникаций для объекта, проект стоимостью от 300 000 р. сделаем в подарок.
                                        </p>
                                    </li>
                                    <li>
                                        <p><span style="font-size:22px;">Скидка 10%</span> на реконструкцию и достройку
                                            загородного дома до теплового контура.</p>
                                    </li>
                                    <li>
                                        <p><span style="font-size:22px;">Скидка 15%</span> на материалы чистового
                                            покрытия кровли при заказе углубленной реконструкции кровли.</p>
                                    </li>
                                </ul>

                                <p>Подробности акции уточняйте по телефону <a class="link" rel="nofollow"
                                        href="tel:+74952589397">+7
                                        (495) 258-93-97</a> </p>
                            </div>

                            <!-- check__out -->
                            <div class="check__out">
                                <h4>Также можете ознакомиться с нашим спецпредложением и другими страницами</h4>
                                <ul>

                                    <li>
                                        <a href="/special-offers">
                                            <span class="check__out-text">Спецпредложение</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/service/reconstruction/dostrojka-domov">
                                            <span class="check__out-text">Реконструкция дома</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/service/reconstruction/reconstruction-calculator">
                                            <span class="check__out-text">Калькулятор расчета стоимости
                                                реконструкции</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/service/reconstruction/snos-rekonstrukciya-domov">
                                            <span class="check__out-text">Реконструкция или снос</span>
                                        </a>
                                    </li>

                                </ul>
                            </div><!-- end check__out -->

                            <x-top-bar />
                            <!-- TOP BAR -->

                            <x-modal-calc />
                            <!-- /.modal-calc -->

                            <x-stopgap />
                            <!-- бесплатная консультация -->

                        </div><!-- end article__block -->

                    </article>
                </div>
                <!-- /.stock -->

            </section>

        </div> <!-- .container -->

    </main>
</x-layout>
