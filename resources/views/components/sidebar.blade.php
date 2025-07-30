<!--noindex-->
<!-- left sidebar -->
<aside class="sidebar">
    <div class="sidebar-block">

        <!-- new-year-tree -->
        @php
            $month = date("n");
        @endphp

        @if ($month > 11 || $month < 3)
            <div class="new-year-tree" style="display: block;">
                <img src="/img/interface/rozhdestvenskaya-elka.gif" alt="Новогодняя елка" style="display: block; margin: 0 auto; margin-bottom: 40px">
            </div>
        @endif
        <!-- end new-year-tree -->

        

        <!-- <div class="stock mb-50">
            <h2 style="text-align: center;">У нас новые акции!</h2>

            <x-timer />

            <a href="/stock" class=" t-center button w-100 text-dark justify-content-center mt-20">ознакомиться с
                акцией</a>
        </div> -->

        <div class="sidebar__vacancy">
            <x-vacancy/>
        </div>

        <hr>

        <!-- <a href="/stock"><img src="/img/events/black-friday.webp" alt="черная пятница" class="sidebar-slider__bg"></a>
      <style>
        .sidebar-slider__bg {
          height: auto;
        }
        .sidebar-slider__bg:hover{
          filter:brightness(1);
        }
      </style> -->


        <!-- Облако -->
        <div id="html5_cumulus-2" class="widget html5_cumulus">
            <div id="html5-cumulus-zzrsby">
                <canvas height="289" id="canvas-zzrsby">
                    <p>Ваш браузер не поддерживает тег HTML5 CANVAS.</p>
                </canvas>
            </div>
        </div>

        <div style="display: none" id="tagcloud-zzrsby">
            <ul class="wp-tag-cloud" role="list">

                @foreach ($categories as $category)
                    <li>
                        <a rel="nofollow" href="/{{ $category->link }}"
                            class="tag-cloud-link tag-link-4 tag-link-position-1">{{ $category->title }}</a>
                    </li>
                @endforeach

            </ul>
        </div>
        <!-- Облако -->

        <hr>

        <div class="popular-articles">
            <h2 class="popular-articles__title t-center">Популярные статьи</h2>
            <div class="popular-articles__block" style="flex-direction:column;">

                @foreach ($topThreeArticles as $article)
                    <a class="popular-articles__item mb-30" href="/{{ $article->link }}">

                        <div class="popular-articles__img mb-20">
                            <img src="/{{ $article->img_big }}" alt="img">
                        </div>

                        <div class="popular-articles__subtitle bold">{{ $article->h1 }}</div>

                        <ul class="popular-statuses text-dark">
                            <li>&#128197; {{ mb_substr(strip_tags($article->created_at), 0, 10, 'utf-8') }}</li>
                            <li>🔄 {{ mb_substr(strip_tags($article->updated_at), 0, 10, 'utf-8') }}</li>
                            <li>&#128065; {{ $article->views }}</li>
                        </ul>

                        <div class="popular-articles__text">
                            {{ mb_substr(strip_tags($article->text), 0, 100, 'utf-8') }}<span> ...</span>
                        </div>

                    </a>
                @endforeach

            </div>
        </div>

    </div>

</aside>
<!--/noindex-->
