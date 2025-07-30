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

    <div class="container">
        <div class="content-fluid">
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
            <meta itemprop="articleSection" content="{{ $page->h1 }}">
            <meta itemprop="image" content="https://arteli-stroy.ru/{{ $page->image }}">

            <h1 class="title__left article__title" itemprop="headline">{{ $page->h1 }}</h1>

            <div class="servicePage-block">

                @foreach ($categories as $category)
                    <a class="article-previews" href="{{ $category->link }}">
                        <div class="servicePage-block__item">
                            <img src="{{ $category->thumbnail }}" alt="project" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">{{ $category->h1 }}</span>
                        </div>
                    </a>
                @endforeach

                <a class="article-previews" href="/service/remont-ofisov-pod-klyuch">
                    <div class="servicePage-block__item">
                        <img src="/img/service-page/office-repair-223x185.webp" alt="project"
                            class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Ремонт офисов и помещений</span>
                    </div>
                </a>

                <div class="servicePage-block__text"></div>
            </div>

        </div><!-- /.-->

    </div><!-- /end container -->
</x-layout>
