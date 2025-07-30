<section class="done">
    <div class="container">
        <h2 class="done__title">Выполненные нами работы</h2>

        <div class="done__wrapper">

            <!-- Slider main container -->
            <div class="swiper done__slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->

                    @foreach ($portfolios as $portfolio)
                        <a class="swiper-slide done__item" href="/{{ $portfolio->link }}">
                            <div class="done__thumbnail">
                                <img src="{{ $portfolio->thumbnail }}" alt="{{ $portfolio->title }}">
                            </div>
                            <div class="done__info">
                                <div class="done__properties">
                                    @php
                                        $pubDate = strtotime($portfolio['created_at']);
                                        $lastMonth = now()->subMonth()->timestamp;
                                        $new = $pubDate >= $lastMonth;
                                    @endphp

                                    @if ($new)
                                        <div class="done__property done__property_new">Новое</div>
                                    @endif

                                    <div class="done__property">{{ $portfolio->category->title }}</div>
                                </div>
                                <div class="done__item-title">{{ $portfolio->title }}</div>
                            </div>
                        </a>
                    @endforeach

                </div>
                <!-- If we need pagination -->

            </div>

            <div class="swiper-pagination done__pagination"></div>

            <button class="done__slider-prev slider-prev">
                <img src="/img/interface/slider-chevron-left-black.svg" alt="Назад">
            </button>
            <button class="done__slider-next slider-next">
                <img src="/img/interface/slider-chevron-left-black.svg" alt="Вперед">
            </button>

        </div>

        <a class="button done__link" href="{{ route('portfolio') }}">Смотреть все работы</a>
    </div>
    <!-- /.container -->
</section>
