{{-- @aware(['categories']) --}}

<nav class="menus">
    <x-header />

    <div class="menu">
        @php
            $items = [
                'О компании' => route('about'),
                'Услуги' => route('service'),
                'Цены' => route('price'),
                'Портфолио' => route('portfolio'),
                'Акции' => route('special-offers'),
                'Отзывы' => route('all-feedback'),
                'Статьи' => route('articles'),
                'Контакты' => route('contacts'),
            ];
        @endphp

        <div class="menu__container">
            <ul class="menu__list" itemscope="" itemtype="https://www.schema.org/SiteNavigationElement" role="menu">
                @foreach ($items as $title => $route)
                    @if ($title === 'Услуги')
                        <li class="menu__list-item desktop-menu__service {{ str_contains(url()->current(), $route) ? 'menu__list-item_active' : '' }}"
                            itemprop="name" role="menuitem">
                            <a class="menu__link" title="{{ $title }}" itemprop="url" href="{{ $route }}">
                                {{ $title }}
                            </a>
                            <svg class="menu__expand" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.1314 16.6339C10.6432 17.122 9.85042 17.122 9.36223 16.6339L1.8637 9.13532C1.37551 8.64714 1.37551 7.85433 1.8637 7.36614C2.35188 6.87795 3.1447 6.87795 3.63288 7.36614L10.2488 13.982L16.8647 7.37004C17.3529 6.88186 18.1457 6.88186 18.6339 7.37004C19.122 7.85823 19.122 8.65104 18.6339 9.13923L11.1353 16.6378L11.1314 16.6339Z"
                                    fill="#262626" />
                            </svg>
                            <x-menus.multilevel-menu :menu="$menu" />
                        </li>
                    @else
                        <li class="menu__list-item {{ url()->current() === $route ? 'menu__list-item_active' : '' }}"
                            itemprop="name" role="menuitem">
                            <a class="menu__link" title="{{ $title }}" itemprop="url" href="{{ $route }}">
                                {{ $title }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <a class="menu__phone" href="tel:+74952589397" rel="nofollow">
                +7 (495) 258-93-97
            </a>
            <div class="menu__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div class="mobile-menu">
        <ul class="mobile-menu__list" itemscope="" itemtype="https://www.schema.org/SiteNavigationElement"
            role="menu">
            @foreach ($items as $title => $route)
                @if ($title === 'Услуги')
                    <li class="mobile-menu__list-item mobile-menu__service" itemprop="name" role="menuitem">
                        <a class="mobile-menu__link mobile-menu__link-services" title="{{ $title }}" itemprop="url"
                            href="{{ $route }}">
                            {{ $title }}
                        </a>
                    </li>
                @else
                    <li class="mobile-menu__list-item" itemprop="name" role="menuitem">
                        <a class="mobile-menu__link" title="{{ $title }}" itemprop="url"
                            href="{{ $route }}">
                            {{ $title }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
        <div class="mobile-menu__footer">
            <button id="call-order-btn" class="button modal-open__call header-btn">Заказать звонок</button>

            <div class="rating">
                <iframe src="https://yandex.ru/sprav/widget/rating-badge/28289659213?type=rating" width="150"
                    height="50" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</nav>
