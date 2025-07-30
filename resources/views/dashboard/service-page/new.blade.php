<x-dashboard.layout>
    <form class="w-100 mx-auto" action="/create-service" method="post">
        @csrf

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
            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 ">Категория</label>
            <select id="category_id" name="category_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 ">Сcылка</label>
            <input type="text" id="slug" name="slug"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Ссылка на статью" value="{{ old('slug') }}" />
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
            <label for="short_title" class="block mb-2 text-sm font-medium text-gray-900 ">Короткий заголовок</label>
            <input type="text" id="short_title" name="short_title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Короткий заголовок" value="{{ old('short_title') }}" />
            @error('short_title')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="text_preview" class="block mb-2 text-sm font-medium text-gray-900 ">Preview Текст</label>
            <textarea id="text_preview" name="text_preview" rows="10"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                placeholder="параграф">{{ old('text_preview') }}</textarea>
            @error('text_preview')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="image">Preview image</label>
            <div class="media-field">
                <div class="hidden">
                    <input type="text" id="image_preview" name="image_preview"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="img/pages/...promo-300x.webp" value="{{ old('image_preview', '/') }}" />
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

            @error('image_preview')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="image">Meta tags image</label>
            <div class="media-field">
                <div class="hidden">
                    <input type="text" id="image" name="image"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="img/pages/...promo.webp" value="{{ old('image', '/') }}" />
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

            @error('image')
                <p class="text-red-700 btn">{{ $message }}</p>
            @enderror
        </div>

        <hr class="my-4">

        <x-dashboard.service-page.prices-create />

        <hr class="my-4">

        <div class="mb-5">
            <h2 class="mb-4">Таблица с ценами</h2>

            <div class="mb-5">
                <label for="table[0]" class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок</label>
                <input type="text" id="table[0]" name="table[0]"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Заголовок" value="{{ old('table[0]') }}" />
                @error('table[0]')
                    <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="table[1]" class="block mb-2 text-sm font-medium text-gray-900 ">Описание</label>
                <textarea id="table[1]" name="table[1]" rows="3"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                    placeholder="Описание">{{ old('table[1]') }}</textarea>
                @error('table[1]')
                    <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>

            <div class="price-table">
                <div class="price-table__categories">
                    <div class="mb-5 p-5 border border-solid rounded border-[#d1d5db] price-table__category"
                        data-current="0">
                        <div class="mb-5">
                            <label for="table[2][0][0]"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Категория</label>
                            <input type="text" id="table[2][0][0]" name="table[2][0][0]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="Категория" value="{{ old('table[2][0][0]') }}" />

                        </div>
                        <div class="price-table__rows">
                            <div class="grid grid-cols-[repeat(3,_1fr)_40px] gap-4 mb-4 price-table__row">
                                <div>
                                    <label for="table[2][0][1][name]"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Наименование
                                        работ</label>
                                    <input type="text" id="table[2][0][1][name]" name="table[2][0][1][name]"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        placeholder="Наименование работ" value="{{ old('table[2][0][1][name]') }}" />
                                </div>
                                <div>
                                    <label for="table[2][0][1][measure]"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Ед. изм.</label>
                                    <select id="table[2][0][1][measure]" name="table[2][0][1][measure]"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        <option value="шт.">шт.</option>
                                        <option value="м²">м²</option>
                                        <option value="м³">м³</option>
                                        <option value="п.м.">п.м.</option>
                                        <option value="см">см</option>
                                        <option value="к-т (комплект)">к-т (комплект)</option>
                                        <option value="т">т</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="table[2][0][1][price]"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Цена</label>
                                    <input type="number" id="table[2][0][1][price]" name="table[2][0][1][price]"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        placeholder="300" value="{{ old('table[2][0][1][price]') }}" />
                                </div>
                                <div
                                    class="w-10 h-10 flex justify-center items-center self-end cursor-pointer price-table__delete-btn">
                                    <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                                        <path fill="red"
                                            d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <a
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block price-table__add-row-btn mb-5">Добавить
                            строку</a>
                        <a
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:max-w-[200px] px-5 py-2.5 text-center block price-table__delete-category">Удалить
                            категорию</a>
                    </div>
                </div>

                <a
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block price-table__add-category-btn">Добавить
                    категорию</a>
            </div>
        </div>

        <hr class="my-4">

        <div class="mb-5 faq p-5 border border-solid rounded border-[#d1d5db]">
            <h2 class="mb-4">FAQ</h2>

            <div class="faq__wrapper mb-5 flex flex-col gap-5">
                <div class="faq__item ">
                    <div class="faq__item flex gap-5">
                        <div class="grow">
                            <div class="mb-5">
                                <label for="faq[0][question]"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Вопрос</label>
                                <input type="text" id="faq[0][question]" name="faq[0][question]"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                    placeholder="Вопрос" />
                            </div>
                            <div>
                                <label for="faq[0][answer]"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Ответ</label>
                                <textarea maxlength=500 id="faq[0][answer]" name="faq[0][answer]" rows="3"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                    placeholder="Ответ"></textarea>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 flex justify-center items-center self-center cursor-pointer faq__delete-btn">
                            <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                                <path fill="red"
                                    d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <a
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block faq__add">Добавить
                вопрос</a>
        </div>

        <hr class="my-4">

        <x-dashboard.service-page.tiles.create />

        <div class="mb-5 p-5 border border-solid rounded border-[#d1d5db]">
            <h2 class="mb-4">Портфолио</h2>

            <div class="p-5 border border-solid rounded border-[#d1d5db] flex flex-col gap-5">
                @foreach ($cards as $card)
                    <label>
                        <input type="checkbox" value="{{ $card['id'] }}" name="cards[]"> {{ $card['title'] }}
                    </label>
                @endforeach
            </div>
        </div>

        <div class="mb-5">
            <label for="text_title" class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок перед
                контентом</label>
            <input type="text" id="text_title" name="text_title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Заголовок перед контентом" value="{{ old('text_title') }}" />
            @error('text_title')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 ">
                <div class="px-4 py-2 bg-white rounded-b-lg ">
                    <label for="content" class="sr-only">Publish post</label>
                    <textarea id="service-content" name="text" rows="50"
                        class="block w-full p-2.5 text-sm text-gray-800 bg-gray-50 border-0 " placeholder="Контент">{{ old('text') }}</textarea>
                    @error('text')
                        <p class="text-red-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mb-5">
            <label for="author_id" class="block mb-2 text-sm font-medium text-gray-900 ">Автор</label>
            <select id="author_id" name="author_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
            @error('author_id')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center mb-10">
            <input name="is_indexed" id="is_indexed" type="checkbox"
                class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="is_indexed" class="ms-2 text-sm font-medium text-gray-900">Индексировать</label>
        </div>

        <div class="flex items-center mb-10">
            <input name="is_published" id="is_published" type="checkbox"
                class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="is_published" class="ms-2 text-sm font-medium text-gray-900">Опубликовать</label>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
            Создать
        </button>
    </form>

    <x-dashboard.media-popup/>
</x-dashboard.layout>
