<section class="featured">
    <div class="service-page__container">
        <div class="featured__header">
            <div class="service-page__subtitle">Рекомендуемые статьи</div>
        </div>
    </div>

    <div class="featured__container">
        <div class="featured__wrapper">
            <div class="featured__group">
                @foreach ($featured as $article)
                    <div class="featured__item">
                        <a class="featured__item-thumb" href="/{{ $article->link }}">
                            <img src="/{{ $article->image }}" alt="{{ $article->h1 }}">
                        </a>
                        <div class="featured__item-content">
                            <div class="featured__item-title">{{ $article->h1 }}</div>
                            <div>
                                <div class="featured__item-category">
                                    Категория: <a
                                        href="/{{ $article->category->link }}">{{ $article->category->title }}</a>
                                </div>
                                <div class="featured__item-text">
                                    {{ strip_tags($article->text) }}
                                    <div class="featured__showmore">
                                        <a href="/{{ $article->link }}" class="featured__showmore-link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
