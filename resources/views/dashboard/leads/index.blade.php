<x-dashboard.layout>

    <div class="mb-5 flex justify-center">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Заявки с сайта</h2>
    </div>

    <div class="mb-5 flex justify-center">
        <span class="tracking-tight text-gray-900">Всего осталено заявок: {{ $count }}</span>
    </div>

    @if ($leads->lastPage() > 1)
        <!-- Отображаем пагинацию, только если страниц больше одной -->
        <div class="mt-4 mb-4">
            {{ $leads->appends(request()->query())->links('partials.tailwindPaginator') }}
        </div>
    @endif

    <form class="mb-5" id="monthFilterForm" method="GET" class="mb-6">
        <label for="monthSelector" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
            Month</label>
        <select name="month" id="monthSelector" onchange="document.getElementById('monthFilterForm').submit()"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            <option value="">All Months</option>
            @foreach ($availableMonths as $month)
                <option value="{{ $month }}" {{ request('month') == $month ? 'selected' : '' }}>
                    {{ \Carbon\Carbon::parse($month . '-01')->translatedFormat('F Y') }}
                </option>
            @endforeach
        </select>
    </form>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-200">
            <thead class="text-xs uppercase bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Название
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Тип заявки
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Данные
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-1">
                            Создано
                            <svg class="w-3 h-3 text-gray-500 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                            </svg>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300 dark:divide-gray-600">
                @php
                    $lastDay = null;
                @endphp
        
                @forelse ($leads as $lead)
                    @php
                        $currentDay = \Carbon\Carbon::parse($lead->created_at)->format('Y-m-d');
                    @endphp
        
                    @if ($lastDay !== $currentDay)
                        <tr>
                            <td colspan="4" class="py-2">
                                <div class="flex justify-center">
                                    <span class="inline-block bg-indigo-600 text-white text-sm font-bold py-2 px-4 rounded-full shadow-md">
                                        {{ \Carbon\Carbon::parse($lead->created_at)->translatedFormat('d F Y') }}
                                    </span>
                                </div>
                            </td>
                        </tr>
                    @endif
        
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                        <th scope="row" class="px-6 py-4 font-semibold text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $lead->name }}
                        </th>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $lead->from }}
                        </td>
                        <td class="px-6 py-4">
                            @php
                                $data = \Illuminate\Database\Eloquent\Casts\Json::decode($lead->data);
                            @endphp
                            @foreach ($data as $dataKey => $dataValue)
                                <div class="text-sm leading-5">
                                    <span class="font-medium">{{ \App\Http\Controllers\LeadController::getDataNameByKey($dataKey) }}:</span>
                                    <span>{{ $dataValue }}</span>
                                </div>
                            @endforeach
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            {{ $lead->created_at->format('Y-m-d H:i') }}
                        </td>
                    </tr>
        
                    @php
                        $lastDay = $currentDay;
                    @endphp
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-6 text-center text-gray-600 dark:text-gray-400">
                            Нет заявок за выбранный период.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
              

        @if ($leads->lastPage() > 1)
            <!-- Отображаем пагинацию, только если страниц больше одной -->
            <div class="mt-4 mb-4">
                {{ $leads->appends(request()->query())->links('partials.tailwindPaginator') }}
            </div>
        @endif
    </div>

</x-dashboard.layout>
