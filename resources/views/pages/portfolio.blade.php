<x-layout>
    <x-slot:meta>
        <title>{{ $page->title }}</title>
        <meta name="description" content="{{ $page->description }}">

        <meta property="og:site_name" content="Артель и С">
        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://arteli-stroy.ru/{{ $page->link }}">
        <meta property="og:image" content="https://arteli-stroy.ru/{{ $page->image }}">
        <meta property="og:image:type" content="image/webp">

        @if (!$page->indexing)
            <meta name="robots" content="noindex,follow">
        @endif

        <x-plagins />
    </x-slot:meta>

    <div class="portfolio-container">

        <ul class="navigation" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <meta itemprop="position" content="0">
                <a itemprop="item" href="/"><span itemprop="name">Главная</span></a>
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <meta itemprop="position" content="1">
                <span itemprop="name">{{ $page->h1 }}</span>
                <div itemprop="item" itemscope="" itemtype="https://schema.org/Thing">
                    <link itemprop="url" href="/{{ $page->link }}>">
                </div>
            </li>
        </ul>

        <div itemprop="inLanguage" itemscope="" itemtype="https://schema.org/Language">
            <meta itemprop="name" content="Russian">
            <meta itemprop="alternateName" content="ru">
        </div>

        <meta itemprop="name" content="{{ $page->title }}">
        <link itemprop="url" href="https://arteli-stroy.ru/{{ $page->link }}">
        <meta itemprop="articleSection" content="{{ $page->h1 }}">
        <meta itemprop="image" content="https://arteli-stroy.ru/{{ $page->image }}">

        <main>
            <section class="portfolio-main">

                <h1 class="portfolio-main__title" itemprop="headline">{{ $page->h1 }}</h1>

                <div class="portfolio-main__filters">
                    <button class="portfolio-main__filter portfolio-main__filter_active" data-value="all">Все
                        работы</button>
                    <button class="portfolio-main__filter" data-value="Наши работы">Наши работы</button>
                    <button class="portfolio-main__filter" data-value="Дизайн проекты">Дизайн проекты</button>
                    <button class="portfolio-main__filter" data-value="Реставрация">Реставрация</button>
                    <button class="portfolio-main__filter" data-value="new">Новое</button>
                </div>
                <ul class="portfolio-main__list">
                    @foreach ($portfolios as $portfolio)
                        @php
                            $pubDate = strtotime($portfolio['created_at']);
                            $lastMonth = now()->subMonth()->timestamp;
                            $new = $pubDate >= $lastMonth;
                        @endphp

                        <li class="portfolio-main__item" data-type="{{ $portfolio->category->title }}"
                            {{ $new ? 'data-new' : '' }}>
                            <a class="done__item" href="/{{ $portfolio->link }}">
                                <div class="done__thumbnail">
                                    <img src="/{{ $portfolio->thumbnail }}" alt="{{ $portfolio->title }}">
                                </div>
                                <div class="done__info">
                                    <div class="done__properties">
                                        @if ($new)
                                            <div class="done__property done__property_new">Новое</div>
                                        @endif
                                        <div class="done__property">{{ $portfolio->category->title }}</div>
                                    </div>
                                    <div class="done__item-title">{{ $portfolio->short_title }}</div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="portfolio-main__descr">Весь спектр строительных и отделочных работ. Демонтаж, вывоз мусора,
                    доставка
                    материалов на объект. Реальные сроки и гарантия качества. Получите бесплатную консультацию <a
                        class="link" href="tel:+74952589397" rel="nofollow">+7 (495) 258-93-97</a></div>

            </section>

        </main>

    </div>
</x-layout>
