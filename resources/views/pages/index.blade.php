<x-layout>
    <x-slot:meta>
        <title>{{ $page->title }}</title>
        <meta name="description" content="{{ $page->description }}">

        <meta property="og:site_name" content="Артель и С (реконструкция)">
        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://arteli-stroy.ru">
        <meta property="og:image" content="https://arteli-stroy.ru/{{ $page->image }}">
        <meta property="og:image:type" content="image/webp">

        <link rel="canonical" href="https://arteli-stroy.ru">

        @if (!$page->indexing)
            <meta name="robots" content="noindex,follow">
        @endif

        <x-plagins />
    </x-slot:meta>

    <meta itemprop="name" content="{{ $page->title }}">
    <link itemprop="url" href="https://arteli-stroy.ru">
    <meta itemprop="image" content="https://arteli-stroy.ru/{{ $page->image }}">

    <div class="intro">

        <div class="header-slider">

            <div class="header-slider__item">
                <img src="img/header/slide-1-min.webp" alt="реконструкция деревянного дома" class="header-slider__bg">
                <div class="wrapper">
                    <div class="wrapper-block">
                        <div class="wrapper__text">
                            <p class="main__title">Реконструкция, строительство, ремонт</p>
                            <span class="wrapper__text-title main__title">
                                <span id="season"></span> время скидок - не опоздай
                            </span>
                        </div>
                        <div class="wrapper__button">
                            <button class="button" onClick="document.location='stock'">Подробнее об акции</button>
                        </div>
                    </div>
                </div><!-- end wrapper -->
            </div>

            <div class="header-slider__item">
                <img src="img/header/slide-5.webp" alt="реконструкция кирпичного дома" class="header-slider__bg">
                <div class="wrapper">
                    <div class="wrapper-block">
                        <div class="wrapper__text">
                            <p class="main__title">Реконструкция, строительство, ремонт</p>
                            <span class="wrapper__text-title main__title">
                                При заказе дома под ключ
                            </span>
                        </div>
                        <div class="wrapper__button">
                            <button class="button" onClick="document.location='special-offers'">Подробнее об
                                акции</button>
                        </div>
                    </div>
                </div><!-- end wrapper -->
            </div>

            <div class="header-slider__item">
                <img src="img/header/slide-3-min.webp" alt="реконструкция каменного дома" class="header-slider__bg">
                <div class="wrapper">
                    <div class="wrapper-block">
                        <div class="wrapper__text">
                            <p class="main__title">Реконструкция, строительство, ремонт</p>
                            <span class="wrapper__text-title main__title">
                            </span>
                        </div>
                        <div class="wrapper__button">
                            <button class="button" onClick="document.location='stock'">Подробнее об акции</button>
                        </div>
                    </div>
                </div><!-- end wrapper -->
            </div>

        </div> <!-- .header-slider -->

    </div>
    <!--.intro -->

    <main>

        <div class="container">
            <h1 class="main__title">{{ $page->h1 }}</h1>
        </div>

        <section class="service">
            <div class="container">

                <div class="service-block">

                    <a class="service-block__card" href="service/construction" rel="nofollow">
                        <h2 class="service-block__card-title">Строительство домов</h2>
                        <div class="service-block__card-img">
                            <img src="img/service/service-12-min.webp" alt="service-1">
                            <span></span>
                        </div>
                        <div class="service-block__card-text">
                            <p>Строительство дома — ответственное мероприятие. Адаптация проекта под условия местности,
                                правильный
                                выбор строительных материалов и качественное выполнение работ — это залог прочного,
                                уютного и красивого
                                сооружения. Именно поэтому строительство домов нужно доверять профессионалам.
                                Специалисты строго следуют
                                технологии строительства, выполняя все этапы работ в соответствии с проектом. </p>
                        </div>
                    </a> <!-- /.service-block__card -->

                    <a class="service-block__card" href="service/reconstruction">
                        <h1 class="service-block__card-title" itemprop="headline">Реконструкция домов</h1>
                        <div class="service-block__card-img">
                            <img src="img/service/service-7-min.webp" alt="service-2">
                            <span></span>
                        </div>
                        <div class="service-block__card-text">
                            <p>Реконструкция домов — это возможность дать ветхому строению новую жизнь. Реконструкция
                                предполагает
                                замену несущих конструкций, укрепление фундамента, надстройку этажей, пристройку
                                дополнительных
                                помещений, перепланировку. Специалисты компании определят состояние несущих конструкций,
                                произведут
                                инженерные расчеты и составят проект выполнения работ. </p>
                        </div>
                    </a> <!-- /.service-block__card -->

                    <a class="service-block__card" href="service/decoration">
                        <h2 class="service-block__card-title">Отделка домов</h2>
                        <div class="service-block__card-img">
                            <img src="img/service/service-8-min.webp" alt="service-3">
                            <span></span>
                        </div>
                        <div class="service-block__card-text">
                            <p>Внутренняя отделка дома подразумевает не только создание красивого интерьера, но и
                                утепление крыши,
                                перекрытий, полов, проведение электрики и коммуникаций. Наружная отделка обеспечит дому
                                презентабельный
                                вид и позволит выполнить утепление стен снаружи. Все работы выполняются с применением
                                современных,
                                устойчивых к внешним воздействиям, материалов. </p>
                        </div>
                    </a> <!-- /.service-block__card -->

                    <a class="service-block__card" href="service/foundation">
                        <h2 class="service-block__card-title">Фундамент</h2>
                        <!-- /.service-block__card-title -->
                        <div class="service-block__card-img">
                            <img src="img/service/service-9-min.webp" alt="img-1">
                            <span></span>
                        </div>
                        <div class="service-block__card-text">
                            <p>Надежный фундамент — это основа любого сооружения. При строительстве фундамента учитывают
                                особенности
                                участка, тип грунта, глубину залегания подземных вод и другие факторы. При расчете
                                нагрузки важна
                                этажность, материал стен и кровли. Комплексный подход и точные инженерные расчеты
                                позволяют создать
                                надежный фундамент, который будет стоять десятилетиями.</p>
                        </div>
                    </a> <!-- /.service-block__card -->

                    <a class="service-block__card" href="service/warming" rel="nofollow">
                        <h2 class="service-block__card-title">Утепление домов</h2>
                        <div class="service-block__card-img">
                            <img src="img/service/service-10-min.webp" alt="service-4">
                            <span></span>
                        </div>
                        <div class="service-block__card-text">
                            <p>Утепление дома позволяет уменьшить потери тепла, сократить расходы на отопление зимой и
                                кондиционирование летом. Если сделать это неправильно, на стенах будет образовываться
                                конденсат, что
                                приведет к сырости в доме. Поэтому выбор утеплителя и его монтаж лучше доверить
                                профессионалам. При
                                соблюдении технологий в доме всегда будет тепло и сухо при минимальных расходах на
                                отопление.</p>
                        </div>
                    </a>

                    <!-- /.service-block__card -->
                    <a class="service-block__card" href="service/roof">
                        <h2 class="service-block__card-title">Крыши домов</h2>
                        <!-- /.service-block__card-title -->
                        <div class="service-block__card-img">
                            <img src="img/service/service-11-min.webp" alt="img-2">
                            <span></span>
                        </div>
                        <div class="service-block__card-text">
                            <p>Монтаж кровли — это ответственный этап строительства дома. При монтаже каркаса необходимо
                                учитывать
                                массу кровельного материала, ветровую и снеговую нагрузку. Только профессионалы могут
                                сделать это
                                правильно. При выборе материала посоветуйтесь со специалистом, который расскажет о
                                преимуществах и
                                недостатках всех вариантов. Надежная крыша защитит дом от непогоды и холода.</p>
                        </div>
                        <!-- /.service-block__card-text -->
                    </a>

                </div> <!-- /.service-block -->

            </div> <!-- /.container -->

        </section>
        <!-- /.service -->

        <!-- Done-block -->
        <x-done />

        <section class="service">
            <div class="container">
                <div class="service-block">

                    <a class="service-block__card" href="service/electrician" rel="nofollow">
                        <h2 class="service-block__card-title">Электрика</h2>
                        <div class="service-block__card-img">
                            <img src="img/details/img-1-min.webp" alt="service-5">
                            <span></span>
                        </div>
                        <div class="service-block__card-text">
                            <p>Сложно представить себе дом без электричества. Поэтому после окончания строительства
                                нужно позаботиться
                                об электропроводке. Она выполняется с учетом максимальных нагрузок. Разводка электрики
                                должна быть
                                максимально продуманной и эргономичной, обеспечивать беспрепятственное подключение всех
                                бытовых
                                приборов. Все эти нюансы продумывает специалист. </p>
                        </div> <!-- /.service-block__card-text -->
                    </a>
                    <!-- /.service-block__card -->

                    <a class="service-block__card" href="service/heating" rel="nofollow">
                        <h2 class="service-block__card-title">Отопление</h2>
                        <!-- /.service-block__card-title -->
                        <div class="service-block__card-img">
                            <img src="img/details/img-2-min.webp" alt="img-3">
                        </div>
                        <div class="service-block__card-text">
                            <p>Тепло в доме в любую погоду — залог комфорта и уюта. При правильном монтаже, выборе
                                энергоносителя и
                                оборудования вы сможете значительно экономить на обогреве помещения и наслаждаться
                                комфортным
                                микроклиматом. При проектировании отопительных систем учитывается материал стен,
                                планировка и площадь
                                помещений, степень теплопотерь. А с помощью теплого пола можно сделать систему отопления
                                более
                                эффективной.</p>
                        </div> <!-- /.service-block__card-text -->
                    </a>
                    <!-- /.service-block__card -->

                    <a class="service-block__card" href="service/water-system" rel="nofollow">
                        <h2 class="service-block__card-title">Водоснабжение и канализация</h2>
                        <!-- /.service-block__card-title -->
                        <div class="service-block__card-img">
                            <img src="img/details/img-3-min.webp" alt="img-3">
                        </div>
                        <div class="service-block__card-text">
                            <p>Проживание в собственном доме при отсутствии подачи воды и системы канализации
                                невозможно. Автономное
                                водоснабжение обеспечивает бесперебойную подачу воды. Для автономной канализации широко
                                используются
                                удобные и гигиеничные септики. Специалисты разработают проект водоснабжения и
                                канализации в любом районе
                                и в минимальные сроки смонтируют современную, надежную систему.</p>
                        </div> <!-- /.service-block__card-text -->
                    </a>
                    <!-- /.service-block__card -->

                </div>
                <!-- /.service-block -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.service -->

        <section class="news">
            <div class="container">
                <div class="news-block">
                    <div class="news-block__title">Новости</div>
                    <!-- /.news-block__title -->
                    <div class="news-block__items">
                        <a href="#">
                            <div class="news-block__item">
                                <div class="news-block__item-title">Спецпредложение</div>
                                <!-- /.news-block__item-title -->
                                <span class="news-block__item-subtitle">
                                    11.04.2015
                                    <span class="news-block__item-date1"></span>
                                    <span class="news-block__item-date2"></span>
                                </span>
                                <!-- /.news-block__item-subtitle -->
                                <p class="news-block__item-text">
                                    Заказываете сруб деревянного дома и получаете скидку 15% на внутреннюю отделку!
                                </p>
                                <!-- /.news-block__item-text -->
                            </div>
                            <!-- /.news-block__item -->
                        </a>
                        <a href="#">
                            <div class="news-block__item">
                                <div class="news-block__item-title">Спецпредложение</div>
                                <!-- /.news-block__item-title -->
                                <span class="news-block__item-subtitle">
                                    11.04.2015
                                    <span class="news-block__item-date1"></span>
                                    <span class="news-block__item-date2"></span>
                                </span>
                                <!-- /.news-block__item-subtitle -->
                                <p class="news-block__item-text">Заказываете сруб деревянного дома и получаете скидку
                                    15% на внутреннюю
                                    отделку!</p>
                                <!-- /.news-block__item-text -->
                            </div>
                            <!-- /.news-block__item -->
                        </a>
                        <a href="#">
                            <div class="news-block__item">
                                <div class="news-block__item-title">Спецпредложение</div>
                                <!-- /.news-block__item-title -->
                                <span class="news-block__item-subtitle">
                                    11.04.2015
                                    <span class="news-block__item-date1"></span>
                                    <span class="news-block__item-date2"></span>
                                </span>
                                <!-- /.news-block__item-subtitle -->
                                <p class="news-block__item-text">
                                    Заказываете сруб деревянного дома и получаете скидку 15% на внутреннюю отделку!
                                </p>
                                <!-- /.news-block__item-text -->
                            </div>
                            <!-- /.news-block__item -->
                        </a>
                    </div>
                    <button class="news-block__button">Читать все новости</button>
                    <span class="news-block__padding"></span>
                    <!-- /.news-block__button -->
                </div>
                <!-- /.news-block -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.news -->

        <section class="interesting">
            <div class="container">
                <div class="interesting-block">
                    <div class="interesting-block__title">Это интересно</div>
                    <!-- /.interesting-block__title -->
                    <div class="interesting-block__items">
                        <a href="#">
                            <div class="interesting-block__item">
                                <div class="interesting-block__item-title">Спецпредложение</div>
                                <!-- /.news-block__item-title -->
                                <span class="interesting-block__item-subtitle">
                                    11.04.2015
                                    <span class="interesting-block__item-date1"></span>
                                    <span class="interesting-block__item-date2"></span>
                                </span>
                                <!-- /.news-block__item-subtitle -->
                                <p class="interesting-block__item-text">
                                    Заказываете сруб деревянного дома и получаете скидку 15% на внутреннюю отделку!
                                </p>
                                <!-- /.news-block__item-text -->
                            </div>
                            <!-- /.interesting-block__item -->
                        </a>
                        <a href="#">
                            <div class="interesting-block__item">
                                <div class="interesting-block__item-title">Спецпредложение</div>
                                <!-- /.news-block__item-title -->
                                <span class="interesting-block__item-subtitle">
                                    11.04.2015
                                    <span class="interesting-block__item-date1"></span>
                                    <span class="interesting-block__item-date2"></span>
                                </span>
                                <!-- /.news-block__item-subtitle -->
                                <p class="interesting-block__item-text">
                                    Заказываете сруб деревянного дома и получаете скидку 15% на внутреннюю отделку!
                                </p>
                                <!-- /.news-block__item-text -->
                            </div>
                            <!-- /.interesting-block__item -->
                        </a>
                        <a href="#">
                            <div class="interesting-block__item">
                                <div class="interesting-block__item-title">Спецпредложение</div>
                                <!-- /.news-block__item-title -->
                                <span class="interesting-block__item-subtitle">
                                    11.04.2015
                                    <span class="interesting-block__item-date1"></span>
                                    <span class="interesting-block__item-date2"></span>
                                </span>
                                <!-- /.news-block__item-subtitle -->
                                <p class="interesting-block__item-text">
                                    Заказываете сруб деревянного дома и получаете скидку 15% на внутреннюю отделку!
                                </p>
                                <!-- /.news-block__item-text -->
                            </div>
                            <!-- /.interesting-block__item -->
                        </a>
                    </div>
                    <!-- /.interesting-block__items -->
                    <button class="interesting-block__button">Читать все статьи</button>
                    <span class="interesting-block__padding"></span>
                    <!-- /.interesting-block__button -->
                </div>
                <!-- /.interesting-block -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.interesting -->

        <x-feedback />
        <!-- /.feedback -->

    </main>

</x-layout>
