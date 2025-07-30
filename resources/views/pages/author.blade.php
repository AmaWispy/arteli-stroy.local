<x-layout>
  <x-slot:meta>
      <title>{{ $author->title }}</title>
      <meta name="description" content="{{ $author->description }}">

      <meta property="og:site_name" content="Артель и С">
      <meta property="og:title" content="{{ $author->title }}">
      <meta property="og:description" content="{{ $author->description }}">
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://arteli-stroy.ru/{{ $author->slug }}">
      <meta property="og:image" content="https://arteli-stroy.ru/{{ $author->image }}">
      <meta property="og:image:type" content="image/webp">

      @if (!$author->indexing)
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
                <a itemprop="item" href="/authors/"><span itemprop="name">Авторы</span></a>
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <meta itemprop="position" content="2">
                <span itemprop="name">{{ $author->name }}</span>
                <div itemprop="item" itemscope="" itemtype="https://schema.org/Thing">
                  <link itemprop="url" href="/authors/{{ $author->slug }}/">
                </div>
              </li>
          </ul>

          <div itemprop="inLanguage" itemscope="" itemtype="https://schema.org/Language">
              <meta itemprop="name" content="Russian">
              <meta itemprop="alternateName" content="ru">
          </div>

          <meta itemprop="name" content="{{ $author->title }}">
          <link itemprop="url" href="https://arteli-stroy.ru/authors/{{ $author->slug }}">
          <meta itemprop="articleSection" content="{{ $author->name }}">
          <meta itemprop="image" content="https://arteli-stroy.ru/{{ $author->image }}">

          <article class="article">
            <div class="article__block">

              <h1 class="article__title" itemprop="headline">{{ $author->name }}</h1>

              <img class="sib article__img m-auto" loading="lazy" width="900" height="500" src="/{{ $author->image }}" alt="{{ $author->name }}">

              {!! $author->content !!}

            </div><!-- end article__block -->

          </article>

      </div>
      </section>

      

  </div>

  </main>
</x-layout>
