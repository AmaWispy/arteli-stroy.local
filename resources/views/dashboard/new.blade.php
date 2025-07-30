<x-dashboard.layout>
    <form class="w-100 mx-auto" action="/create-article" method="post">
        @csrf

        <div class="mb-5">
            <label for="h1" class="block mb-2 text-sm font-medium text-gray-900 ">H1</label>
            <input type="text" id="h1" name="h1"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                   placeholder="H1 заголовок" value="{{ old('h1') }}"/>
            @error('h1')
            <p class="text-red-700">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 ">Категория</label>
            <select id="category_id" name="category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @php
                    foreach ($categories as $category) {
                @endphp
                <option value="{{ $category->id }}">{{ $category->title }}</option>
                @php
                    }
                @endphp
            </select>
            @error('category_id')
            <p class="text-red-700">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="link" class="block mb-2 text-sm font-medium text-gray-900 ">Сcылка</label>
            <input type="text" id="link" name="link"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                   placeholder="Ссылка на статью" value="{{ old('link') }}"/>
            @error('link')
            <p class="text-red-700">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
            <input type="text" id="title" name="title"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                   placeholder="Title" value="{{ old('title') }}"/>
            @error('title')
            <p class="text-red-700">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
            <input type="text" id="description" name="description"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                   placeholder="Description" value="{{ old('description') }}"/>
            @error('description')
            <p class="text-red-700">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="short_title" class="block mb-2 text-sm font-medium text-gray-900 ">Короткий заголовок</label>
            <input type="text" id="short_title" name="short_title"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                   placeholder="Короткий заголовок" value="{{ old('short_title') }}"/>
            @error('short_title')
            <p class="text-red-700">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Preview Текст</label>
            <textarea id="text" name="text" rows="10"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                      placeholder="параграф">{{ old('text') }}</textarea>
            @error('text')
            <p class="text-red-700">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="image">Preview image</label>
            <div class="media-field">
                <div class="hidden">
                    <input type="text" id="image" name="image"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                           placeholder="img/pages/...promo-300x.webp" value="{{ old('image', '/') }}"/>
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

            @error('image')
            <p class="text-red-700">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="image_big">Meta tags image</label>
            <div class="media-field">
                <div class="hidden">
                    <input type="text" id="img_big" name="img_big"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                           placeholder="img/pages/...promo.webp" value="{{ old('img_big', '/') }}"/>
                </div>
                <div class="picture">
                    <div class="flex preview">
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

            @error('img_big')
            <p class="text-red-700 btn">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 ">
                <div class="px-4 py-2 bg-white rounded-b-lg ">
                    <label for="content" class="sr-only">Publish post</label>
                    <textarea id="content" name="content" rows="50"
                              class="block w-full p-2.5 text-sm text-gray-800 bg-gray-50 border-0 "
                              placeholder="Контент">{{ old('content') }}</textarea>
                    @error('content')
                    <p class="text-red-700">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mb-5">
            <label for="author_id" class="block mb-2 text-sm font-medium text-gray-900 ">Автор</label>
            <select id="author_id" name="author_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @php
                    foreach ($authors as $author) {
                @endphp
                <option value="{{ $author->id }}">{{ $author->name }}</option>
                @php
                    }
                @endphp
            </select>
            @error('author_id')
            <p class="text-red-700">{{$message}}</p>
            @enderror
        </div>

        <div class="flex items-center mb-10">
            <input name="indexing" id="indexing" type="checkbox"
                   class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="indexing" class="ms-2 text-sm font-medium text-gray-900">Индексировать</label>
        </div>

        <div class="flex items-center mb-10">
            <input name="publicated" id="publicated" type="checkbox"
                   class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="publicated" class="ms-2 text-sm font-medium text-gray-900">Опубликовать</label>
        </div>

        <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
            Создать
        </button>
    </form>

    <x-dashboard.media-popup/>
</x-dashboard.layout>
