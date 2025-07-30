<x-dashboard.layout>
    @if (auth()->user()->role === 'admin')
        <div class="mb-5 flex justify-center">
            <a href="{{ route('create-how-to') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Добавить
                инструкцию</a>
        </div>
    @endif

    @if (count($items) === 0)
        <p>Инструкций не найдено</p>
    @else
        <ul class="flex flex-col border border-slate-200 rounded p-2">
            @foreach ($items as $item)
                <li class="flex justify-between items-center p-2 border-b-2 border-slate-200 last:border-0">
                    <a class="text-xl text-blue-600 hover:underline" href="{{ $item['link'] }}"
                        target="_blank">{{ $item['title'] }}</a>

                    @if (auth()->user()->role === 'admin')
                        <a href="/dashboard/how-to/{{ $item['id'] }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Обновить</a>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
</x-dashboard.layout>
