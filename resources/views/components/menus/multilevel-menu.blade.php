@props(['menu'])

@if ($menu)
    @php
        $menu = json_decode($menu->menu, true);
    @endphp

    <div class="multilevel-menu">
        <div class="multilevel-menu__tabs">
            @foreach ($menu as $parent)
                @if (isset($parent['items']))
                    <x-menus.tab-button :title="$parent['name']" />
                @endif
            @endforeach
        </div>
        <div class="multilevel-menu__content">
            @foreach ($menu as $parent)
                @if (isset($parent['items']))
                    @php
                        $categories = $parent['items'];
                    @endphp

                    <div class="multilevel-menu__categories">
                        @foreach ($categories as $category)
                            @if (isset($category['items']))
                                <x-menus.category :category="$category" />
                            @endif
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endif
