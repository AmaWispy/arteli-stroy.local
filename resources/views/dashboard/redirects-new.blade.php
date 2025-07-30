<x-dashboard.layout>
    <form class="w-100 mx-auto" action="/create-redirect" method="post">
        @csrf

        <div class="mb-5">
            <label for="from" class="block mb-2 text-sm font-medium text-gray-900 ">From</label>
            <input type="text" id="from" name="from"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('from') ring-red-500  @enderror"
                placeholder="/from" value="{{ old('from') }}" />
            @error('from')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="to" class="block mb-2 text-sm font-medium text-gray-900 ">To</label>
            <input type="text" id="to" name="to"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('to') ring-red-500  @enderror"
                placeholder="/to" value="{{ old('to') }}" />
            @error('to')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Создать</button>
    </form>

</x-dashboard.layout>
