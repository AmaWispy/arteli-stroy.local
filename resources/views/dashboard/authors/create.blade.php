<x-dashboard.layout>
    <form class="w-100 mx-auto" action="/create-author" method="post">
        @csrf

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Имя</label>
            <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Имя автора" value="{{ old('name') }}" />
            @error('name')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 ">Ссылка</label>
            <input type="text" id="slug" name="slug"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Ссылка" value="{{ old('slug') }}" />
            @error('slug')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
            <input type="text" id="title" name="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Title" value="{{ old('title') }}" />
            @error('title')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
            <input type="text" id="description" name="description"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Description" value="{{ old('description') }}" />
            @error('description')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="image">Preview image</label>
            <div class="media-field">
                <div class="hidden">
                    <input type="text" id="image" name="image"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="img/pages/...promo-300x.webp" value="{{ old('image', '/') }}" />
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

        <hr class="my-4">

        <div class="mb-5">
            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 ">
                <div class="px-4 py-2 bg-white rounded-b-lg ">
                    <label for="service-content" class="sr-only">Publish post</label>
                    <textarea id="service-content" name="content" rows="50"
                        class="block w-full p-2.5 text-sm text-gray-800 bg-gray-50 border-0 " placeholder="Контент">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-red-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="flex items-center mb-10">
            <input name="published" id="published" type="checkbox"
                class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="published" class="ms-2 text-sm font-medium text-gray-900">Опубликовать</label>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mb-5">
            Создать
        </button>
    </form>

    <x-dashboard.media-popup />
</x-dashboard.layout>
