<x-layout>
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

        @if (!$page->indexing)
            <meta name="robots" content="noindex,follow">
        @endif

        <x-plagins />
    </x-slot:meta>

    <div class="container">

        <div class="content-fluid">

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

            <article class="article" itemprop="articleBody">

                <h1 class="article__title" itemprop="headline">{{ $page->h1 }}</h1>

                <div class="article__block">

                    <div class="estimatesContent">
                        <div class="estimates">
                            <div class="estimates_close"></div>
                            <div class="estimates__menu">
                                <menu class="estimates__menu_block">
                                    <li class="active">1. Демонтажные работы</li>
                                    <li>2. Подготовительные работы</li>
                                    <li>3. Кровельные работы</li>
                                    <li>4. Стены</li>
                                    <li>5. Пол</li>
                                    <li>6. Потолок</li>
                                    <li>7. Фундамент</li>
                                    <li>8. Печи</li>
                                    <li>9. Электрика</li>
                                    <li>10. Сантехника</li>
                                    <li>11. Перекрытия</li>
                                    <li>12. Отделка под ключ</li>
                                    <li>13. Прочие работы</li>
                                    <li>14. Строительство под ключ</li>
                                    <li>15. Монолитные работы</li>
                                    <li>16. Фасадные работы</li>
                                </menu>
                            </div>
                            <div class="estimates__content">

                                <!-- start items 1. Демонтажные работы -->
                                <div class="estimates__items active">
                                    <div class="estimates__title">1. Демонтажные работы</div>
                                    <div class="estimates__typeWork">Демонтажные работы</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.1 Демонтаж фартука кровли</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">95</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.2. Демонтаж покрытия кровли</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.3. Демонтаж «сэндвича» кровли</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.4. Демонтаж перекрытия из ГКЛ, гипсолита</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">290</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.5. Демонтаж тепло-звукоизоляционного слоя</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.6. Демонтаж обрешетки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">170</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.7. Демонтаж фундамента из железобетона</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.8. Демонтаж обшивки стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.9. Демонтаж штукатурного покрытия (стены)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">230</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.10. Демонтаж штукатурного покрытия (потолок)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">280</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.11. Демонтаж подвесного потолка «Амстронг»</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.12. Многоуровневого потолка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.13. Демонтаж реечного потолка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">80</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.14. Демонтаж каркасных стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.15. Демонтаж стен из бруса/ бревна</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.16. Демонтаж кирпичных стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.17. Демонтаж ЖБ стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.18. Демонтаж стяжки (бетон, до 3 см)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.19. Деревянной перегородки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.20. Демонтаж кирпичной кладки в один кирпич</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.21. Демонтаж металлических перегородок</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.22. Стеклянных перегородок</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.23. Демонтаж межкомнатных перегородок (газобетон, пноблок)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">280</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.24. Циклевка стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.25. Демонтаж камня и плитки на клеевой основе</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">355</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.26. Демонтаж досок пола</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.27. Удаление побелки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.28. Удаление краски</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.29. Удаление лака</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">320</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.30. Удаление обоев</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">85</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.31. Демонтаж деревянных лесов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">155</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.32. Демонтаж металлических рамных лесов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">75</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.33. Демонтаж встроенной мебели</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.34. Линолеума</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">80</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.35. Ковролина</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.36. Штучного паркета</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.37. Плитки (керамика) 30 х 30 см и меньше</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.38. Ламината</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">180</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.39. Удаление клея с поверхности пола</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">190</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.40. Масляная краска</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.41. Водоэмульсионная краска</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">320</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.42. Демонтаж плинтуса</td>
                                                <td>п. м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.43. Кабеля электропроводки</td>
                                                <td>п. м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">30</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.44. Дверных порогов</td>
                                                <td>п. м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.45. Демонтаж труб</td>
                                                <td>п. м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.46. Демонтаж светильников</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.47. Демонтаж электроточки</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.48. Демонтаж дверного полотна</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.49. Выключателей, розеток</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">95</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.50. Дверной блок</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.51. Оконный блок</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.52. Демонтаж радиатора</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.53. Шарового смесителя</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.54. Светильника, люстры</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">130</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.55. Демонтаж потолка «Грильято»</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">170</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.56. Демонтаж штукатурки с потолка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">330</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.57. Демонтаж вагонки с потолка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.58. Демонтаж панелей с потолка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.59. Демонтаж побелки и водоэмульсионной краски с потолка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">230</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.60. Зачистка потолка от шпатлевки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">230</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.61. Демонтаж гипсовой плитки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">85</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.62. Демонтаж перегородки из ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">185</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.63. Монолитного бетонного основания (стяжки)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.64. Снятие масляной краски со стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.65. Демонтаж пластиковой плитки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.66. Очистка потолков (побелки, шпатлевка)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">140</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.67. Очистка потолков от масляной краски</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">175</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.68. Очистка потолков от обоев</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.69. Удаление фотообоев, обоев со стен (1 слой)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">110</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.70. Удаление фанеры (1 слой)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">85</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.71. Демонтаж перегородок из бетона (толщина до 10 см)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">875</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.72. Разбивка потолочных рустов</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">260</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.73. Демонтаж подоконников (ПВХ, дерево)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">90</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.74. Демонтаж труб, радиаторов</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.75. Демонтаж ванн</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.76. Демонтаж старого кирпичного фундамента</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.77. Демонтаж бетонного фундамента</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.78. Наименование работ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">355</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.79. Камень и плитка на клеевой основе</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">485</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.80. Шпатлевка (механический способ)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">95</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.81. Фартук кровли</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.82. Водосточные трубы, желоба</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">355</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.83. Демонтаж фундамента ленточного</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.84. Демонтаж опор фундамента</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text" class="input_count"
                                                            placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.85. Демонтаж фундамента монолитного</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.86. Демонтаж фундамента свайного</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>1.87. Демонтаж фундамента блочного</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end items 1 -->

                                <!-- start items 2. Подготовительные работы -->
                                <div class="estimates__items">

                                    <div class="estimates__title">2. Подготовительные работы</div>
                                    <div class="estimates__typeWork">Подготовительные работы</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.1. Удаление с поверхности фасада пыли и загрязнений (мойка,
                                                    сухая чистка)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">85</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.2. Монтаж защитной пленки на окна, двери и другие элементы
                                                    фасада</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">80</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.3. Защита от осадков фасада и лесов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">155</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.4. Защита строительной пленкой архитектурных элементов фасада,
                                                    оконных и дверных проемов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">85</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.5. Деревянные леса (изготовление/сборка)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">225</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.6. Леса металлические рамные (установка)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.7. Строительные леса металлические (сборка)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">90</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.8. Строительные леса деревянные (изготовление + установка)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">230</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.9. Подготовка рабочей зоны, организация хранения инструмента и
                                                    материалов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">510</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.10. Обработка стен бетоноконтактом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">120</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.11. Штукатурка, вывод четкой геометрии</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.12. Оштукатуривание механическое (до 30мм)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.13. Штукатурные сетки (пластик, ячейка 5*5мм)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">140</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.14. Изоляция мастикой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.15. Штукатурка под плитку до 20 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.16. Штукатурка под плитку до 30мм толщиной</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.17. Штукатурка ЦПС до 30 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1030</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.18. В перегородке организация проема</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">550</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.19. Расшивка, шпаклевка стыков (потолок)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">170</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.20. Обмазочная гидроизоляция пола</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">210</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.21. Штукатурка потолков по маякам</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">295</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.22. Устройство выравнивающего наливного пола (3 мм)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">155</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.23. Крепление металлической сетки под штукатурку</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">140</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.24. Заделка швов (стеклоблоки)</td>
                                                <td>пог.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">140</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.25. Изготовление отверстий в стене из бетона</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.26. Монтаж встраиваемого электрощита</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1680</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.27. Установка двери (1 створка) с врезанной фурнитурой</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.28. Опорные площадки (монтаж)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.29. Грунтовка под утеплитель</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.30. Утеплитель (минеральная вата)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.31. Армирование стен (панцерная сетка)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.32. Грунтовка под клинкер</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>2.33. Обработка углов (уголок, клей)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Разбивка, планировка, геодезическое проведение</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Копка вручную при глубине 0,75 м</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Копка траншеи в условиях промерзания грунта на 1,5 м</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Погрузка разработанного грунта лопатами на самосвал</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Рытье траншеи при помощи экскаватора</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Разработка грунта механизированная (экскаватором в отвал)</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Разработка грунта техникой + погрузка в самосвалы</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end items 2 -->

                                <!-- start items 3. Кровельные работы -->
                                <div class="estimates__items">
                                    <div class="estimates__title">3. Кровельные работы</div>

                                    <div class="estimates__typeWork">Кровельные работы</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.1. Монтаж раскатной кровли в два слоя</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.2. Монтаж обвязочного бруса и двух продольных балок с учётом
                                                    крепления анкерами и антисептирования</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.3. Монтаж силового каркаса кровли с учётом межэтажных балок
                                                    перекрытия, опорных фронтальных стоек, стяжек и опорных стоек</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.4. Антисептирование силового каркаса кровли</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">90</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.5. Утепление кровли 250мм из них 50мм контрутепление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.6. Монтаж пароизоляции с учётом проклейки швов и стыков</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">90</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.7. Монтаж гидро-ветрозащиты</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">60</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.8. Монтаж контробрешётки и обрешётки шагом под металлочерепицу
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.9. Монтаж металлочерепицы, с учётом конька и лобовых планок</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">550</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.10. Монтаж прижимного бруска шагом 300 мм с внутренней части
                                                    кровли</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.11. Утепление фронтонов кровли 150 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">210</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.12. Монтаж обрешётки под ОСП на фронтоны кровли с учётом
                                                    формирования оконных проёмов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.13. Монтаж ОСП с одной стороны на фронтоны кровли с учётом
                                                    формирования оконных проёмов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.14. Монтаж водосточной системы Docke</td>
                                                <td>к-т</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">18000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.15. Устройство проходки в кровле 500х700</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.16. Установка мансардных окон</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.17. Битумная черепица</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.18. Керамическая черепица</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.19. Металлочерепица</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.20. Профлист</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.21. Еврошифер (ондулин)</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.22. Подшивка свеса</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>3.23. Освещение (монтаж софитов)</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж стропильной системы</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Замена лаг</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка обрешетки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Контробрешетка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж гидроизоляции</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">110</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Теплоизоляция</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">330</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Утепление стропил</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж ендовы</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка снегозадержателей (трубы)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж водостоков</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж софитов</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство мансардных окон</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Зенитные фонари</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">10000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Структурная стекляная крыша</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">13500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Рамная стекляная крыша</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">10000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж стеклянной конструкции в одно стекло на алюминиевые профили
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">10000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end items 3 -->

                                <!-- start items 4. Стены -->
                                <div class="estimates__items">
                                    <div class="estimates__title">4. Стены</div>
                                    <div class="estimates__typeWork">Стены</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.1. Сборка несущего каркаса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.2. Не несущие каркасные перегородки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">550</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.3. Стены из бруса/бревна</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.4. Стены из пено-газобетона
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.5. Стены из кирпича
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.6. ЖБ стены</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.7. Каркасные стены</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.8. Теплоизоляция (5 см)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">120</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.9. Пароизоляция</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">80</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.10. Ветрозащита (снаружи)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">60</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.11. Монтаж ОСП</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.12. Отделка стен гипсокартоном</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.13. Один слой ГКЛ на ячеечный каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">360</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.14. Один слой ГКЛ на поперечный каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">440</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.15. Два слоя ГКЛ на ячеечный каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">480</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.16. Два слоя ГКЛ на каркас поперечный</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.17. Один слой ГКЛ на клей</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">280</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.18. Два слоя ГКЛ на клей</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">440</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.19. Ниша в стене из ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">280</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.20. Арка из ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.21. Деревянный ячеечный каркас на стену для ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">320</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.22. Поперечный деревянный каркас на стену для ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.23. Ячеечный металлический каркас для ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.24. Поперечный металлический каркас на стену для ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.25. Металлический арочный каркас для ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">280</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.26. Тепло-изоляция, шумоизоляция минеральной ватой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.27. Тепло-изоляция, шумоизоляция пеноплэксом, пенопластом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">140</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.28. Перегородка из гипсокартона</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.29. Один слой с двух сторон на каркас ячеистый 600 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.30. Один слой с каждой стороны, каркас поперечный
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.31. Два слоя с двух сторон на ячеечный каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.32. Два слоя с каждой стороны на поперечный каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.33. Установка деревянного ячеечного каркаса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">370</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.34. Поперечный каркас для перегородок</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.35. Металлический ячеечный каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.36. Поперечный металлический каркас для перегородок</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">120</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.37. Ниша в перегородке</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">480</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.38. Сложная ниша в перегородке</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">950</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.39. Отделка стен вагонкой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.40. Отделка стен блок-хаусом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">460</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.41. Отделка стен имитацией бруса (осина)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.42. Отделка стен имитацией бруса (сосна)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">770</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.43. Отделка стен имитацией бруса (липа)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.45. Отделка стен имитацией бруса (лиственница)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.46. Отделка стен имитацией бруса (кедр)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.47. Отделка стен имитацией бруса (ольха)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.48. Отделка стен имитацией бруса (дуб)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.49. Установка контробрешётки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.50. Нанесение грунтовки/антисептика</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.51. Покраска лазурью в 2 слоя</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.52. Покраска маслом в 1 слой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.53. Отделка стен имитацией бруса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.54. Шпаклевка стен под покраску</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.55. Ошкуривание стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">90</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.56. "Строби", "паутинка"</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.57. Облицовка бумажными обоями без подборки рисунка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">320</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.58. Обои бумажные с подборкой рисунка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">330</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.59. Нанесение винила, шелкографии без подбора рисунка на стены
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.60. Обои, стоимостью более 5 тыс. руб. за 1 рулон</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.61. Бамбуковое обойное покрытие</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.62. Стекло-обои</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">480</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.63. Жидкие обои с подготовкой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.64. Обойная облицовка под окраску</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">220</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.65. Малярные работы по обоям в 2 и более цветов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">440</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.66. Фотообои</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">420</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.67. Текстильные обои</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.68. Пробковые обои</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.69. Обои под покраску</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">180</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.70. Шпаклевка стен под оклейку обоями</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.71. Затирка швов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.72. Плиточная мозаика</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.73. Плитка нестандартного размера</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.74. Монтаж гипсокартона</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.75. Установка фанеры</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">260</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.76. Декоративная венецианская штукатурка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.77. Штукатурка байромикс</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">960</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.78. Сверление плитки</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.79. Дверной проем в перегородке из ГКЛ</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.80. Плинтус из плитки</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.81. Фигурная резка</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.82. Отделка откосов плиткой</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.83. Металлический каркас на дверные откосы</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.84. Армирование углов стен</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.85. Штробление</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">670</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.86. Внешняя отделка стен штукатуркой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.87. Обшивка оконных откосов 1 слой на каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.88. Один слой, клеевая основа</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.89. Два слоя на каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.90. Два слоя на клей</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.91. Дверной откос, один слой, каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.92. Дверной откос, один слой, клеевая основа</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.93. Два слоя, каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.94. Два слоя, клей</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.95. Установка металлического каркаса на оконные откосы под ГКЛ
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">240</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.96. Металлический каркас на дверные откосы</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.97. Отделка стен сайдингом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.98. Шлифовка стен (брус, бревно)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.99. Окрашивание стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">310</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.100. Выравнивающая обрешетка под чистовую отделку</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.101. Отделка керамической плиткой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.102. Отделка керамогранитной плиткой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.103. Отделка клинкерной плиткой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.104. Отделка терракотовой плиткой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.105. Отделка соляным камнем</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">8500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.106. Грунтовка стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">40</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.107. Шпаклевка за один раз</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">240</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.108. Устройство шлакоблочных стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.109. Окрашивание стеклохолста</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">310</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.110. Заделка швов эпоксидной затиркой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.111. Грунтовка (антиплесень)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">40</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.112. Армирование стены штукатурной сеткой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">170</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.113. Ошкуривание и шлифовка стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.114. Монтаж на стена МДФ панелей</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">480</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.115. Шпаклевка за один раз</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">240</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.116. Расширение проемов</td>
                                                <td>м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.117. Укладка керамического бордюра</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">950</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.118. Установка наличников</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.119. Обшивка откосов (ПВХ, МДФ панели)</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.120. Окраска откосов (в/э краска в 2 слоя)</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">120</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.121. Штукатурка арочных откосов (до 10 см)</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">420</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4. 122. Нанесение жидких обоев</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">420</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.123. Шлифовка фанеры</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.124. Поклейка текстильных обоев</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">490</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.125. Облицовка стен (мозаика)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1680</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.126. Облицовка стен (плитка до 15 см)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.127. Отделка сайдингом по обрешетке</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.128. Отделка сайдингом без каркаса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.129. Отделка сайдингом с утеплителем 5 см</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.130. Отделка сайдингом с утеплителем 10 см</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.131. Монтаж паро- гидроизоляции</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">110</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.132. Монтаж деревянного каркаса на кирпич/бетон</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.133. Монтаж металлического каркаса по дереву</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">260</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.134. Монтаж металлического каркаса на кирпич/бетон</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">360</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.135. Демонтаж облицовки фасада (цокольного сайдинга, фасадных
                                                    панелей)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.136. Демонтаж паро- гидроизоляционных материалов (пленка)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">30</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.137. Демонтаж каркаса (обрешетка)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">60</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.138. Фасадные панели без каркаса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.139. Фасадные панели по каркасу</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.140. Монтаж сайдинга «блок-хаус» (с каркасом)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.141. Монтаж сайдинга «блок-хаус» (ут. 5 см)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.142. Монтаж сайдинга «блок-хаус» (ут. 10 см)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">550</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.143. Утепление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">120</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.144. Крепление фасадных углов</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.145. Крепление отливов</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.146. Обрешетка под имитацию бруса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.147. Утеплитель под имитацию бруса (минвата)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">260</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.148. Монтаж панелей имитация бруса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.149. Лакировка панелей имитация бруса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.150. Покраска/пропитка панелей имитация бруса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>

                                            <tr class="calc_row">
                                                <td>4.151. Монтаж клинкерной плитки + затирка швов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.152. Монтаж клинкерных плит нестандартного формата+ затирка швов
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.153. Затирка швов ранее смонтированной клинкерной плитки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.154. Монтаж угловых деталей</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.155. Подрезка клинкера (45 градусов)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.156. Обработка клинкера гидрофобизатором</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.157. Монтаж вентилируемого фасада из керамогранита</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.158. Монтаж вентилируемого фасада из металлокассет</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.159. Монтаж вентилируемого фасада из композитных панелей</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1950</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.160. Монтаж вентилируемого фасада из клинкерной плитки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.161. Монтаж вентилируемого фасада из натурального камня</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>4.162. Монтаж вентилируемого фасада из фиброцементных плит</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Не несущие каркасные перегородки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">550</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Стены из бруса/бревна</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Стены из пено-газобетона</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Стены из кирпича</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>ЖБ стены</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Каркасные стены</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Теплоизоляция (5 см)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">120</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Пароизоляция</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">80</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж ОСП</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка стен гипсокартоном</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Один слой ГКЛ на ячеечный каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">360</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Один слой ГКЛ на поперечный каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">440</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Два слоя ГКЛ на ячеечный каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">480</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Два слоя ГКЛ на каркас поперечный</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Один слой ГКЛ на клей</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">280</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Два слоя ГКЛ на клей</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">440</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Ниша в стене из ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">280</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Арка из ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Деревянный ячеечный каркас на стену для ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">320</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Поперечный деревянный каркас на стену для ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Ячеечный металлический каркас для ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Поперечный металлический каркас на стену для ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Металлический арочный каркас для ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">280</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Теплоизоляция, шумоизоляция минеральной ватой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Тепло-изоляция, шумоизоляция пеноплэксом, пенопластом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">140</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Перегородка из гипсокартона</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Один слой с двух сторон на каркас ячеистый 600 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Один слой с каждой стороны, каркас поперечный</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Два слоя с двух сторон на ячеечный каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Два слоя с каждой стороны на поперечный каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка деревянного ячеечного каркаса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">370</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Поперечный каркас для перегородок</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Металлический ячеечный каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Поперечный металлический каркас для перегородок</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">120</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Ниша в перегородке</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">480</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Сложная ниша в перегородке</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">950</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка стен вагонкой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка контробрешётки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Нанесение грунтовки/антисептика</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Покраска лазурью в 2 слоя</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Покраска маслом в 1 слой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка стен имитацией бруса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Шпаклевка стен под покраску</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Шпаклевка стен под покраску</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Ошкуривание стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">90</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>"Строби", "паутинка"</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Облицовка бумажными обоями без подборки рисунка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">320</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Обои бумажные с подборкой рисунка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">330</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Нанесение винила, шелкографии без подбора рисунка на стены</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Обои, стоимостью более 5 тыс. руб. за 1 рулон</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Бамбуковое обойное покрытие</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Стекло-обои</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">480</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Жидкие обои с подготовкой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Обойная облицовка под окраску</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">220</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Малярные работы по обоям в 2 и более цветов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">440</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Фотообои</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">420</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Текстильные обои</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Пробковые обои</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Обои под покраску</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">180</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Шпаклевка стен под оклейку обоями</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Затирка швов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Плиточная мозаика</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Плитка нестандартного размера</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж гипсокартона</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка фанеры</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">260</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Декоративная венецианская штукатурка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Штукатурка байромикс</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">960</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Сверление плитки</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Дверной проем в перегородке из ГКЛ</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Плинтус из плитки</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Фигурная резка</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка откосов плиткой</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Работы по укладке керамогранита на стену (20х20, 30х30)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Металлический каркас на дверные откосы</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Армирование углов стен</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Штробление</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">670</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Обшивка оконных откосов 1 слой на каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Один слой, клеевая основа</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Дверной откос, один слой, каркас</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Дверной откос, один слой, клеевая основа</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка металлического каркаса на оконные откосы под ГКЛ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">240</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Металлический каркас на дверные откосы</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Окрашивание стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">310</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Выравнивающая обрешетка под чистовую отделку</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка керамической плиткой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка керамогранитной плиткой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка терракотовой плиткой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка соляным камнем</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">8500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Грунтовка стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">40</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Шпаклевка за один раз</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">240</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство шлакоблочных стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Окрашивание стеклохолста</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">310</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Заделка швов эпоксидной затиркой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Грунтовка (антиплесень)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">40</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Армирование стены штукатурной сеткой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">170</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Ошкуривание и шлифовка стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж на стена МДФ панелей</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">480</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Шпаклевка за один раз</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">240</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Расширение проемов</td>
                                                <td>м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Укладка керамического бордюра</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">950</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка наличников</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Обшивка откосов (ПВХ, МДФ панели)</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Окраска откосов (в/э краска в 2 слоя)</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">120</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Штукатурка арочных откосов (до 10 см)</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">420</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Нанесение жидких обоев</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">420</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Шлифовка фанеры</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Поклейка текстильных обоев</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">490</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Облицовка стен (мозаика)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1680</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Облицовка стен (плитка до 15 см)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж деревянного каркаса на кирпич/бетон</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж металлического каркаса по дереву</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">260</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж металлического каркаса на кирпич/бетон</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">360</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Работы по удалению обшивки со стен</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">230</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Снятие облицовки с потолка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">280</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Механизированная штукатурка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Сплошная штукатурка без сетки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Укладка штукатурки по маякам</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Малярные работы</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Штукатурка откосов</td>
                                                <td>п. м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка колонн</td>
                                                <td>п. м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">670</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end items 4 -->

                                <!-- start items 5. Пол -->
                                <div class="estimates__items">
                                    <div class="estimates__title">5. Пол</div>

                                    <div class="estimates__typeWork">Пол</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.1. Лаги, несущие балки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.2. Монтаж балок перекрытия</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.3. Укладка досок по лагам</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.4. Заливка цементного молочка (выравнивание стяжки)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.5. Монтаж шпунтованной доски</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">660</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.6. Лакировка пола с промежуточной шлифовкой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">460</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.7. Фанера, ОСП (монтаж)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">260</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.8. Бетонная стяжка (100 мм)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.9. Стяжка 3 см (с армированием)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.10. Стяжка 6 см (с армированием)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.11. Гидроизоляция</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.12. Линолеум</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.13. Монтаж ламината</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.14. Паркетная доска</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.15. Ковролин</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.16. Монтаж гранита и мрамора</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2240</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.17. Покрытие пола керамогранитом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.18. Плинтуса</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.19. Установка плинтуса из шпона</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.20. Установка порогов</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.21. Плинтус (ПВХ)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">180</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.22. Плинтус (дерево)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.23. Плинтус (керамика)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.24. Укладка плитки на пол по диагонали</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.25. Покрытие пола керамической плиткой (размер 30х30)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.26. Настилка подложки под ламинат, паркетную доску</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.27. Грунтовка (бетоноконтакт)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.28. Рулонная гидроизоляция</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">480</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.29. Устройство теплых (электрического) полов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">580</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.30. Дверные пороги (установка)</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">270</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.31. Дверной ограничитель</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.32. Циклевка паркета</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.33. Укладка рулонного линолеума</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">180</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.34. Облицовка ступеней плиткой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.35. Монтаж паркетной доски (в замок)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.36. Монтаж плинтуса (массив, шпон, МДФ)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">210</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж сухой стяжки пола</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж демпферной ленты</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">120</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Засыпка керамзита</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Укладка простой цементной стяжки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Укладка стяжки, не требующей выравнивания, на цементной основе</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка маяков</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж гидроизоляции для мокрых зон</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">950</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Заливка однослойного эпоксидного пола до 2-2,5 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство пола эпоксидного в 1 слой + выравнивание подслоем
                                                    толщиной 2,5 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж наливного двухслойного эпоксидного пола толщиной 3 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Создание пола декоративного эпоксидного под мрамор не более 2 мм
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1950</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж эпоксидной поверхности на промышленных объектах</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж эпоксидной поверхности на промышленных объектах</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Создание полиуретанового пола</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1890</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство напольного покрытия из полиуретана на промышленных
                                                    объектах</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Заливка двухкомпонентного пола из метилметакрилатной смолы</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж цементно-акрилового наливного пола</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Выравнивание под 3D пол</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство наливного 3D пола</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж пола чернового бетонного</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Укладка пола бетонного</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Нанесение прозрачного слоя</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Нанесение матового/глянцевого финиш лака в 2 слоя</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">770</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Напольное покрытие с кварцевым наполнением в 3 слоя (упрочнение,
                                                    обеспыливание, гидроизоляция)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1780</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Заливка утолщенного наливного пола (упрочнение, обеспыливание,
                                                    гидроизоляция)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1710</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Шлифовка бетонного основания</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Фрезеровка бетонного пола</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Алмазная шлифовка бетона</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Шлифование пола + выравнивание</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Шлифовка покрытия эпоксидного с декоративными свойствами</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Шлифование пола полиуретанового промышленного типа</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Шлифование мозаичной поверхности</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">550</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Полировка напольного покрытия/бетона</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Работы по укладке керамогранита на пол (20х20, 30х30)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Работы по укладке керамогранитной плитки на пол (45х45, 60х60 см)
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Работы по укладке керамогранита на пол (20х40, 20х50)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Работы по укладке керамогранитной плитки на пол (60х120)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.37. Устройство бетонного пола, армированный сеткой с топпингом
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1980</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.38. Устройство бетонного пола с армированием и гидроизоляцией</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2380</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.39. Устройство бетонной стяжки пола с кварцевым песком и топпингом
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.40. Полиуретановые наливные полы</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2475</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.41. Эпоксидные наливные полы</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2530</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.42. Антистатические полы</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2550</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.43. Высоконаполненные полы</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.44. Тонкослойное покрытие пола</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.45. Нанесение пропитки (обеспыливание)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1225</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.46. Монтаж бетонного пола с упрочненным покрытием</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2220</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>5.47. Метилметакрилатные полы</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end items 5 -->

                                <!-- start items 6. Потолок -->
                                <div class="estimates__items">
                                    <div class="estimates__title">6. Потолок</div>

                                    <div class="estimates__typeWork">Потолок</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.1. Шпаклеква потолка под малярные работы</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.2. Шпаклевка потолка под обои</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">550</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.3. Одноуровневый потолок из гипсокартона в 1 слой с ячеечным
                                                    каркасом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">440</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.4. Одноуровневый в 2 слоя</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">520</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.5. Двухуровневый с прямолинейными элементами</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">720</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.6. Двухуровневый потолок с криволинейными элементами</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">960</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.7. Трехуровневый с прямолинейными элементами</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.8. Трехуровневый с криволинейными элементами</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1550</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.9. Потолочный прямоугольный портал</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.10. Установка полукруглого потолочного портала</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.11. Ниша под карниз</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">640</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.12. Ниши для закладки светодиодной ленты</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.13. Деревянный ячеистый каркас одноуровневого потолка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.14. Металлический ячейками каркас одноуровневого потолка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.15. Деревянный каркас двухуровневого потолка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.16. Металлический каркас двухуровневого потолка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.17. Деревянный каркас трехуровневого потолка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.18. Металлический каркас трехуровневого потолка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.19. Отделка гипсокартоном в один слой с каркасом в 400 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">550</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.20. Отделка гипсокартоном в два слоя с каркасом в 400 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.21. Каркас для одноуровневого потолка (дерево) 400 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.22. Работы по монтажу металлического каркаса одноуровневого 400 мм
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.23. Монтаж деревянного каркаса для двух уровневого потолка 400 мм
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.24. Металокаркас для двух уровневого потолка 400 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.25. «Армстронг»</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.26. «Грильято»</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.27. Окраска потолков (в/э краска в 2 слоя)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">170</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.28. Врезка отверстий для точечных светильников (без установки)
                                                </td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.29. Грунтовка криволинейных боковин из гипсокартона</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">65</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.30. Шпаклевка и шлифовка криволинейных боковин</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">370</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.31. Оклейка боковин обоями</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.32. Окраска боковин в 2 слоя</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">270</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.33. Перфорированный уголок</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">190</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.34. Монтаж простого короба</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.35. Монтаж короба с двумя углами (П-образный)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.36. Криволинейный короб с одним углом</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.37. Монтаж криволинейного короба с двумя внешними углами</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.38. Монтаж короба с диодной подсветкой</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">480</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.39. Монтаж П-образного короба с диодной подсветкой с двух сторон
                                                </td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">950</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.40. Установка каркаса под короб</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.41. Плинтус</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>6.42. Молдинг из полиуретана (монтаж)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">168</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end items 6 -->

                                <!-- start items 7. Фундамент -->
                                <div class="estimates__items">
                                    <div class="estimates__title">7. Фундамент</div>

                                    <div class="estimates__typeWork">Фундамент</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.1. Геодезические работы</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.2. Земельные работы (котлован, траншея)</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.3. Заливка бетона М300</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">8000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.4. Геотекстиль</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">123</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.5. Теплоизоляция</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">289</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.6. Гидроизоляция</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">520</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.7. Опалубка</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">15700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.8. Бетонная стяжка (100 мм)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.9. Цоколь (бетонные блоки)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.10. Цоколь (окрашивание в два слоя)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">320</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.11. Гидроизоляция (2 слоя)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">530</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.12. Отмостка (на подушке)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.13. Отмостка (тротуарная плитка по готовому основанию)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.14. Цокольный отлив (монтаж)</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.15. Облицовка цоколя сайдингом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.16. Утепление фундамента</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Фундамент «Перевернутая чаша»</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">12000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Цокольный этаж</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">16000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Строительство заглубленного монолитного фундамента</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">8500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Возведение фундамента на буронабивных сваях</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка винтовых свай</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Фундамент из блоков ФСБ</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка забивных ж/б свай</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="estimates__nameWork">Монтаж паро-гидроизоляции</div>
                                    <table class="table table-tr_td table_td" class="estimates__price">
                                        <tbody>
                                            <tr class="calc_row">
                                                <td>7.17. Цокольный сайдинг под ключ с утеплителем 5 см</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">660</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.18. Цокольный сайдинг под ключ с утеплителем 10 см</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">610</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.19. Цокольный сайдинг под ключ без утеплителя</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">560</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.20. Разработка участка в ручную</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="estimates__nameWork">Засыпка подушки 10-20 см (песок)</div>
                                    <table class="table table-tr_td table_td" class="estimates__price">
                                        <tbody>
                                            <tr class="calc_row">
                                                <td>7.21. Обустройство песчаной (щебневой) подушки</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.22. Монолитная плита с установкой опалубки (бетон) 200мм</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.23. Установка блоков под ленточный фундамент</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="estimates__nameWork">Дренаж кольцевой не глубже 1 м</div>
                                    <table class="table table-tr_td table_td" class="estimates__price">
                                        <tbody>
                                            <tr class="calc_row">
                                                <td>7.24. Дренажная система</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.25. Укладка армированной сетки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.26. Цоколь (ремонт по периметру)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.27. Монтаж отмостки (80 см)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.28. Подъем дома 6х6 с помощью домкратов</td>
                                                <td>см.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.29. Ввод водоподающей трубы</td>
                                                <td>шт</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.30. Ввод электрической трубы</td>
                                                <td>шт</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.31. Разводка труб канализации</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.32. Устройство дренажа</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.33. Дренажные колодцы</td>
                                                <td>шт</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.34. Монтаж водяного теплого пола</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">190</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.35. Устройство коллекторной группы</td>
                                                <td>шт</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">22700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.36. Армирование</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.37. Ленточный 200×400 мм фундамент под забор</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.38. Столбчатый фундамент под забор</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.39. Монолитный фундамент под забор</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.40. Свайно-ростверковый фундамент под забор</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.41. Блочный фундамент под забор</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.42. Отливы под забор</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.43. Кирпичная кладка на ленточный фундамент под забор в 2 кирпича
                                                </td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.44. Замена старого фундамента на монолитную ленту неглубокого
                                                    заложения (ширина 300 мм при высоте цоколя 600 мм)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">13000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.45. Замена на столбчатый (ширина 300 мм при высоте цоколя 600 мм)
                                                </td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">14000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.46. Замена нижних бревен (венцы)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.47. Подъем дома</td>
                                                <td>шт</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">50000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.48. Демонтаж цоколя</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.49. Демонтаж нижних венцов</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.50. Разработка грунта</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.51. Установка опалубки</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">15700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.52. Армирование</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.53. Усиление грунта</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.54. Заливка бетона</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">8000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.55. Демонтаж опалубки</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.56. Инъектирование цементным раствором</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.57. Инъектирование кирпичной кладки</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.58. Инъектирование фундамента из бутового камня</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.59. Инъектирование акрилатным гелем</td>
                                                <td>п.м</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">7600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>7.60. Инъектирование пакеров гипоксидными, полимерными смолами</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">112</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end items 7 -->

                                <!-- start items 8. Печи -->
                                <div class="estimates__items">
                                    <div class="estimates__title">8. Печи</div>
                                    <div class="estimates__typeWork">Печи</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>8.1. Чистка дымохода</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>8.2. Ремонт топки</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>8.3. Замена двери и задвижки</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>8.4. Замена плиты</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>8.5. Ремонт трубы над кровлей</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>8.6. Ремонт сводов и арок</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>8.7. Ремонт колодца печи</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>8.8. Демонтаж трубы</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>8.9. Демонтаж печи</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>8.10. Проверка тяги и поиск неполадок</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>8.11. Устранение трещин</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>8.12. Отштукатуривание стен печи</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>


                                </div><!-- end items 8 -->

                                <!-- start items 9. Электрика -->
                                <div class="estimates__items">
                                    <div class="estimates__title">9. Электрика</div>
                                    <div class="estimates__typeWork">Электрика</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.1. Прокладка кабеля с учетом протяжки в гофру</td>
                                                <td>п.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">130</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.2. Укладка открытой проводки</td>
                                                <td>п.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">85</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.3. Провода в электро-коробе</td>
                                                <td>п.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">85</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.4. Укладка провода в гофре</td>
                                                <td>п.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">95</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.5. Укладка ленточных осветителей</td>
                                                <td>п.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">210</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.6. Сборка, установка и подключение силового ящика</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">12000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.7. Установка подрозетника</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">320</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.8. Накладная электро-точка</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">220</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.9. Замуровка отверстий подрозетников гипсом</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.10. Понижающие трансформаторы</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">360</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.11. Светильники (бра)</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">380</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.12. Люстры (зависит от размеров)</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">950</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.13. Защитные автоматы (одна фаза)</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">360</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.14. Автоматы УЗО, дифференциальные, 3-х фазные</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">520</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.15. Прозвон проводки между точками</td>
                                                <td>точка</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">190</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.16. Элетрощиток (24 автомата)</td>
                                                <td>к-т</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.17. Установка и подключение звонка</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>9.18. Установка и подключение кнопки звонка</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div><!-- end items 9 -->

                                <!-- start items 10. Сантехника -->
                                <div class="estimates__items">
                                    <div class="estimates__title">10. Сантехника</div>

                                    <div class="estimates__typeWork">Сантехника</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.1. Сборка коллекторов на стояках ГВ</td>
                                                <td>к-т</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.2. Установка раковины</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.3. "Мойдодыр"</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.4. Унитаз/биде</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.5. Ванна</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.6. Душевая кабина</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.7. Стиральная машина</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">880</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.8. Посудомоечная машина</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">880</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.9. Аксессуары для ванной комнаты</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.10. Водонагреватель</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.11. Смеситель</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">950</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.12. Фильтры</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.13. Подключение полотенцесушителя</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>10.14. Подключение Радиатора</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div><!-- end items 10 -->

                                <!-- start items 11. Перекрытия -->
                                <div class="estimates__items">
                                    <div class="estimates__title">11. Перекрытия</div>

                                    <div class="estimates__typeWork">Перекрытия</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.1. Монтаж лаг цокольного перекрытия шагом 490мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.2. Антисептирование лаг цокольного перекрытия</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">90</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.3. Монтаж чернового настила цокольного перекрытия дома под
                                                    утеплитель</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.4. Антисептирование чернового настила</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">120</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.5. Монтаж пароизоляции с двух сторон</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">60</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.6. Утепления цокольного перекрытия пристройки 150мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">210</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.7. Монтаж фанеры в два слоя</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.8. Утепления перекрытия межэтажного перекрытия дома 100 мм с
                                                    учётом свесов кровли</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">180</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.9. Монтаж пароизоляции с двух сторон с учётом проклейки швов и
                                                    стыков</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">90</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.10. Монтаж лаг цокольного перекрытия шагом 490мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.11. Антисептирование лаг цокольного перекрытия</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">90</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.12. Антисептирование чернового настила</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">120</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.13. Теплоизоляция, шумоизоляция минеральной ватой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>11.14. Тепло-изоляция, шумоизоляция пеноплэксом, пенопластом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">160</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div><!-- end items 11 -->

                                <div class="estimates__items">
                                    <div class="estimates__title">12. Отделка под ключ</div>
                                    <div class="estimates__typeWork">Отделка под ключ</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="estimates__nameWork">Коттеджи</div>
                                    <table class="table table-tr_td table_td" class="estimates__price">
                                        <tbody>
                                            <tr class="calc_row">
                                                <td>Косметический ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Капитальный ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Дизайнерский класса «евро»</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">8000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Элитный ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">11000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="estimates__nameWork">Таунхаусы</div>
                                    <table class="table table-tr_td table_td" class="estimates__price">
                                        <tbody>
                                            <tr class="calc_row">
                                                <td>Косметический ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Эконом ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Капитальный ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">8000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Люкс ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">10000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="estimates__nameWork">Торговые помещения, магазины</div>
                                    <table class="table table-tr_td table_td" class="estimates__price">
                                        <tbody>
                                            <tr class="calc_row">
                                                <td>Косметический ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Дизайнерский ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Капитальный ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Перепрофилирование помещения</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="estimates__nameWork">Отделка сауны материалы +работа</div>
                                    <table class="table table-tr_td table_td" class="estimates__price">
                                        <tbody>
                                            <tr class="calc_row">
                                                <td>“Стандарт”</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">12000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>“Люкс”</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">17000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>“Премиум”</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">19500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="estimates__nameWork">Ремонта коридора</div>
                                    <table class="table table-tr_td table_td" class="estimates__price">
                                        <tbody>
                                            <tr class="calc_row">
                                                <td>Косметический ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Капитальный ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Элитный ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">8300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="estimates__nameWork">Офисы</div>
                                    <table class="table table-tr_td table_td" class="estimates__price">
                                        <tbody>
                                            <tr class="calc_row">
                                                <td>Косметический ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Капитальный ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">12000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Дизайнерский ремонт</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">12000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div><!-- end items 12 -->

                                <div class="estimates__items">
                                    <div class="estimates__title">13. Прочие работы</div>

                                    <div class="estimates__typeWork">Прочие работы</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.1. Монтаж окон ПВХ</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.2. Установка входной двери металлической</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.3. Монтаж вытяжки и вентиляции для газового котла, газового
                                                    водонагревателя с учётом монтажа проходки в кровле и перекрытия</td>
                                                <td>к-т</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">25000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.4. Установка и подключение газового водонагревателя</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.5. Монтаж газовой трубы с проведением сварочных работ</td>
                                                <td>к-т</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">18000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.6. Монтаж и опрессовка газового котла</td>
                                                <td>к-т</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">10000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.7. Прокладка отопительных и водопроводных труб с учётом монтажа
                                                    в утеплитель</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.8. Установка и подключение коллекторных ящиков</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">9000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.9. Обвязка котла с учётом установки расширительного бака и
                                                    группы безопасности</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">10000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.10. Установка и подключение насосов</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.11. Установка и подключение распределительного коллектора</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.12. Структурное остекление витражное остекление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">8500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.13. Полуструктурное витражное остекление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">7100</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.14. Стоечно-ригельное витражное остекление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">7000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.15. Спайдерное витражное остекление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">13000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.16. Фальш-остекление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.17. Трубопроводный отвод от колодца</td>
                                                <td>м. п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>13.18. Гидроизоляционный слой для фундамента (обмазка)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div><!-- end items 13 -->

                                <div class="estimates__items">
                                    <div class="estimates__title">14. Строительство под ключ</div>

                                    <div class="estimates__typeWork">Строительство под ключ</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Дом из бруса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">15000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Дом из кирпича</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">21000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Каркасный дом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">18000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Быстровозводимый дом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">15000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Дом из оцилиндрованного бревна</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">15000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Модульный дом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">12000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Дом из газобетонных блоков</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">21000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Дом из керамзитовых блоков</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">21000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Веранда, терраса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">12000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Сарай (Хозблок)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">11000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Баня</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">15000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Ленточный фундамент</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монолитный фундамент</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">7500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Столбчатый фундамент</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">7650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Свайно-ростверковый фундамент</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Фундамент УШП</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">10000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>14.17. Поверхностный дренаж глубиной 50 мм</td>
                                                <td>м. п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>14.18. Глубинный дренаж глубиной 100 см</td>
                                                <td>м. п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>14.19. Кольцевой</td>
                                                <td>м. п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>14.20. Пристенный дренаж</td>
                                                <td>м. п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div><!-- end items 14 -->

                                <!-- start items 15. Монолитные работы -->
                                <div class="estimates__items">

                                    <div class="estimates__title">15. Монолитные работы</div>
                                    <div class="estimates__typeWork">Монолитные работы</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Вязка + установка арматурных каркасов/сеток</td>
                                                <td>т</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Заделывание некратных мест кирпичом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Заделывание некратных мест бетоном</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Разборка грунта механизированным способом + погрузка</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Ручная разборка грунта (без крепления котлована)</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Ручная разборка грунта + крепление котлована глубиной до 3 м</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">850</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж бетонных фундаментов-столбов + сборка опалубочной системы
                                                </td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка железобетонных колонн (высота —4 м, периметр — 3 м) +
                                                    устройство опалубки с армированием</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж плоских фундаментных плит из железобетона</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство ленточного основания</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж перегородок из железобетона высотой не более 3 м и толщиной
                                                    не более 200 мм + опалубка</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка ЖБ перекрытий толщиной до 200 мм</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство подпорных и подвальных стен</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство подпорных и подвальных стен</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Бетонная подготовка без армирующей сетки</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Бетонная подготовка с армированием дорожной сеткой в 1 слой</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Ростверк из бетона (верхняя часть свайного основания) с опалубкой
                                                </td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Создание монолитного фундамента из буронабивных свай (комплекс)</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">7300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство промышленных монолитных полов в комплексе</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Работы по монтажу монолитных балок, перемычек</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Работы по устройству резервуаров для фонтанов/бассейнов</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство перекрытия толщиной 150 мм</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">7000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство изделия монолитного толщиной 200 мм</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">7150</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство плиты монолитной толщиной 250 мм</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">7200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство изделия монолитного толщиной 300 мм</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">7300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство ЖБ перекрытия монолитного (опалубка, армирование,
                                                    бетонирование)</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">8500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство безбалочного перекрытия</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">9500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство балочного перекрытия</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">11000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство перекрытий монолитных под ключ</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">25000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка сборных перемычек</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1750</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Заливка швов раствором между плитами</td>
                                                <td>п. м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Технология заливки/укладки бетона миксером</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Заливка/укладка бетона вручную</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство маршей лестничных/площадок</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">8300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Работы по изготовлению лестниц</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">9300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство монолитных чаш фонтанов, бассейнов, купелей и прочих
                                                    резервуаров</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">8600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж крыльца</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4550</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство дорожек/площадок</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Балкон из бетона</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">7000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство полов (200 мм) + шлифовка затирочными/шлифовальными
                                                    машинами</td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Устройство напольного покрытия (200 мм) с высокопрочной поверхностью
                                                </td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Подливка бетонная для комплекса мероприятий по улучшению построек
                                                </td>
                                                <td>м³</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">9400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Подливка бетонная для заглубления конструкций строительных</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">10000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end items 15 -->

                                <!-- start items 16. Фасадные работы -->
                                <div class="estimates__items">

                                    <div class="estimates__title">16. Фасадные работы</div>
                                    <div class="estimates__typeWork">Фасадные работы</div>
                                    <table class="table table-tr_td table_td" class="estimates__tableHead">
                                        <tbody>
                                            <tr class="bold">
                                                <td>Наименование работ</td>
                                                <td>Ед. изм.</td>
                                                <td>Количество</td>
                                                <td>Цена от, руб.</td>
                                                <td>Сумма</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Сборка несущего каркаса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Ветрозащита</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">60</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка стен блок-хаусом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">460</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка стен имитацией бруса (осина)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка стен имитацией бруса (сосна)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">770</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка стен имитацией бруса (липа)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка стен имитацией бруса (лиственница)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка стен имитацией бруса (кедр)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка стен имитацией бруса (ольха)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка стен имитацией бруса (дуб)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">5400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Внешняя отделка стен штукатуркой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка стен сайдингом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Шлифовка стен (брус, бревно)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка клинкерной плиткой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка сайдингом по обрешетке</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка сайдингом без каркаса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка сайдингом с утеплителем 5 см</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка сайдингом с утеплителем 5 см</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка сайдингом с утеплителем 10 см</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж паро- гидроизоляции</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Фасадные панели без каркаса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Фасадные панели по каркасу</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж сайдинга «блок-хаус» (с каркасом)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж сайдинга «блок-хаус» (ут. 5 см)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж сайдинга «блок-хаус» (ут. 10 см)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">550</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Утепление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">120</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Крепление фасадных углов</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">350</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Крепление отливов</td>
                                                <td>м.п.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Обрешетка под имитацию бруса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Утеплитель под имитацию бруса (минвата)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">260</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж панелей имитация бруса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Лакировка панелей имитация бруса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">200</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Покраска/пропитка панелей имитация бруса</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">250</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж клинкерной плитки + затирка швов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Грунтовка оштукатуренного слоя под клинкер</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж клинкерных плит нестандартного формата+ затирка швов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Затирка швов ранее смонтированной клинкерной плитки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж угловых деталей</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Подрезка клинкера (45 градусов)</td>
                                                <td>п.м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Обработка клинкера гидрофобизатором</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">950</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Отделка клинкерной плиткой с шовной затиркой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Заполнение швов специальным раствором + расшивка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">290</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Грунтовка бетоноконтактом под штукатурку</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">160</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж штукатурной сетки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">170</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Оштукатуривание фасада до 30 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">550</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Оштукатуривание фасада более 30 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">650</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Нанесение штукатурки в 2 слоя с армирующей щелочестойкой
                                                    стеклосеткой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">590</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж штукатурки в 3 слоя с армирующей щелочестойкой и панцирной
                                                    стеклосеткой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Шпатлёвка стен со шлифовкой</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Штукатурка камешковая декоративная</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">420</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Покраска фасада</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">345</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Кладка облицовочного кирпича + расшивка</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Затирка швов кладки</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Гидрофобизация фасада из кирпича</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">120</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж цокольного профиля</td>
                                                <td>п. м.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">195</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Утепление фасада минеральной ватой 50 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">560</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Обкладывание фасада минватой 100 мм</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">600</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж искусственного камня бесшовным методом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж искусственного камня с заполнением стыков</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Покрытие натуральным камнем бесшовным методом</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Покрытие натуральным камнем с заполнением стыков</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Гидрофобизация каменного фасада</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">195</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Заполнение криволинейных стыков</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">545</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж паро-гидроизоляции</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Обрешётка деревянная из дерева с выравниванием</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">190</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Обрешётка из дерева на кирпичную или бетонную стену с выравниванием
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">290</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Металлическая обрешётка из дерева + выравнивание</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">340</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Обрешётка из металла на кирпичную или бетонную стену + выравнивание
                                                </td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">400</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж панелей из ПВХ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Обшивка планкеном</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">570</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж профилированных листов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж металлических кассет</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2300</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж фиброцементных панелей</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж композитных плит</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">2800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Нанесение декоративной штукатурки «Короед»</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">800</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Штукатурка стен снаружи (штукатурка фасада короедом)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">900</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Работы по монтажу керамогранита на фасад</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">1700</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Алюминиевое холодное остекление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">13000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Стоечно-ригельное остекление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">13500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Спайдерное (планарное) остекление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">14000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Алюминиевое теплое остекление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">15000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Полуструктурное остекление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">16000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Панорамное остекление</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">17500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Мокрый фасад с утеплителем под ключ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">6500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Вентилируемый навесной фасад с утеплителем под ключ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">4500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Ремонт фасада под ключ</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">3500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Кронштейны в пустотелый кирпич</td>
                                                <td>шт.</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">70</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Монтаж оцинкованной подсистемы</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">450</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Установка керамогранита на открытые кляммеры</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">620</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Базовый слой для монтажа натурального камня (20мм)</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">190</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Парапетные работы с укладкой керамогранита</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">420</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Структурное остекление фасадов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">12500</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                            <tr class="calc_row">
                                                <td>Рамное остекление фасадов</td>
                                                <td>м²</td>
                                                <td class="calc_count">
                                                    <div class="actionButton">
                                                        <div class="minus_count">-</div>
                                                        <input name="input_count" type="text"
                                                            class="input_count" placeholder="0">
                                                        <div class="plus_count">+</div>
                                                    </div>
                                                </td>
                                                <td class="calc_price">9000</td>
                                                <td class="calc_sum">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end items 16 -->

                            </div><!-- end estimates__content -->

                        </div><!-- end estimates -->

                        <div class="estimates__sum fixed">Итого: <span id="calc_sum">0</span> руб. <span
                                class="extimates-text">Сделать заказ или получить консультацию:</span>
                            <a class="mobile-number link" href="tel:+74952589397" rel="nofollow">+7 (495)
                                258-93-97</a>
                        </div>

                    </div><!-- end calc table -->

                </div><!-- end article__block -->

            </article>

        </div><!-- /end container-fluid -->

    </div>
</x-layout>
