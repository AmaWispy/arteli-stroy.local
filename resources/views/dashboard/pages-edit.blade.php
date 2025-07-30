<x-dashboard.layout>
    <form class="w-100 mx-auto" action="/update-page" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $page->id }}">

        <div class="mb-5">
            <label for="h1" class="block mb-2 text-sm font-medium text-gray-900 ">H1</label>
            <input type="text" id="h1" name="h1"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="H1 заголовок" value="{{ $page->h1 }}" />
            @error('h1')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
            <input type="text" id="title" name="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Title" value="{{ $page->title }}" />
            @error('title')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
            <input type="text" id="description" name="description"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Description" value="{{ $page->description }}" />
            @error('description')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="image_big">Meta tags image</label>
            <input type="text" id="img_big" name="img_big"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="img/pages/...promo.webp" value="{{ $page->image }}" />
            @error('img_big')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center mb-10">
            <input name="indexing" id="indexing" type="checkbox"
                class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                {{ $page->indexing ? 'checked' : '' }}>
            <label for="indexing" class="ms-2 text-sm font-medium text-gray-900">Индексировать</label>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Обновить</button>
    </form>
</x-dashboard.layout>
