<x-dashboard.layout>
    <form class="w-100 mx-auto" action="/create-how-to" method="post">
        @csrf

        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Название</label>
            <input type="text" id="title" name="title"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                   placeholder="Как редактировать ..." value="{{ old('title') }}"/>
            @error('title')
            <p class="text-red-700">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="link" class="block mb-2 text-sm font-medium text-gray-900 ">Ссылка</label>
            <input type="text" id="link" name="link"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                   placeholder="ссылка на файл" value="{{ old('link') }}"/>
            @error('link')
            <p class="text-red-700">{{$message}}</p>
            @enderror
        </div>

        <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
            Добавить
        </button>
    </form>
</x-dashboard.layout>