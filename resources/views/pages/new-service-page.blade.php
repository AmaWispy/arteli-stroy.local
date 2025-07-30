<x-service-layout>
    <x-slot:meta>
        <title>{{ $page->title }}</title>
        <meta name="description" content="{{ $page->description }}">

        <meta property="og:site_name" content="Артель и С">
        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://arteli-stroy.ru/{{ $page->link }}">
        <meta property="og:image" content="https://arteli-stroy.ru/{{ $page->image }}">
        <meta property="og:image:type" content="image/webp">

        @if (!$page->is_indexed)
            <meta name="robots" content="noindex,follow">
        @endif

        <x-plagins />
    </x-slot:meta>

    <main>
        <article class="service-page">
            <div itemprop="inLanguage" itemscope="" itemtype="https://schema.org/Language">
                <meta itemprop="name" content="Russian">
                <meta itemprop="alternateName" content="ru">
            </div>

            <meta itemprop="name" content="{{ $page->title }}">
            <link itemprop="url" href="https://arteli-stroy.ru/{{ $page->link }}">
            <meta itemprop="articleSection" content="{{ $page->category->h1 }}">
            <meta itemprop="image" content="https://arteli-stroy.ru/{{ $page->image }}">
            <meta itemprop="datePublished" content="{{ mb_substr(strip_tags($page->created_at), 0, 10, 'utf-8') }}">
            <meta itemprop="dateModified" content="{{ mb_substr(strip_tags($page->updated_at), 0, 10, 'utf-8') }}">

            <section class="promo">
                <div class="service-page__container">
                    <div class="promo__top">
                        <div class="promo__content">
                            <h1 class="promo__title">{{ $page->h1 }}</h1>
                            <div class="promo__feedback">
                                <div class="promo__feedback-title">Оставьте заявку и менеджер свяжется с вами в течение
                                    15 минут:</div>
                                <ul class="promo__feedback-list">
                                    <li class="promo__feedback-item">Ответит на вопросы</li>
                                    <li class="promo__feedback-item">Сориентирует по стоимости</li>
                                    <li class="promo__feedback-item">Запишет на замер для точной сметы</li>
                                </ul>

                                <form class="promo__feedback-form service-general-form" method="post"
                                    data-goal="service-promo">
                                    @csrf
                                    <div class="promo__feedback-wrap">
                                        <input type="text" class="token" name="token" hidden>
                                        <input class="promo__feedback-input phone" name="phone" type="tel"
                                            placeholder="+7 (913) 999-99-99" required>
                                        <button class="promo__feedback-submit" type="submit">
                                            Получить консультацию
                                        </button>
                                    </div>
                                    <label class="service-checkbox">
                                        <input type="checkbox" name="policy" required>
                                        <span></span>
                                        <div>Нажимая на кнопку, вы даёте согласие на обработку <a
                                                href="/politica">персональных данных</a></div>
                                    </label>
                                </form>

                                <button class="promo__feedback-modal modal-open__call">Получить консультацию</button>
                            </div>
                        </div>
                        <div class="promo__calculator">
                            <x-service-calculator />
                        </div>
                    </div>
                    <ul class="promo__list">
                        <li class="promo__list-item">
                            <div class="promo__item-title">
                                <div class="promo__item-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26 25.89H4V6H7V8H6V23.89H24V8H23V6H26V25.89Z" fill="#586282" />
                                        <path d="M19 6H9V8H19V6Z" fill="#586282" />
                                        <path d="M10 4H8V10H10V4Z" fill="#586282" />
                                        <path d="M24 6H21V8H24V6Z" fill="#586282" />
                                        <path d="M22 4H20V10H22V4Z" fill="#586282" />
                                        <path d="M10 14.8896H8V16.8896H10V14.8896Z" fill="#586282" />
                                        <path d="M22 14.8896H20V16.8896H22V14.8896Z" fill="#586282" />
                                        <path d="M18 14.8896H16V16.8896H18V14.8896Z" fill="#586282" />
                                        <path d="M10 18.8896H8V20.8896H10V18.8896Z" fill="#586282" />
                                        <path d="M18 18.8896H16V20.8896H18V18.8896Z" fill="#586282" />
                                        <path d="M14 18.8896H12V20.8896H14V18.8896Z" fill="#586282" />
                                        <path d="M22 18.8896H20V20.8896H22V18.8896Z" fill="#586282" />
                                        <path
                                            d="M13 16.3105L10.79 14.1004L12.21 12.6904L13 13.4804L15.29 11.1904L16.71 12.6004L13 16.3105Z"
                                            fill="#586282" />
                                    </svg>
                                </div>
                                <div class="promo__item-text">Гарантия соблюдения сроков</div>
                            </div>
                            <div class="promo__item-description">В случае задержки несем штрафные сакции в размере 3% за
                                день</div>
                        </li>
                        <li class="promo__list-item">
                            <div class="promo__item-title">
                                <div class="promo__item-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25 25H5C4.46957 25 3.96083 24.7893 3.58575 24.4142C3.21068 24.0391 3 23.5304 3 23V10C3 9.46957 3.21068 8.96086 3.58575 8.58578C3.96083 8.21071 4.46957 8 5 8H25C25.5304 8 26.0391 8.21071 26.4142 8.58578C26.7893 8.96086 27 9.46957 27 10V23C27 23.5304 26.7893 24.0391 26.4142 24.4142C26.0391 24.7893 25.5304 25 25 25ZM5 10V23H25V10H5Z"
                                            fill="#586282" />
                                        <path d="M20 9H18V7H13V9H11V5H20V9Z" fill="#586282" />
                                        <path d="M13 15H4V17H13V15Z" fill="#586282" />
                                        <path d="M26 15H17V17H26V15Z" fill="#586282" />
                                        <path d="M16 15H14V17H16V15Z" fill="#586282" />
                                        <path d="M8 7H6V9H8V7Z" fill="#586282" />
                                        <path d="M24 7H22V9H24V7Z" fill="#586282" />
                                    </svg>
                                </div>
                                <div class="promo__item-text">Прозрачная фиксированная цена</div>
                            </div>
                            <div class="promo__item-description">Вы платите только за то что вам нужно, никаких скрытых
                                платежей</div>
                        </li>
                        <li class="promo__list-item">
                            <div class="promo__item-title">
                                <div class="promo__item-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 27H6C5.46957 27 4.96086 26.7893 4.58578 26.4142C4.21071 26.0391 4 25.5304 4 25V8C4 7.46957 4.21071 6.96089 4.58578 6.58582C4.96086 6.21074 5.46957 6 6 6H9V8H6V25H16V17H18V25C18 25.5304 17.7893 26.0391 17.4142 26.4142C17.0391 26.7893 16.5304 27 16 27Z"
                                            fill="#586282" />
                                        <path d="M16.9999 21H4.99988V23H16.9999V21Z" fill="#586282" />
                                        <path d="M8.99988 9H4.99988V11H8.99988V9Z" fill="#586282" />
                                        <path d="M10 18.87V3H26V16H14.31L10 18.87ZM12 5V15.13L13.71 14H24V5H12Z"
                                            fill="#586282" />
                                        <path d="M20.9999 7H14.9999V9H20.9999V7Z" fill="#586282" />
                                        <path d="M20.9999 10H14.9999V12H20.9999V10Z" fill="#586282" />
                                    </svg>
                                </div>
                                <div class="promo__item-text">Ежедневные фото-видео отчеты</div>
                            </div>
                            <div class="promo__item-description">Вы будете в курсе, даже если не можете присутствовать
                                на объекте</div>
                        </li>
                    </ul>
                </div>
            </section>

            <div class="service-page__container">
                <div class="service-breadcrumbs">
                    <ul class="service-breadcrumbs__list" itemscope=""
                        itemtype="https://schema.org/BreadcrumbList">
                        <li class="service-breadcrumbs__item" itemprop="itemListElement" itemscope=""
                            itemtype="https://schema.org/ListItem">
                            <meta itemprop="position" content="0">
                            <a itemprop="item" href="/"><span itemprop="name">Главная</span></a>
                        </li>
                        <li class="service-breadcrumbs__item" itemprop="itemListElement" itemscope=""
                            itemtype="https://schema.org/ListItem">
                            <meta itemprop="position" content="1">
                            <a itemprop="item" href="/service"><span itemprop="name">Наши услуги</span></a>
                        </li>
                        <li class="service-breadcrumbs__item" itemprop="itemListElement" itemscope=""
                            itemtype="https://schema.org/ListItem">
                            <meta itemprop="position" content="2">
                            <a itemprop="item" href="/{{ $page->category->link }}"><span
                                    itemprop="name">{{ $page->category->h1 }}</span></a>
                        </li>
                        <li class="service-breadcrumbs__item" itemprop="itemListElement" itemscope=""
                            itemtype="https://schema.org/ListItem">
                            <meta itemprop="position" content="3">
                            <span itemprop="name">{{ $page->h1 }}</span>
                            <div itemprop="item" itemscope="" itemtype="https://schema.org/Thing">
                                <link itemprop="url" href="/{{ $page->link }}">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="service-page__calculator">
                <x-service-calculator />
            </div>

            @if ($page->prices)
                @php
                    $items = json_decode($page->prices, true);
                @endphp
                @if ($items[0])
                    @php
                        $rest = array_slice($items, 1);
                    @endphp
                    <section class="service-prices">
                        <div class="service-page__container">
                            <h2 class="service-page__subtitle">{{ $items[0] }}</h2>

                            <div class="service-prices__tabs">
                                @foreach ($rest as $idx => $item)
                                    <div class="service-prices__tab {{ !$idx ? 'service-prices__tab_active' : '' }}">
                                        {{ $item['title'] }}</div>
                                @endforeach
                            </div>
                        </div>

                        <div class="service-prices__wrapper">
                            @foreach ($rest as $idx => $item)
                                <div class="service-prices__item {{ !$idx ? 'service-prices__item_active' : '' }}">
                                    <div class="service-prices__thumb">
                                        <img src="/{{ $item['img'] }}" alt="{{ $item['title'] }}">
                                    </div>
                                    <h3 class="service-prices__title">{{ $item['title'] }}</h3>

                                    <div class="service-prices__center">
                                        <ul class="service-prices__list">
                                            @if (is_array($item['list']))
                                                @foreach ($item['list'] as $listItem)
                                                    @if ($listItem)
                                                        <li
                                                            class="service-prices__list-item service-prices__list-item_active">
                                                            {{ $listItem }}</li>
                                                    @endif
                                                @endforeach
                                            @else
                                                @php
                                                    $exploded = explode(';', $item['list']);
                                                @endphp

                                                @foreach ($exploded as $listItem)
                                                    <li
                                                        class="service-prices__list-item service-prices__list-item_active">
                                                        {{ $listItem }}</li>
                                                @endforeach
                                            @endif

                                            @if (isset($item['list-notactive']))
                                                @foreach ($item['list-notactive'] as $listItem)
                                                    @if ($listItem)
                                                        <li class="service-prices__list-item">
                                                            {{ $listItem }}</li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>

                                    <div class="service-prices__footer">
                                        <div class="service-prices__params">
                                            <div class="service-prices__param">
                                                <div class="service-prices__param-title">
                                                    Стоимость от:
                                                </div>
                                                <div class="service-prices__param-value">
                                                    {{ $item['price'] }}
                                                </div>
                                            </div>
                                            <div class="service-prices__param">
                                                <div class="service-prices__param-title">
                                                    Сроки от:
                                                </div>
                                                <div class="service-prices__param-value">
                                                    {{ $item['period'] }}
                                                </div>
                                            </div>
                                        </div>

                                        <form class="service-prices__form service-general-form" method="post"
                                            data-goal="service-prices">
                                            @csrf
                                            <input type="text" class="token" name="token" hidden>
                                            <label>
                                                <div class="service-prices__form-label">Номер телефона</div>
                                                <input class="service-prices__form-input phone" type="tel"
                                                    name="phone" required placeholder="+7 (913) 999-99-99">
                                            </label>
                                            <button class="service-prices__form-submit"
                                                type="submit">Отправить</button>
                                            <label class="service-checkbox">
                                                <input type="checkbox" name="policy" required>
                                                <span></span>
                                                <div>Нажимая на кнопку, вы даёте согласие на обработку <a
                                                        href="/politica">персональных данных</a></div>
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endif
            @endif

            @if ($page->price_table)
                @php
                    $priceTable = json_decode($page->price_table, true);
                @endphp

                @if ($priceTable[0] && isset($priceTable[2]))
                    <section class="service-table">
                        <div class="service-page__container">
                            <h2 class="service-page__subtitle service-table__title">{{ $priceTable[0] }}</h2>

                            <div class="service-table__subtitle">{{ $priceTable[1] }}</div>
                        </div>

                        <div class="service-page__container service-page__container_p0">

                            <div class="service-table__tabs">
                                @if (count($priceTable[2]) > 1)
                                    @foreach ($priceTable[2] as $idx => $category)
                                        <div
                                            class="service-table__tab {{ $idx === 0 ? 'service-table__tab_active' : '' }}">
                                            <div class="service-table__tab-title">{{ $category[0] }}</div>
                                            <div class="service-table__tab-icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.1314 16.6339C10.6432 17.122 9.85042 17.122 9.36223 16.6339L1.8637 9.13532C1.37551 8.64714 1.37551 7.85433 1.8637 7.36614C2.35188 6.87795 3.1447 6.87795 3.63288 7.36614L10.2488 13.982L16.8647 7.37004C17.3529 6.88186 18.1457 6.88186 18.6339 7.37004C19.122 7.85823 19.122 8.65104 18.6339 9.13923L11.1353 16.6378L11.1314 16.6339Z"
                                                        fill="#586282" />
                                                </svg>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>

                            <div class="service-table__items">
                                @foreach ($priceTable[2] as $idx => $category)
                                    <div
                                        class="service-table__item {{ $idx === 0 ? 'service-table__item_active' : '' }}">
                                        <div class="service-table__item-title">{{ $category[0] }}</div>
                                        <table class="service-table__table">
                                            <tbody class="service-table__body">
                                                <tr class="service-table__row">
                                                    <th scope="col" class="service-table__col">Наименование работ
                                                    </th>
                                                    <th scope="col" class="service-table__col">Ед. изм.</th>
                                                    <th scope="col" class="service-table__col">Количество</th>
                                                    <th scope="col" class="service-table__col">Цена от, руб.</th>
                                                    <th scope="col" class="service-table__col">Сумма</th>
                                                </tr>
                                                @foreach (array_slice($category, 1) as $item)
                                                    <tr class="service-table__row">
                                                        <td class="service-table__col">{{ $item['name'] }}</td>
                                                        <td class="service-table__col">{{ $item['measure'] }}</td>
                                                        <td class="service-table__col service-table__col-count">
                                                            <button
                                                                class="service-table__btn service-table__dec">-</button>
                                                            <input class="service-table__count" value="0">
                                                            <button
                                                                class="service-table__btn service-table__inc">+</button>
                                                        </td>
                                                        <td class="service-table__col service-table__col-price">
                                                            {{ $item['price'] }}</td>
                                                        <td class="service-table__col service-table__col-total">0</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endforeach
                            </div>

                            <div class="service-form">
                                <div class="service-form__info">
                                    <div class="service-form__title service-form__title_mb15 service-form__title_fz25">
                                        Итого: <span class="service-table__result">0 р.</span>
                                    </div>
                                    <div class="service-form__title service-form__title_fz15 service-form__title_mb5">
                                        Цена на ремонт дома в Москве и области зависит от 3-х факторов:</div>
                                    <ul class="service-form__list service-form__list_mb10">
                                        <li class="service-form__list-item">Как построен дом и в каком состоянии он
                                            сейчас находится;</li>
                                        <li class="service-form__list-item">Какой результат вы хотите получить после
                                            ремонта дома;</li>
                                        <li class="service-form__list-item">Где находится участок</li>
                                    </ul>
                                    <div class="service-form__title service-form__title_mb0 service-form__title_fz15">
                                        Хотите точную цену ремонта? Оформите замер, и наш инженер-сметчик учтёт все
                                        особенности вашего проекта.</div>
                                </div>
                                <div class="service-form__wrapper">
                                    <div class="service-form__title">Заявка на замер:</div>
                                    <form class="service-form__form service-general-form" method="post"
                                        data-goal="service-form">
                                        @csrf
                                        <input type="text" class="token" name="token" hidden>
                                        <input class="service-form__form-input phone" name="phone" type="tel"
                                            placeholder="+7 (913) 999-99-99" required>
                                        <button class="service-form__form-submit" type="submit">Отправить
                                            заявку</button>
                                        <label class="service-checkbox">
                                            <input type="checkbox" name="policy" required>
                                            <span></span>
                                            <div>Нажимая на кнопку, вы даёте согласие на обработку <a
                                                    href="/politica">персональных данных</a></div>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            @endif

            @if ($portfolios)
                <section class="service-portfolio">
                    <div class="service-page__container">
                        <div class="service-portfolio__header">
                            <h3 class="service-page__subtitle service-portfolio__title">За 15 лет мы сдали порядка 450
                                объектов</h3>

                            @if (count($portfolios) > 1)
                                <div class="service-portfolio__navigation">
                                    <button class="service-portfolio__navigation-prev">
                                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.366139 10.1314C-0.122046 9.64323 -0.122046 8.85042 0.366139 8.36223L7.86468 0.863697C8.35286 0.375511 9.14567 0.375511 9.63386 0.863697C10.122 1.35188 10.122 2.1447 9.63386 2.63288L3.01797 9.24878L9.62996 15.8647C10.1181 16.3529 10.1181 17.1457 9.62996 17.6339C9.14177 18.122 8.34896 18.122 7.86077 17.6339L0.362234 10.1353L0.366139 10.1314Z"
                                                fill="#586282" />
                                        </svg>
                                    </button>
                                    <button class="service-portfolio__navigation-next">
                                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.63386 7.86858C10.122 8.35677 10.122 9.14958 9.63386 9.63777L2.13532 17.1363C1.64714 17.6245 0.854325 17.6245 0.366139 17.1363C-0.122046 16.6481 -0.122046 15.8553 0.366139 15.3671L6.98203 8.75122L0.370045 2.13533C-0.118141 1.64714 -0.118141 0.854325 0.370045 0.366139C0.858231 -0.122047 1.65104 -0.122047 2.13923 0.366139L9.63777 7.86468L9.63386 7.86858Z"
                                                fill="#586282" />
                                        </svg>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="service-portfolio__scroll">
                        <div class="service-portfolio__wrapper">
                            @foreach ($portfolios as $portfolio)
                                @php
                                    $item = json_decode($portfolio['card'], true);
                                @endphp

                                <div class="service-portfolio__item">
                                    <div class="service-portfolio__gallery">
                                        <div class="service-portfolio__gallery-main">
                                            <img class="sib" src="/{{ $item['galery'][0] }}" alt="">
                                        </div>
                                        <div class="service-portfolio__gallery-wrapper">
                                            @foreach ($item['galery'] as $img)
                                                <div class="service-portfolio__gallery-img">
                                                    <img src="/{{ $img }}" alt="gallery">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="service-portfolio__info">
                                        <div class="service-portfolio__info-title">{{ $item['title'] }}</div>
                                        <div class="service-portfolio__info-wrapper">
                                            <ul class="service-portfolio__list">
                                                @php
                                                    $list = explode(';', $item['list']);
                                                @endphp
                                                @foreach ($list as $index => $li)
                                                    @if (count($list) - 1 === $index)
                                                        <li class="service-portfolio__list-item">{{ $li }}.
                                                        </li>
                                                    @else
                                                        <li class="service-portfolio__list-item">{{ $li }};
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            <div class="service-portfolio__showmore">
                                                <button class="service-portfolio__showmore-btn">Подробнее</button>
                                            </div>
                                        </div>
                                        <div class="service-portfolio__params">
                                            <div class="service-portfolio__param">
                                                <div class="service-portfolio__param-title">Стоимость:</div>
                                                <div class="service-portfolio__param-value">{{ $item['price'] }}</div>
                                            </div>
                                            <div class="service-portfolio__param">
                                                <div class="service-portfolio__param-title">Сроки:</div>
                                                <div class="service-portfolio__param-value">{{ $item['period'] }}
                                                </div>
                                            </div>
                                            <div class="service-portfolio__param">
                                                <div class="service-portfolio__param-title">Площадь:</div>
                                                <div class="service-portfolio__param-value">{{ $item['square'] }}
                                                </div>
                                            </div>
                                            <div class="service-portfolio__param">
                                                <div class="service-portfolio__param-title">Год:</div>
                                                <div class="service-portfolio__param-value">{{ $item['year'] }}</div>
                                            </div>
                                        </div>

                                        <button class="service-portfolio__modal-btn">Рассчитать похожий проект</button>

                                        <a href="{{ route('portfolio') }}" class="service-portfolio__link">Смотреть
                                            все проекты по реконструкции</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif

            <section class="how-we-work">
                <div class="service-page__container">
                    <h3 class="service-page__subtitle how-we-work__title">Как мы работаем</h3>
                </div>

                <div class="how-we-work__scroll">
                    <div class="how-we-work__wrapper">
                        <div class="how-we-work__item">
                            <div class="how-we-work__item-icon">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="28" height="28" stroke="#586282"
                                        stroke-width="2" />
                                    <path d="M20 13.9004H9V15.9004H20V13.9004Z" fill="#586282" />
                                    <path d="M17.05 11L21 14.95L17.05 18.9" fill="#586282" />
                                </svg>
                            </div>
                            <div class="how-we-work__item-title">Вы оставляете заявку</div>
                            <div class="how-we-work__item-text">Мы с Вами связываемся и отвечаем на все вопросы, Вы
                                получаете бесплатную консультацию</div>
                        </div>
                        <div class="how-we-work__item">
                            <div class="how-we-work__item-icon">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="28" height="28" stroke="#586282"
                                        stroke-width="2" />
                                    <path d="M20 13.9004H9V15.9004H20V13.9004Z" fill="#586282" />
                                    <path d="M17.05 11L21 14.95L17.05 18.9" fill="#586282" />
                                </svg>
                            </div>
                            <div class="how-we-work__item-title">Согласовываем выезд</div>
                            <div class="how-we-work__item-text">Наш специалист выезжает к вам на объект, чтобы
                                произвести необходимые расчеты и съем размеров</div>
                        </div>
                        <div class="how-we-work__item">
                            <div class="how-we-work__item-icon">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="28" height="28" stroke="#586282"
                                        stroke-width="2" />
                                    <path d="M20 13.9004H9V15.9004H20V13.9004Z" fill="#586282" />
                                    <path d="M17.05 11L21 14.95L17.05 18.9" fill="#586282" />
                                </svg>
                            </div>
                            <div class="how-we-work__item-title">Коммерческое предложение</div>
                            <div class="how-we-work__item-text">По данным собранным специалистом составляем для вас
                                смету и отправляем на ваше одобрение</div>
                        </div>
                        <div class="how-we-work__item">
                            <div class="how-we-work__item-icon">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.71 20.12L8 16.42L9.41 15L11.71 17.3L20 9L21.41 10.42L11.71 20.12Z"
                                        fill="#586282" />
                                    <rect x="1" y="1" width="28" height="28" stroke="#586282"
                                        stroke-width="2" />
                                </svg>
                            </div>
                            <div class="how-we-work__item-title">Заключение договора</div>
                            <div class="how-we-work__item-text">Если Вас все устраивает заключаем договор и производим
                                все необходимые работы</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="service-warranty">
                <div class="service-page__container">
                    <h2 class="service-page__subtitle service-warranty__title">Преимущества «Артель и С»</h2>
                </div>

                <div class="service-warranty__wrapper">
                    <div class="service-warranty__info">
                        <div class="service-warranty__item">
                            <div class="service-warranty__item-title">2 года</div>
                            <div class="service-warranty__item-subtitle">гарантия на все виды работ</div>
                        </div>
                        <div class="service-warranty__item">
                            <div class="service-warranty__item-title">Более 15 лет</div>
                            <div class="service-warranty__item-subtitle">работаем на строительном рынке</div>
                        </div>
                        <div class="service-warranty__item">
                            <div class="service-warranty__item-title">1,5% клиентов</div>
                            <div class="service-warranty__item-subtitle">обращается к нам по гарантии</div>
                        </div>
                    </div>

                    <div class="service-warranty__warranty">
                        <picture>
                            <source srcset="/img/new-service-page/warranty-mobile.jpg" media="(max-width: 767px)">
                            <img class="sib" src="/img/new-service-page/warranty.jpg"
                                alt="Гарантийный сертификат">
                        </picture>
                    </div>
                </div>
            </section>

            <section class="service-reviews">
                <div class="service-page__container">
                    <h2 class="service-page__subtitle service-reviews__title">Отзывы на независимых площадках</h2>
                </div>

                <div class="service-reviews__container">
                    <div class="service-reviews__wrapper">
                        <div class="service-reviews__reviews">
                            <div class="service-reviews__reviews-item">
                                <div style="width:100%;height:100%;overflow:hidden;position:relative;"><iframe
                                        style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box"
                                        src="https://yandex.ru/maps-reviews-widget/28289659213?comments"></iframe><a
                                        href="https://yandex.ru/maps/org/artel_i_s/28289659213/" target="_blank"
                                        style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0;overflow:hidden;text-overflow:ellipsis;display:block;max-height:14px;white-space:nowrap;padding:0 16px;box-sizing:border-box">Артель
                                        и С на карте Красногорска — Яндекс Карты</a></div>
                            </div>
                        </div>
                        <div class="service-reviews__scroll">
                            <div class="service-reviews__recommendations">
                                <div class="service-reviews__recommendations-title">Рекомендации крупных брендов</div>
                                <div class="service-reviews__recommendations-wrapper">
                                    <div class="service-reviews__recommendations-item">
                                        <div class="service-reviews__recommendations-brand">АБРАУ-ДЮРСО</div>
                                        <div class="service-reviews__recommendations-img">
                                            <img class="sib" src="/img/new-service-page/reviews/abrau.jpg"
                                                alt="АБРАУ-ДЮРСО">
                                        </div>
                                    </div>
                                    <div class="service-reviews__recommendations-item">
                                        <div class="service-reviews__recommendations-brand">Грин Филмс</div>
                                        <div class="service-reviews__recommendations-img">
                                            <img class="sib" src="/img/new-service-page/reviews/green-films.jpg"
                                                alt="Грин Филмс">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-form">
                        <div class="service-form__info">
                            <div class="service-form__title">Индивидуальные скидки после осмотра объекта. <br> Узнайте
                                где можно сэкономить на встрече с инженером-сметчиком.</div>
                            <ul class="service-form__list">
                                <li class="service-form__list-item">Ответит на технические вопросы</li>
                                <li class="service-form__list-item">Сориентирует по стоимости работ и материалов</li>
                                <li class="service-form__list-item">Посоветует максимально выгодное решение без
                                    ненужных переплат</li>
                            </ul>
                        </div>
                        <div class="service-form__wrapper">
                            <div class="service-form__title">Заявка на замер:</div>
                            <form class="service-form__form service-general-form" method="post"
                                data-goal="service-form">
                                @csrf
                                <input type="text" class="token" name="token" hidden>
                                <input class="service-form__form-input phone" name="phone" type="tel"
                                    placeholder="+7 (913) 999-99-99" required>
                                <button class="service-form__form-submit" type="submit">Отправить заявку</button>
                                <label class="service-checkbox">
                                    <input type="checkbox" name="policy" required>
                                    <span></span>
                                    <div>Нажимая на кнопку, вы даёте согласие на обработку <a
                                            href="/politica">персональных данных</a></div>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <x-service-partners />

            <section class="service-content">
                <div class="service-page__container">
                    <h3 class="service-page__subtitle">
                        {{ $page->text_title }}
                    </h3>

                    <div class="service-content__wrapper">
                        {!! $page->text !!}

                        @if (strlen($page->text) > 1500)
                            <div class="service-content__showmore">
                                <button class="service-content__showmore-btn">Подробнее</button>
                            </div>
                        @endif
                    </div>
                </div>
            </section>

            @if ($page->faq)
                <section class="service-faq" itemscope itemtype="https://schema.org/FAQPage">
                    <div class="service-page__container">
                        <h3 class="service-page__subtitle service-faq__title">
                            Вопрос - ответ
                        </h3>
                    </div>

                    <div class="service-faq__container">
                        <ul class="service-faq__wrapper">
                            @php
                                $faq = json_decode($page->faq, true);
                            @endphp
                            @foreach ($faq as $item)
                                <li class="service-faq__item" itemscope itemprop="mainEntity"
                                    itemtype="https://schema.org/Question">
                                    <a class="service-faq__question" href="#"
                                        itemprop="name">{{ $item['question'] }}
                                        <div class="service-faq__icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.1314 16.6339C10.6432 17.122 9.85042 17.122 9.36223 16.6339L1.8637 9.13532C1.37551 8.64714 1.37551 7.85433 1.8637 7.36614C2.35188 6.87795 3.1447 6.87795 3.63288 7.36614L10.2488 13.982L16.8647 7.37004C17.3529 6.88186 18.1457 6.88186 18.6339 7.37004C19.122 7.85823 19.122 8.65104 18.6339 9.13923L11.1353 16.6378L11.1314 16.6339Z"
                                                    fill="#586282" />
                                            </svg>
                                        </div>
                                    </a>
                                    <div class="service-faq__answer" itemscope itemprop="acceptedAnswer"
                                        itemtype="https://schema.org/Answer">
                                        <span itemprop="text">{{ $item['answer'] }}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            @endif

            @if ($page->tiles)
                @if (str_contains($page->tiles, '::') || str_contains($page->tiles, '||'))
                    @php
                        $oldTiles = explode('||', $page->tiles);
                        $tiles = '';
                    @endphp
                @else
                    @php
                        $oldTiles = '';
                        $tiles = json_decode($page->tiles, true);
                    @endphp
                @endif

                <x-service-page.tiles :tiles="$tiles" :old-tiles="$oldTiles" />
            @endif

            @php
                $categoryId = $page->category->id;
            @endphp
            <x-service-preview :categoryId="$categoryId" />

            <!-- Добавить интеракивность на кнопки -->

            <div class="service-page__container service-page__container_p0">
                <div class="service-form service-form_mb">
                    <div class="service-form__info">
                        <div class="service-form__title">Если ещё остались вопросы и нужна консультация, оставьте
                            заявку на звонок и менеджер свяжется с вами в течение 15 минут:</div>
                        <ul class="service-form__list">
                            <li class="service-form__list-item">Ответит на вопросы</li>
                            <li class="service-form__list-item">Сориентирует по стоимости</li>
                            <li class="service-form__list-item">Запишет на замер для точной сметы</li>
                        </ul>
                    </div>
                    <div class="service-form__wrapper">
                        <div class="service-form__title">Заявка на замер:</div>
                        <form class="service-form__form service-general-form" method="post"
                            data-goal="service-form">
                            @csrf
                            <input type="text" class="token" name="token" hidden>
                            <input class="service-form__form-input phone" name="phone" type="tel"
                                placeholder="+7 (913) 999-99-99" required>
                            <button class="service-form__form-submit" type="submit">Отправить заявку</button>
                            <label class="service-checkbox">
                                <input type="checkbox" name="policy" required>
                                <span></span>
                                <div>Нажимая на кнопку, вы даёте согласие на обработку <a href="/politica">персональных
                                        данных</a></div>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </main>

    <div class="portfolio-modal">
        <div class="portfolio-modal__modal">
            <div class="portfolio-modal__close">
                <svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.9985 34.4677L10.3711 11.8403L12.2567 9.95471L34.8841 32.5821L32.9985 34.4677Z"
                        fill="black" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M34.884 11.8408L12.2566 34.4683L10.371 32.5826L32.9984 9.95523L34.884 11.8408Z"
                        fill="black" />
                </svg>
            </div>

            <div class="portfolio-modal__title">Заявка на расчет стоимости проекта</div>
            <div class="portfolio-modal__subtitle">Оставьте контакты и менеджер свяжемся с вами в течение 15 минут в
                рабочее время, чтобы уточнить детали проекта.</div>

            <form class="portfolio-modal__form service-general-form" method="post" data-goal="service-raschet">
                @csrf
                <input type="text" class="token" name="token" hidden>
                <input class="portfolio-modal__input phone" type="tel" required name="phone"
                    placeholder="+7 (913) 999-99-99">

                <div class="portfolio-modal__gift" data-value="yes">
                    <div class="portfolio-modal__gift-text">Вы хотите получить в подарок PDF файл
                        «ТОП10 ошибок при выборе подрядчика»?</div>
                    <div class="portfolio-modal__btns">
                        <div class="portfolio-modal__btn portfolio-modal__btn_active" data-value="yes"><span>Да</span>
                        </div>
                        <div class="portfolio-modal__btn" data-value="no"><span>Нет</span></div>
                    </div>
                </div>

                <button class="portfolio-modal__submit" type="submit">Отправить заявку</button>

                <label class="service-checkbox">
                    <input type="checkbox" name="policy" required>
                    <span></span>
                    <div>Нажимая на кнопку, вы даёте согласие на обработку <a href="/politica">персональных данных</a>
                    </div>
                </label>
            </form>
        </div>
    </div>

</x-service-layout>
