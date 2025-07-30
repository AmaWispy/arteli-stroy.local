@props(['category'])

@php
    $name = $category['name'];
    $items = $category['items'];
@endphp

<div class="multilevel-menu__category">
    <div class="multilevel-menu__category-name">{{ $name }}</div>
    <ul class="multilevel-menu__list">
        @foreach ($items as $item)
            @if (isset($item['items']))
                <x-menus.second-layer :item="$item" />
            @else
                @if (isset($item['url']) && isset($item['name']))
                    <li class="multilevel-menu__list-item">
                        <a class="multilevel-menu__list-link" href="/{{ $item['url'] }}">{{ $item['name'] }}</a>
                    </li>
                @endif
            @endif
        @endforeach
    </ul>
</div>
