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

    <div class="container">

        <div class="content-fluid">

            <ol class="navigation" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <meta itemprop="position" content="0">
                    <a itemprop="item" href="{{ route('home') }}"><span itemprop="name">Главная</span></a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <meta itemprop="position" content="1">
                    <a itemprop="item" href="{{ route('portfolio') }}"><span itemprop="name">Портфолио</span></a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <meta itemprop="position" content="2">
                    <span itemprop="name">{{ $page->h1 }}</span>
                    <div itemprop="item" itemscope="" itemtype="https://schema.org/Thing">
                        <link itemprop="url" href="/{{ $page->link }}">
                    </div>
                </li>
            </ol>

            <div itemprop="inLanguage" itemscope="" itemtype="https://schema.org/Language">
                <meta itemprop="name" content="Russian">
                <meta itemprop="alternateName" content="ru">
            </div>

            <meta itemprop="name" content="{{ $page->title }}">
            <link itemprop="url" href="https://arteli-stroy.ru/{{ $page->link }}">
            <meta itemprop="articleSection" content="Реконструкция">
            <meta itemprop="image" content="https://arteli-stroy.ru<?= $page['thumbnail'] ?>">
            <meta itemprop="datePublished" content="{{ mb_substr(strip_tags($page->created_at), 0, 10, 'utf-8') }}">
            <meta itemprop="dateModified" content="{{ mb_substr(strip_tags($page->updated_at), 0, 10, 'utf-8') }}">

            <article class="article">
                <div class="article__block">

                    <h1 class='article__title' itemprop='headline'>{{ $page->h1 }}</h1>

                    <div itemprop="articleBody">

                        {!! $page->content !!}

                        <x-top-bar />
                        <!-- TOP BAR -->

                        <x-modal-help />
                        <!-- /.modal-help -->


                    </div><!-- end article__block -->

            </article>

        </div><!-- end content -->

    </div>
</x-layout>
