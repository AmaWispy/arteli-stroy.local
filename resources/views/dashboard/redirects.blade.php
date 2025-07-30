<x-dashboard.layout>

  <div class="mb-5 flex justify-center">
    <a href="{{ route('dashboard-redirects-new') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Создать перенаправление</a>
  </div>

  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            From
          </th>
          <th scope="col" class="px-6 py-3">
            To
          </th>
          
          <th scope="col" class="px-6 py-3">
            <span class="sr-only">Edit</span>
          </th>
        </tr>
      </thead>
      <tbody>

        @php 
          foreach ($redirects as $redirect) {
        @endphp
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{ $redirect->from }}
            </th>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{ $redirect->to }}
            </th>
            <td class="px-6 py-4 text-right">
              <a href="/dashboard/redirects/{{ $redirect->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            </td> 
          </tr>
        @php
          }
        @endphp
      </tbody>
    </table>
  </div>

</x-dashboard.layout>
