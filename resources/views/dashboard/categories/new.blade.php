<x-dashboard.layout>
    <form class="w-100 mx-auto" action="/create-category" method="post">
        @csrf

        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок</label>
            <input type="text" id="title" name="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="заголовок" value="{{ old('title') }}" />
            @error('title')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="link" class="block mb-2 text-sm font-medium text-gray-900 ">Ссылка</label>
            <input type="text" id="link" name="link"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="service/category" value="{{ old('link') }}" />
            @error('link')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="h1" class="block mb-2 text-sm font-medium text-gray-900 ">H1</label>
            <input type="text" id="h1" name="h1"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="H1 заголовок" value="{{ old('h1') }}" />
            @error('h1')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Текст</label>
            <textarea id="text" name="text" rows="10"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                placeholder="параграф">{{ old('text') }}</textarea>
            @error('text')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="thumbnail">Preview image</label>
            <div class="media-field">
                <div class="hidden">
                    <input type="text" id="thumbnail" name="thumbnail"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="img/pages/...promo-300x.webp" value="{{ old('thumbnail', '/') }}" />
                </div>
                <div class="picture">
                    <div class="flex preview small">
                        <img class="shadow rounded" src="">
                    </div>
                    <button
                        class="btn-pick text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-2">
                        Выбрать изображение
                    </button>
                    <a class="btn-original text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-2"
                        href="#" target="_blank">Оригинал</a>
                </div>
            </div>

            @error('thumbnail')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
            Создать
        </button>
    </form>

    <x-dashboard.media-popup/>
</x-dashboard.layout>
