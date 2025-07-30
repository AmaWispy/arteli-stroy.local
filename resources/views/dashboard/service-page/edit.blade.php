<x-dashboard.layout>
    <form class="w-100 mx-auto" action="/update-service" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $service->id }}">

        <div class="mb-5">
            <label for="h1" class="block mb-2 text-sm font-medium text-gray-900 ">H1</label>
            <input type="text" id="h1" name="h1"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="H1 заголовок" value="{{ $service->h1 }}" />
            @error('h1')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 ">Категория</label>
            <select id="category_id" name="category_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id === $service->category_id ? 'selected' : '' }}>
                        {{ $category->title }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        @if (auth()->user()->role === 'admin')
            <div class="mb-5">
                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 ">Сcылка</label>
                <input type="text" id="slug" name="slug"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Ссылка на статью" value="{{ $service->slug }}" />
                @error('slug')
                    <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
        @endif

        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
            <input type="text" id="title" name="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Title" value="{{ $service->title }}" />
            @error('title')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
            <textarea id="description" name="description" rows="5"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                placeholder="Description">{{ $service->description }}</textarea>
            @error('description')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="short_title" class="block mb-2 text-sm font-medium text-gray-900 ">Короткий заголовок</label>
            <input type="text" id="short_title" name="short_title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Короткий заголовок" value="{{ $service->short_title }}" />
            @error('short_title')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="text_preview" class="block mb-2 text-sm font-medium text-gray-900 ">Preview Текст</label>
            <textarea maxlength="255" id="text_preview" name="text_preview" rows="5"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                placeholder="параграф">{{ $service->text_preview }}</textarea>
            @error('text_preview')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        @php
            if (empty($service->image_preview)) {
                $service->image_preview = '/';
            }
        @endphp
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="image">Preview image</label>
            <div class="media-field">
                <div class="hidden">
                    <input type="text" id="image_preview" name="image_preview"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="img/pages/...promo-300x.webp" value="{{ $service->image_preview }}" />
                </div>
                <div class="picture">
                    <div class="flex preview small">
                        <img class="shadow rounded" src="{{ url($service->image_preview) }}">
                    </div>
                    <button
                        class="btn-pick text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-2">
                        Выбрать изображение
                    </button>
                    <a class="btn-original text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-2"
                        href="{{ url($service->image_preview) }}" target="_blank">Оригинал</a>
                </div>
            </div>

            @error('image_preview')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        @php
            if (empty($service->image)) {
                $service->image = '/';
            }
        @endphp
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="image_big">Meta tags image</label>
            <div class="media-field">
                <div class="hidden">
                    <input type="text" id="image" name="image"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="img/pages/...promo.webp" value="{{ $service->image }}" />
                </div>
                <div class="picture">
                    <div class="flex preview">
                        <img class="shadow rounded" src="{{ url($service->image) }}">
                    </div>
                    <button
                        class="btn-pick text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-2">
                        Выбрать изображение
                    </button>
                    <a class="btn-original text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-2"
                        href="{{ url($service->image) }}" target="_blank">Оригинал</a>
                </div>
            </div>

            @error('image')
                <p class="text-red-700 btn">{{ $message }}</p>
            @enderror
        </div>

        @php
            $prices = $service->prices;
        @endphp
        <x-dashboard.service-page.prices-edit :prices="$prices" />

        @if ($service->price_table)
            <hr class="my-4">

            @php
                $priceTable = json_decode($service->price_table, true);
            @endphp

            <div class="mb-5">
                <h2 class="mb-4">Таблица с ценами</h2>

                <div class="mb-5">
                    <label for="table[0]" class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок</label>
                    <input type="text" id="table[0]" name="table[0]"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Заголовок" value="{{ $priceTable[0] }}" />

                </div>

                <div class="mb-5">
                    <label for="table[1]" class="block mb-2 text-sm font-medium text-gray-900 ">Описание</label>
                    <textarea id="table[1]" name="table[1]" rows="3"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Описание">{{ $priceTable[1] }}</textarea>
                </div>

                <div class="price-table">
                    <div class="price-table__categories">
                        @if (isset($priceTable[2]))
                            @foreach ($priceTable[2] as $idx => $priceTableItem)
                                <div class="mb-5 p-5 border border-solid rounded border-[#d1d5db] price-table__category"
                                    data-current="{{ $idx }}">
                                    <div class="mb-5">
                                        <label for="table[2][{{ $idx }}][0]"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">Категория</label>
                                        <input type="text" id="table[2][{{ $idx }}][0]"
                                            name="table[2][{{ $idx }}][0]"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                            placeholder="Категория" value="{{ $priceTableItem[0] }}" />

                                    </div>
                                    <div class="price-table__rows">
                                        @foreach (array_slice($priceTableItem, 1) as $rowIdx => $row)
                                            <div
                                                class="grid grid-cols-[repeat(3,_1fr)_40px] gap-4 mb-4 price-table__row">
                                                <div>
                                                    <label
                                                        for="table[2][{{ $idx }}][{{ $rowIdx + 1 }}][name]"
                                                        class="block mb-2 text-sm font-medium text-gray-900 ">Наименование
                                                        работ</label>
                                                    <input type="text"
                                                        id="table[2][{{ $idx }}][{{ $rowIdx + 1 }}][name]"
                                                        name="table[2][{{ $idx }}][{{ $rowIdx + 1 }}][name]"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                                        placeholder="Наименование работ"
                                                        value="{{ $row['name'] }}" />
                                                </div>
                                                <div>
                                                    <label
                                                        for="table[2][{{ $idx }}][{{ $rowIdx + 1 }}][measure]"
                                                        class="block mb-2 text-sm font-medium text-gray-900 ">Ед.
                                                        изм.</label>
                                                    <select
                                                        id="table[2][{{ $idx }}][{{ $rowIdx + 1 }}][measure]"
                                                        name="table[2][{{ $idx }}][{{ $rowIdx + 1 }}][measure]"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                        <option {{ $row['measure'] === 'шт.' ? 'selected' : '' }}
                                                            value="шт.">шт.</option>
                                                        <option
                                                            {{ $row['measure'] === 'м²' || $row['measure'] === 'м2' ? 'selected' : '' }}
                                                            value="м²">м²</option>
                                                        <option
                                                            {{ $row['measure'] === 'м³' || $row['measure'] === 'м3' ? 'selected' : '' }}
                                                            value="м³">м³</option>
                                                        <option {{ $row['measure'] === 'п.м.' ? 'selected' : '' }}
                                                            value="п.м.">п.м.</option>
                                                        <option {{ $row['measure'] === 'см' ? 'selected' : '' }}
                                                            value="см">см</option>
                                                        <option
                                                            {{ $row['measure'] === 'к-т (комплект)' ? 'selected' : '' }}
                                                            value="к-т (комплект)">к-т (комплект)</option>
                                                        <option {{ $row['measure'] === 'т' ? 'selected' : '' }}
                                                            value="т">т</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label
                                                        for="table[2][{{ $idx }}][{{ $rowIdx + 1 }}][price]"
                                                        class="block mb-2 text-sm font-medium text-gray-900 ">Цена</label>
                                                    <input type="number"
                                                        id="table[2][{{ $idx }}][{{ $rowIdx + 1 }}][price]"
                                                        name="table[2][{{ $idx }}][{{ $rowIdx + 1 }}][price]"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                                        placeholder="300" value="{{ $row['price'] }}" />
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
                                        @endforeach
                                    </div>
                                    <a
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block price-table__add-row-btn mb-5">Добавить
                                        строку</a>
                                    <a
                                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:max-w-[200px] px-5 py-2.5 text-center block price-table__delete-category">Удалить
                                        категорию</a>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <a
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block price-table__add-category-btn">Добавить
                        категорию</a>
                </div>
            </div>
        @else
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
                                            placeholder="Наименование работ"
                                            value="{{ old('table[2][0][1][name]') }}" />
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
        @endif

        <hr class="my-4">

        @if ($service->faq)
            <div class="mb-5 faq p-5 border border-solid rounded border-[#d1d5db]">
                <h2 class="mb-4">FAQ</h2>

                <div class="faq__wrapper mb-5 flex flex-col gap-5">
                    @php
                        $faq = json_decode($service->faq, true);
                    @endphp
                    @foreach ($faq as $idx => $item)
                        <div class="faq__item flex gap-5">
                            <div class="grow">
                                <div class="mb-5">
                                    <label for="faq[{{ $idx }}][question]"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Вопрос</label>
                                    <input type="text" id="faq[{{ $idx }}][question]"
                                        name="faq[{{ $idx }}][question]"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        placeholder="Вопрос" value="{{ $item['question'] }}" />
                                </div>
                                <div>
                                    <label for="faq[{{ $idx }}][answer]"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Ответ</label>
                                    <textarea maxlength=500 id="faq[{{ $idx }}][answer]" name="faq[{{ $idx }}][answer]"
                                        rows="3"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                        placeholder="Ответ">{{ $item['answer'] }}</textarea>
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
                    @endforeach
                </div>
                <a
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block faq__add">Добавить
                    вопрос</a>
            </div>
        @else
            <div class="mb-5 faq p-5 border border-solid rounded border-[#d1d5db]">
                <h2 class="mb-4">FAQ</h2>

                <div class="faq__wrapper mb-5 flex flex-col gap-5">
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
                <a
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block faq__add">Добавить
                    вопрос</a>
            </div>
        @endif

        <hr class="my-4">

        @if ($service->tiles)
            @if (str_contains($service->tiles, '||') || str_contains($service->tiles, '::'))
                @php
                    $tiles = "";
                    $oldTiles = explode('||', $service->tiles);
                @endphp
            @else
                @php
                    $tiles = json_decode($service->tiles, true);
                    $oldTiles = "";
                @endphp
            @endif
            
            <x-dashboard.service-page.tiles.edit :tiles="$tiles" :old-tiles="$oldTiles" />
        @else
            <x-dashboard.service-page.tiles.create />
        @endif

        <hr class="my-4">


        @if ($service->portfolio)
            @php
                $selected_cards = json_decode($service->portfolio);
            @endphp

            <div class="mb-5 p-5 border border-solid rounded border-[#d1d5db]">
                <h2 class="mb-4">Портфолио</h2>

                <div class="p-5 border border-solid rounded border-[#d1d5db] flex flex-col gap-5">
                    @foreach ($cards as $card)
                        <label>
                            <input type="checkbox" value="{{ $card['id'] }}" name="cards[]"
                                {{ in_array($card['id'], $selected_cards) ? 'checked' : '' }}> {{ $card['title'] }}
                        </label>
                    @endforeach
                </div>
            </div>
        @else
            <div class="mb-5 p-5 border border-solid rounded border-[#d1d5db]">
                <h2 class="mb-4">Портфолио</h2>

                <div class="p-5 border border-solid rounded border-[#d1d5db] flex flex-col gap-5">
                    @foreach ($cards as $card)
                        <label>
                            <input type="checkbox" value="{{ $card['id'] }}" name="cards[]">
                            {{ $card['title'] }}
                        </label>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="mb-5">
            <label for="text_title" class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок перед
                контентом</label>
            <input type="text" id="text_title" name="text_title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Заголовок перед контентом" value="{{ $service->text_title }}" />
            @error('text_title')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 ">
                <div class="px-4 py-2 bg-white rounded-b-lg ">
                    <label for="content" class="sr-only">Publish post</label>
                    <textarea id="service-content" name="text" rows="50"
                        class="block w-full p-2.5 text-sm text-gray-800 bg-gray-50 border-0 " placeholder="Контент">{{ $service->text }}</textarea>
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
                    <option value="{{ $author->id }}" {{ $author->id === $service->author_id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
            @error('author_id')
                <p class="text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center mb-10">
            <input name="is_indexed" id="is_indexed" type="checkbox"
                class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                {{ $service->is_indexed ? 'checked' : '' }}>
            <label for="is_indexed" class="ms-2 text-sm font-medium text-gray-900">Индексировать</label>
        </div>

        <div class="flex items-center mb-10">
            <input name="is_published" id="is_published" type="checkbox"
                class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                {{ $service->is_published ? 'checked' : '' }}>
            <label for="is_published" class="ms-2 text-sm font-medium text-gray-900">Опубликовать</label>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
            Обновить
        </button>
    </form>

    <form class="mt-10" action="/change-design" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $service->id }}">
        <button type="submit"
            class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            Сменить дизайн
        </button>
    </form>

    <div class="w-100 absolute top-20 right-4">
        <button id="delete-article" type="button"
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
            Удалить статью
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
                <form class="p-4 md:p-5 text-center" method="post" action="/delete-service">
                    @csrf

                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Подтвердить удаление?</h3>
                    <input type="hidden" name="id" value="{{ $service->id }}">
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
