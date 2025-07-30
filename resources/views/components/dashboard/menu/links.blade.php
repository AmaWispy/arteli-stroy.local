@props(['links'])

<div class="relative">
    <div class="p-4 border border-slate-200 rounded-lg sticky top-0">
        <!-- Filters (not scrollable) -->
        <div class="mb-4 flex flex-col gap-2">
            <select id="filter-category" class="p-2 border rounded">
                <option value="">Все категории</option>
                @foreach (collect($links)->pluck('category')->unique() as $category)
                    <option value="{{ $category }}">{{ ucfirst($category) }}</option>
                @endforeach
            </select>

            <select id="filter-version" class="p-2 border rounded">
                <option value="">Все версии</option>
                <option value="new">Новая</option>
                <option value="old">Старая</option>
            </select>
        </div>

        <!-- Scrollable link list -->
        <div class="flex flex-col gap-2 w-72 max-h-screen overflow-y-auto" id="link-list"
            data-type="links">
            @foreach ($links as $link)
                <div class="link-item w-full p-2 bg-slate-100 border border-slate-200 rounded-lg cursor-pointer"
                    data-category="{{ $link['category'] }}" data-version="{{ $link['version'] }}"
                    data-title="{{ $link['title'] }}" data-slug="{{ $link['slug'] }}">
                    <div class="text-sm">{{ $link['title'] }}</div>
                    <div class="text-xs">{{ $link['slug'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
