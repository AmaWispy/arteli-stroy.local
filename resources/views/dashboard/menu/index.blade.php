<x-dashboard.layout>
    @if (!$menu)
        {{-- tabs --}}
        <div class="tab-buttons flex justify-between mb-5">
            @php
                $names = ['Строительство', 'Реконструкция', 'Ремонт', 'Отделка', 'Утепление', 'Инженерные сети'];
            @endphp

            @foreach ($names as $name)
                <x-dashboard.menu.tab-button :name="$name" />
            @endforeach
        </div>

        <form method="POST" action="/menu">
            @csrf

            <div class="flex gap-5">
                <div class="menu-wrapper flex-grow">
                    {{-- Item with menu --}}
                    @php
                        $categories = array();
                    @endphp
                    @foreach ($names as $key => $name)
                        <x-dashboard.menu.tab-content :name="$name" :key="$key" :categories="$categories" />
                    @endforeach
                </div>

                {{-- Links --}}
                <x-dashboard.menu.links :links="$links" />
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Сохранить</button>
        </form>
    @else
        @php
            $menu = json_decode($menu->menu, true);
        @endphp
        
        {{-- tabs --}}
        <div class="tab-buttons flex justify-between mb-5">

            @foreach ($menu as $parent)
                @php
                    $name = $parent['name'];
                @endphp
                <x-dashboard.menu.tab-button :name="$name" />
            @endforeach
        </div>

        <form class="py-10" method="POST" action="/menu">
            @csrf

            <div class="flex gap-5">
                <div class="menu-wrapper flex-grow">
                    {{-- Item with menu --}}
                    @foreach ($menu as $key => $parent)
                        @php
                            $name = $parent['name'];
                            $categories = null;

                            if (isset($parent['items'])) {
                                $categories = $parent['items'];
                            }
                        @endphp
                        <x-dashboard.menu.tab-content :name="$name" :key="$key" :categories="$categories" />
                    @endforeach
                </div>

                {{-- Links --}}
                <x-dashboard.menu.links :links="$links" />
            </div>

            <button 
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 absolute top-6 right-6 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                type="submit"
            >
                Сохранить
            </button>
        </form>
    @endif
</x-dashboard.layout>
