<x-layout>
    <x-slot:meta>
        <link rel="canonical" href="https://arteli-stroy.ru/special-offers">

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
                            <p class="bold">Наша компания предлагает Вам специальное предложение на строительство
                                двухэтажного дома под ключ из газосиликатных блоков, площадью 117 м², с внутренней и
                                внешней отделкой, а также с внутренними инженерными коммуникациями. Стоимость – 9 350
                                000 руб. Спецпредложение действует до <span id="special-offer"></span> г.</p>

                            <!-- check__out -->
                            <div class="check__out">
                                <h4>Также можете ознакомиться с нашими акциями и другими страницами</h4>
                                <ul>

                                    <li>
                                        <a href="/stock" rel="nofollow">
                                            <span class="check__out-text">Акции</span>
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
                <!-- /.specialOffers -->

            </section>

        </div> <!-- .container -->

    </main>
</x-layout>
