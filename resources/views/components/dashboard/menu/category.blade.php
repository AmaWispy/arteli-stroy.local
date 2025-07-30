@props(['parentId', 'categoryId', 'category'])

@php
    $name = $category['name'];
    $list = null;
    if (isset($category['items'])) {
        $list = $category['items'];
    }
@endphp

<div class="category flex flex-col gap-2 border border-slate-200 rounded-lg p-1" data-parent-id={{ $parentId }}
    data-id={{ $categoryId }}>
    <div class="mb-5 flex gap-5 items-center">
        <input
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
            type="text" placeholder="Название категории"
            name="menu[{{ $parentId }}][items][{{ $categoryId }}][name]" value="{{ $name }}" />
        <button type="button"
            class="delete-category-btn focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Удалить</button>
    </div>

    <button
        class="add-second-level-btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
        type="button">
        Добавить уровень
    </button>

    <div class="menu-list flex flex-col gap-2" data-parent-id={{ $parentId }} data-category-id={{ $categoryId }}
        data-type="category">
        @if ($list)
            @foreach ($list as $menuItemId => $menuItem)
                @if (isset($menuItem['items']))
                    @php
                        $name = $menuItem['name'];
                        $items = $menuItem['items'];
                    @endphp
                    @if (isset($menuItem['url']))
                        @php
                            $url = $menuItem['url'];
                        @endphp
                    @else
                        @php
                            $url = '';
                        @endphp
                    @endif
                    <x-dashboard.menu.second-layer-item :parent-id="$parentId" :category-id="$categoryId" :id="$menuItemId"
                        :name="$name" :items="$items" :url="$url" />
                @else
                    <x-dashboard.menu.menu-item :parent-id="$parentId" :category-id="$categoryId" :id="$menuItemId"
                        :item="$menuItem" />
                @endif
            @endforeach
        @endif
    </div>
</div>
