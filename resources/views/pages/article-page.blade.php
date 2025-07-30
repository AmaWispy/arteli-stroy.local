<x-layout>
    <x-slot:meta>
        <title>{{ $page->title }}</title>
        <meta name="description" content="{{ $page->description }}">

        <meta property="og:site_name" content="Артель и С">
        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://arteli-stroy.ru/{{ $page->link }}">
        <meta property="og:image" content="https://arteli-stroy.ru/{{ $page->img_big }}">
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
                            <a itemprop="item" href="/articles"><span itemprop="name">Статьи</span></a>
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <meta itemprop="position" content="2">
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
                    <meta itemprop="articleSection" content="{{ $page->category->h1 }}">
                    <meta itemprop="image" content="https://arteli-stroy.ru/{{ $page->img_big }}">
                    <meta itemprop="datePublished"
                        content="{{ mb_substr(strip_tags($page->created_at), 0, 10, 'utf-8') }}">
                    <meta itemprop="dateModified"
                        content="{{ mb_substr(strip_tags($page->updated_at), 0, 10, 'utf-8') }}">

                    <article class="article">
                        <div class="article__block">

                            <h1 class="article__title" itemprop="headline">{{ $page->h1 }}</h1>

                            @if ($page->tiles)
                                <div class="article-tile">
                                    @php
                                        $tiles = explode('||', $page->tiles);
                                    @endphp

                                    @foreach ($tiles as $tile)
                                        @php
                                            $exploded_tile = explode('::', $tile);
                                        @endphp

                                        <a class='button-tile'
                                            href="{{ $exploded_tile[0] }}">{{ $exploded_tile[1] }}</a>
                                    @endforeach

                                </div>
                            @endif

                            <!-- start header-statuses -->
                            <ul class="header-statuses">
                                <li>&#128197; {{ mb_substr(strip_tags($page->created_at), 0, 10, 'utf-8') }}</li>
                                <li>🔄 {{ mb_substr(strip_tags($page->updated_at), 0, 10, 'utf-8') }}</li>
                                <li>&#128065; {{ $page->views }}</li>
                                <li>&#128221; <a rel="nofollow" itemprop="author"
                                        href="/authors/{{ $page->author ? $page->author->slug : "" }}">{{ $page->author->name }}</a></li>
                            </ul>
                            <!-- end header-statuses -->

                            <div itemprop="articleBody">

                                {!! $page->content !!}

                                <x-stopgap />
                                <!-- бесплатная консультация -->

                                <x-preview :categoryId="11" />
                                <!-- Рекомендуемые статьи -->

                                <x-top-bar />
                                <!-- TOP BAR -->

                                <x-modal-help />
                                <!-- /.modal-help -->
                            </div>

                        </div><!-- end article__block -->

                    </article>

                </div><!-- end content -->

            </section>

        </div>

    </main>
</x-layout>
