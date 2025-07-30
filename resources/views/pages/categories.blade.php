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
                    <a itemprop="item" href="/service"><span itemprop="name">Наши услуги</span></a>
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
            <meta itemprop="articleSection" content="{{ $page->h1 }}">
            <meta itemprop="image" content="https://arteli-stroy.ru/{{ $page->image }}">

            <h1 class="title__left article__title" itemprop="headline">{{ $page->h1 }}</h1>

            <div class="services">
                @foreach ($all as $service)
                    @php
                        [
                            'slug' => $slug,
                            'image_preview' => $image_preview,
                            'short_title' => $short_title,
                            'created_at' => $created_at,
                            'updated_at' => $updated_at,
                            'views' => $views,
                            'preview_text' => $preview_text,
                            'is_published' => $is_published,
                            'new_design' => $new_design
                        ] = $service;
                    @endphp
                    @if ($new_design)
                        @php
                            $new_service = $new_services->firstWhere('slug', $slug);
                        @endphp

                        @if ($new_service && $new_service->is_published)
                            <x-service-card 
                                :url="$slug"
                                :thumbnail="$image_preview"
                                :title="$short_title"
                                :created-at="$created_at"
                                :updated-at="$updated_at"
                                :views="$views"
                                :preview-text="$preview_text"
                            />
                        @endif
                    @else
                        @if ($is_published)
                            <x-service-card
                                :url="$slug"
                                :thumbnail="$image_preview"
                                :title="$short_title"
                                :created-at="$created_at"
                                :updated-at="$updated_at"
                                :views="$views"
                                :preview-text="$preview_text"
                            />
                        @endif
                    @endif
                @endforeach
            </div>

            <div class="servicePage-block__text d-block">

            </div>

        </div><!-- /.-->

    </div>
</x-layout>
