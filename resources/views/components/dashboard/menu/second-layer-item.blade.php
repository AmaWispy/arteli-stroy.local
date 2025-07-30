@props(['parentId', 'categoryId', 'id', 'name', 'items', 'url'])

<div 
    class="second-level-menu-item w-full p-2 bg-slate-100 border border-slate-200 rounded-lg cursor-pointer"
    data-parent-id={{$parentId}} 
    data-category-id={{$categoryId}}
    data-id={{$id}}
>
    <div class="flex gap-2 items-center mb-1">
        <input type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
            placeholder="Элемент меню" 
            value="{{$name}}"
            name="menu[{{$parentId}}][items][{{$categoryId}}][items][{{$id}}][name]" 
        />
        <button class="delete-second-layer-btn border-0 bg-transparent min-w-5 max-w-5 h-5" type="button">
            <svg class="h-full pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                    d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
            </svg>
        </button>
    </div>

    @if ($url)
        <div class="text-xs">{{ $url }}</div>
        <input 
            hidden
            type="text"
            value="{{ $url }}" 
            name="menu[{{$parentId}}][items][{{$categoryId}}][items][{{$id}}][url]"
        />
    @endif

    <div 
        class="second-level-menu-list flex flex-col gap-2 pl-2 pb-4" 
        data-parent-id={{$parentId}}
        data-category-id={{$categoryId}} 
        data-menu-id={{$id}} 
        data-type="second-layer"
    >
        @foreach ($items as $itemId => $item)
            <x-dashboard.menu.second-layer-menu-item 
                :parent-id="$parentId"
                :category-id="$categoryId"
                :menu-id="$id"
                :id="$itemId"
                :item="$item"
            />
        @endforeach
    </div>
</div>
