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

        <x-3-plagins />
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

                    <article class="article">
                        <div class="article__block">

                            <h1 class="article__title" itemprop="headline">{{ $page->h1 }}</h1>

                            <!-- start header-statuses -->
                            <ul class="header-statuses">
                                <li>&#128197; <?= mb_substr(strip_tags($page->created_at), 0, 10, 'utf-8') ?></li>
                                <li>&#128065; {{ $page->views }}</li>
                                <li>&#128221; <a rel="nofollow" itemprop="author" href="/authors/Anton/">Антон
                                        Белоусов</a></li>
                            </ul>
                            <!-- end header-statuses -->

                            <div itemprop="articleBody">

                                <p>Электромонтажные работы входят в перечень основных мероприятий при подготовке к
                                    эксплуатации построенного жилого дома или в процессе <a class="link"
                                        href="/service/reconstruction/dostrojka-domov">реконструкции существующего
                                        объекта</a>. От правильного выполнения этого этапа зависит корректная работа
                                    электроприборов и обеспечение пожарной безопасности. Поэтому монтаж электрики в доме
                                    лучше доверить специалисту. </p>

                                <img class="sib article__img" loading="lazy" width="900" height="500"
                                    src="/img/pages/electrician/montazh-elektroschetchika.webp"
                                    title="установка электросчетчика" alt="установка электросчетчика">

                                <h2>Цена вопроса</h2>
                                <p>Чтобы определить стоимость монтажа электрики при разработке проекта электрики
                                    специалист должен оценить масштаб работ, выполнить замеры, на планах помещений
                                    отобразить разводку, места расположения розеток, включателей, щитков и прочего
                                    оборудования. В некоторых случаях монтаж электрики заключается в ремонте или замене
                                    участка существующей электропроводки. </p>

                                <div class="su-box su-box-style-noise">
                                    <h3 class="su-box-title">На заметку</h3>
                                    <div class="su-box-content su-u-clearfix su-u-trim">Стоимость работ в каждом
                                        отдельном случае рассчитывается на основании сметы, в которой отражаются
                                        перечень мероприятий.</div>
                                </div>

                                <img class="sib article__img" loading="lazy" width="900" height="500"
                                    src="/img/pages/electrician/2.webp" title="схема электрики в квартире"
                                    alt="схема электрики в квартире фото">

                                <h2>Монтаж: основные этапы</h2>
                                <p>Работа электрика при заказе услуги «под ключ» включает монтаж электрики за несколько
                                    этапов:</p>
                                <ul>
                                    <li>Определяем тип ввода. Чаще всего в частных домах применяется однофазный ввод –
                                        220 В. Трехфазное напряжение (380 В) применяется только в случае использования
                                        мощного оборудования. От сети 30 В, как правило, обеспечивается функционирование
                                        котлов отопления, электрических плит, духовых шкафов. Таким образом, если дом
                                        имеет площадь не более 100 м2 и в нем не применяется электрический котел
                                        отопления, то можно выбирать монтаж однофазного ввода.</li>

                                    <div class="see"><!-- see-also -->
                                        <a href="/service/reconstruction/reconstruction-calculator" target="_blank"
                                            class="see-also">
                                            <div class="see-also__text">
                                                <span class="ctaText">Смотрите также:</span>&nbsp; <span
                                                    class="postTitle">Калькулятор реконструкции</span>
                                            </div>
                                        </a>
                                    </div><!-- end see-also -->

                                    <li>Разработкой плана электрификации объекта занимается специалист, который будет
                                        выполнять монтаж электрики. Он отмечает на плане электроточки, места
                                        расположения включателей, настенных и потолочных светильников, места подключения
                                        оборудования. При том учитываются конструктивные и планировочные особенности
                                        объекта, а также расстановка мебели и оборудования, расположение оконных и
                                        дверных проемов. Итогом разработки плана электрики становится определение
                                        суммарной мощности путем сложения мощности каждого электрического прибора.</li>
                                    <li>На этапе составления сметы определяется количество и вид оборудования и
                                        расходных материалов.</li>
                                    <li>Подключение дома к электросетям осуществляется специалистами компании,
                                        предоставляющей ресурс. А тип ввода – воздушный или подземный, выбирается на
                                        стадии разработки проекта.</li>
                                    <li>Электрик во время монтажа электропроводки внутри дома прокладывает
                                        электрокабели, подключает розетки и включатели, проводит тестирование.</li>
                                </ul>

                                <img class="sib article__img" loading="lazy" width="900" height="500"
                                    src="/img/pages/electrician/ustanovka-elektriki.webp" title="монтаж электрики"
                                    alt="монтаж электрики фото">

                                <p>Монтаж электрики, цены на который фиксируются в смете, можно заказать в компании
                                    «Артель и С». Все работы выполняются с учетом пожеланий заказчика и соблюдением
                                    строительных норм и правил. </p>

                                <x-stopgap />
                                <!-- бесплатная консультация -->

                                {{-- Превью отделка --}}
                                <!-- Рекомендуемые статьи -->

                                <x-top-bar />
                                <!-- TOP BAR -->

                                <x-modal-help />
                                <!-- /.modal-help -->

                            </div>

                        </div>
                    </article>

                </div><!-- /.main-electrician -->

            </section>

        </div>

    </main>
</x-layout>
