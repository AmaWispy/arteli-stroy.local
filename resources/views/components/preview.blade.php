<div class="featured-articles">
    <h2 class="featured-articles__title t-center">Рекомендуемые статьи этой категории</h2>
    <div class="featured-articles__block">
        @foreach ($featured as $article)
            <div class="featured-articles__item">
                <div class="featured-articles__img">
                    <a class="link" href="/{{ $article->link }}">
                        <img src="/{{ $article->image }}" alt="{{ $article->h1 }}">
                    </a>
                </div>
                <div class="featured-articles__subtitle bold">{{ $article->h1 }}</div>
                <small class="featured-articles__cat"> Категория: <a
                        href="/{{ $article->category->link }}">{{ $article->category->title }}</a></small>

                <div class="featured-articles__text">
                    {{ mb_substr(strip_tags($article->text), 0, 100, 'utf-8') }}<span> ...</span>
                </div>
                <a class="link" href="/{{ $article->link }}" class="featured-articles__link">Подробнее</a>
            </div>
        @endforeach
    </div>
</div>
