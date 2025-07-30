@props(['name', 'key', 'categories'])

<div class="tab-content border border-slate-200 rounded-lg p-4 data-[active=false]:hidden" data-active=false>
    <h2 class="mb-5 text-center text-3xl">{{ $name }}</h2>
    <input hidden type="text" name="menu[{{$key}}][name]" value="{{$name}}">

    {{-- tools --}}
    <div class="mb-5 flex gap-5 items-center">
        <button type="button"
            class="add-category-btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Добавить
            категорию</button>
    </div>

    {{-- 1 level --}}
    <div 
        class="categories grid gap-2 grid-cols-2 border border-slate-200 rounded-lg p-4"
        data-id={{$key}}
    >
        @if ($categories)
            @foreach ($categories as $categoryId => $category)
                <x-dashboard.menu.category 
                    :parent-id="$key" 
                    :category-id="$categoryId" 
                    :category="$category" 
                />
            @endforeach
        @endif
    </div>
</div>
