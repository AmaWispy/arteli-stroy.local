@props(['tiles', 'oldTiles'])

<section class="service-tiles">
    <div class="service-page__container">
        @if ($oldTiles)
            <h3 class="service-page__subtitle service-tiles__title">Другие услуги</h3>
            <div class="service-tiles__wrapper">
                @foreach ($oldTiles as $tile)
                    @php
                        $exploded_tile = explode('::', $tile);
                        if (!isset($exploded_tile[0]) || !isset($exploded_tile[1])) {
                            continue;
                        }
                    @endphp

                    <a class="service-tiles__item" href="{{ $exploded_tile[0] }}">{{ $exploded_tile[1] }}</a>
                @endforeach

                <div class="service-tiles__showmore">
                    <button class="service-tiles__showmore-btn">Подробнее</button>
                </div>
            </div>
        @elseif($tiles)
            @php
                $title = $tiles['title'];
            @endphp
            <h3 class="service-page__subtitle service-tiles__title">{{ $title }}</h3>
            <div class="service-tiles__wrapper">

                @foreach ($tiles['items'] as $tile)
                    @php
                        if (!isset($tile['link']) || !isset($tile['title'])) {
                            continue;
                        }
                    @endphp

                    <a class="service-tiles__item" href="{{ $tile['link'] }}">{{ $tile['title'] }}</a>
                @endforeach

                <div class="service-tiles__showmore">
                    <button class="service-tiles__showmore-btn">Подробнее</button>
                </div>
            </div>
        @endif
    </div>
</section>
