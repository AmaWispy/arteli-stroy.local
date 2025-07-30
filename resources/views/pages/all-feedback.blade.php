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

    <main>

        <div class="wide-container">

            <div class="main-content">

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
                <meta itemprop="image" content="https://arteli-stroy.ru/{{ $page->image }}">

                <section class="reviews">
                    <h1 class="reviews__title" itemprop="headline">{{ $page->h1 }}</h1>

                    <h2 class="reviews__subtitle">Рекомендации от крупных брендов</h2>

                    <ul class="reviews__brands-list">
                        <li class="reviews__brands-items">
                            <div class="reviews__brands-title">АБРАУ-ДЮРСО</div>
                            <div class="reviews__brands-img"><img src="/img/reviews/abray.jpg" alt="АБРАУ-ДЮРСО"></div>
                        </li>
                        <li class="reviews__brands-items">
                            <div class="reviews__brands-title">Грин Филмс</div>
                            <div class="reviews__brands-img"><img src="/img/reviews/greenfilms.jpg" alt="Грин Филмс">
                            </div>
                        </li>
                    </ul>

                    <h2 class="reviews__subtitle reviews__subtitle_mb40">Благодарности от частных заказчиков</h2>

                    <ul class="reviews__customer-list">
                        <li class="reviews__customer-item">
                            <div class="reviews__customer-header">
                                <div class="reviews__customer-date">21.01.2023</div>
                                <div class="reviews__customer-title">Надстройка мансардного этажа и утепление дома</div>
                            </div>
                            <div class="reviews__customer-review">
                                Это та компания, в которую хочется вернуться.В прошлом году мы решились на реконструкцию
                                дачного дома и обратились в компанию Артель и С чтобы построить мансарду. Закончили уже
                                в холода. А в этом году мы уже успели обшить дом имитацией бруса и утеплить.Остались
                                довольны работой!Хорошо получилось, душевно) Теперь нам всем комфортно и тепло в нашем
                                загородном доме)Рекомендуем.
                            </div>
                            <div class="reviews__customer-footer">
                                <div class="reviews__customer-avatar"><img src="/img/reviews/avatar.svg" alt="avatar">
                                </div>
                                <div class="reviews__customer-info">Семья Комлевых, Истринский район, СНТ "Полянка"
                                </div>
                            </div>
                        </li>
                        <li class="reviews__customer-item">
                            <div class="reviews__customer-header">
                                <div class="reviews__customer-date">21.01.2023</div>
                                <div class="reviews__customer-title">Реконструкция дома</div>
                            </div>
                            <div class="reviews__customer-review">
                                Здравствуйте! Если Вы решили отремонтировать, реконструировать, достроить старый дом или
                                даже построить новый, то можете смело обращаться в компанию "Артель и С"!Мы долго
                                собирались отремонтировать наш старый дом и вот в сентябре 2018 года обратились в
                                компанию "Артель и С", к нам приехал руководитель компании Сташков Дмитрий Валерьевич,
                                внимательно осмотрел все, выслушал наши пожелания, все объяснил "разложил по полочкам",
                                в начале октября заключили договор, а в середине ноября дом красовался под новой крышей
                                с новой пристройкой к дому. В январе продолжили сотрудничество с компанией по внутренней
                                отделке дома. Давно известно, что аппетит приходит во время еды и совершенству нет
                                предела, но все наши дополнительные пожелания по внутреннему обустройству дома Дмитрий
                                Валерьевич, как специалист, или отклонял, или советовал как лучше и технологичнее можно
                                сделать. В результате у нас появилась ЛЕСТНИЦА на мансардный этаж! Собирал лестницу
                                мастер из Ульяновска Владимир, все пожелания по расположению лестницы ее размерам были
                                учтены, лестница получилась супер, спасибо! Огромное спасибо Сташкову Дмитрию
                                Валерьевичу, который сам курировал нашу стройку, и конечно бригаде строителей из
                                Белоруссии Сергею, Дмитрию и Павлу.Дальнейшего развития и процветания вашей компании!
                            </div>
                            <div class="reviews__customer-footer">
                                <div class="reviews__customer-avatar"><img src="/img/reviews/avatar.svg" alt="avatar">
                                </div>
                                <div class="reviews__customer-info">Лариса и Владимир г.Красногорск</div>
                            </div>
                        </li>
                        <li class="reviews__customer-item">
                            <div class="reviews__customer-header">
                                <div class="reviews__customer-date">21.01.2023</div>
                                <div class="reviews__customer-title">Реконструкция деревянного дома с террасами</div>
                            </div>
                            <div class="reviews__customer-review">
                                Мы давно мечтали о новой крыше на нашем 60-летнем доме и вот мечта сбылась! Теперь у нас
                                не только новая крыша, но и обновленный фасад, укрепленные и выровненные террасы и
                                отремонтированные дымоходы. И все это силами строителей из Ульяновска, под руководством
                                молодого бригадира Владимира, грамотного специалиста и профессионала в своем деле.
                                Всегда спокойный, сдержанный, оперативно реагировал на наши просьбы и замечания, давал
                                дельные советы. Ульяновцы - Вы молодцы!Отдельно огромное спасибо Дмитрию Валерьевичу за
                                вовремя сделанные подсказки и замечания, все советы были даны с умом и с душой.С
                                огромной благодарностью за проделанную работу.
                            </div>
                            <div class="reviews__customer-footer">
                                <div class="reviews__customer-avatar"><img src="/img/reviews/avatar.svg"
                                        alt="avatar">
                                </div>
                                <div class="reviews__customer-info">Семья Шкуриных - Кротовых, деревня Мелёжа
                                    Владимирской области</div>
                            </div>
                        </li>
                    </ul>

                    <div class="allFeedback-block__position">
                        <button class="button allFeedback-block__button allFeedback-block__open">Оставить
                            отзыв</button>
                    </div>
                </section>

            </div>
            <!-- /.allFeedback -->

            <x-sidebar />

        </div> <!-- .container -->

    </main>
</x-layout>
