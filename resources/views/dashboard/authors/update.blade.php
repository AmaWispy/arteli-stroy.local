<x-dashboard.layout>
    <form class="w-100 mx-auto" action="/update-author" method="post">
        @csrf

        <input name="id" type="text" hidden value="{{$author->id}}">

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Имя</label>
            <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Имя автора" value="{{ $author->name }}" />
            @error('name')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 ">Ссылка</label>
            <input type="text" id="slug" name="slug"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Ссылка" value="{{ $author->slug }}" />
            @error('slug')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
            <input type="text" id="title" name="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Title" value="{{ $author->title }}" />
            @error('title')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
            <input type="text" id="description" name="description"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Description" value="{{ $author->description }}" />
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
                        placeholder="img/pages/...promo-300x.webp" value="{{ $author->image }}" />
                </div>
                <div class="picture">
                    <div class="flex preview small">
                        <img class="shadow rounded" src="{{ url($author->image) }}">
                    </div>
                    <button
                        class="btn-pick text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-2">
                        Выбрать изображение
                    </button>
                    <a class="btn-original text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-2"
                        href="{{ url($author->image) }}" target="_blank">Оригинал</a>
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
                        class="block w-full p-2.5 text-sm text-gray-800 bg-gray-50 border-0 " placeholder="Контент">{{ $author->content }}</textarea>
                    @error('content')
                        <p class="text-red-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="flex items-center mb-10">
            <input name="published" id="published" type="checkbox"
                class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                {{ $author->published ? 'checked' : '' }}>
            <label for="published" class="ms-2 text-sm font-medium text-gray-900">Опубликовать</label>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mb-5">
            Создать
        </button>
    </form>

    <div class="w-100 absolute top-20 right-4">
        <button id="delete-article" type="button"
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
            Удалить
        </button>
    </div>

    <div id="confirm-deletion" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div id="modal" class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    id="modal-close">
                    <svg class="w-3 h-3 pointer-events-none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <form class="p-4 md:p-5 text-center" method="post" action="/delete-author">
                    @csrf

                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Подтвердить удаление?</h3>
                    <input type="hidden" name="id" value="{{ $author->id }}">
                    <button data-modal-hide="popup-modal" type="submit"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Да, удалить
                    </button>
                    <button id="cancel-deletion" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Нет,
                        отмена</button>
                </form>
            </div>
        </div>
    </div>

    <x-dashboard.media-popup />
</x-dashboard.layout>
