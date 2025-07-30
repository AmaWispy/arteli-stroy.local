@if ($prices)
    @php
        $prices = json_decode($prices, true);
        $pricesItems = array_slice($prices, 1);
    @endphp

    <hr class="my-4">

    <div class="mb-5">
        <h2 class="mb-4">Блок цен</h2>

        <div class="mb-5">
            <label for="prices[0]" class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок для блока
                цен</label>
            <input type="text" id="prices[0]" name="prices[0]"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Заголовок для блока цен" value="{{ $prices[0] }}" />

        </div>

        <div class="grid grid-cols-[repeat(3,_1fr)] gap-4">
            @foreach ($pricesItems as $idx => $pricesItem)
                <div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 "
                            for="price_img_1">Изображение</label>
                        <div class="media-field">
                            <div class="hidden">
                                <input type="text" id="price_img_1" name="prices[{{ $idx + 1 }}][img]"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                    placeholder="img/pages/...promo.webp" value="{{ $pricesItem['img'] }}" />
                            </div>
                            <div class="picture">
                                <div class="flex preview">
                                    <img class="shadow rounded" src="/{{ $pricesItem['img'] }}">
                                </div>
                                <button
                                    class="btn-pick text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-2">
                                    Выбрать изображение
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="prices[{{ $idx + 1 }}][title]"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок</label>
                        <input type="text" id="prices[{{ $idx + 1 }}][title]"
                            name="prices[{{ $idx + 1 }}][title]"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="Заголовок" value="{{ $pricesItem['title'] }}" />
                    </div>
                    <div class="mb-5 prices__list">
                        @if (isset($pricesItem['list']))
                            @if (is_array($pricesItem['list']))
                                @foreach ($pricesItem['list'] as $index => $item)
                                    <div class="mb-5 flex justify-between prices__item" data-index={{ $index }}>
                                        <div class="w-[80%]">
                                            <label for="price_list_{{ $idx + 1 }}_{{ $index }}"
                                                class="block mb-2 text-sm font-medium text-gray-900 ">Список</label>
                                            <input type="text" id="price_list_1"
                                                name="prices[{{ $idx + 1 }}][list][{{ $index }}]"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                                placeholder="элемент списка"
                                                value="{{ $pricesItem['list'][$index] }}" />
                                        </div>
                                        <div
                                            class="w-10 h-10 flex justify-center items-center self-end cursor-pointer prices__delete-item-btn">
                                            <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                                                <path fill="red"
                                                    d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                @php
                                    $exploded = explode(';', $pricesItem['list']);
                                @endphp

                                @foreach ($exploded as $index => $item)
                                    <div class="mb-5 flex justify-between prices__item" data-index={{ $index }}>
                                        <div class="w-[80%]">
                                            <label for="price_list_{{ $idx + 1 }}_{{ $index }}"
                                                class="block mb-2 text-sm font-medium text-gray-900 ">Список</label>
                                            <input type="text" id="price_list_1"
                                                name="prices[{{ $idx + 1 }}][list][{{ $index }}]"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                                placeholder="элемент списка" value="{{ $item }}" />
                                        </div>
                                        <div
                                            class="w-10 h-10 flex justify-center items-center self-end cursor-pointer prices__delete-item-btn">
                                            <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                                                <path fill="red"
                                                    d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @else
                            <div class="mb-5 flex justify-between prices__item" data-index=0>
                                <div class="w-[80%] ">
                                    <label for="price_list_{{ $idx + 1 }}"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Список</label>
                                    <input type="text" id="price_list_{{ $idx + 1 }}"
                                        name="prices[{{ $idx + 1 }}][list][0]"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        placeholder="элемент списка" value="" />
                                </div>

                                <div
                                    class="w-10 h-10 flex justify-center items-center self-end cursor-pointer prices__delete-item-btn">
                                    <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                                        <path fill="red"
                                            d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        @endif

                        <a
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block prices__add-item-btn mb-5">Добавить
                            элемент</a>
                    </div>
                    <div class="mb-5 prices__list-notactive">
                        @if (isset($pricesItem['list-notactive']))
                            @foreach ($pricesItem['list-notactive'] as $index => $item)
                                <div class="mb-5 flex justify-between prices__item-notactive"
                                    data-index={{ $index }}>
                                    <div class="w-[80%]">
                                        <label for="price_list_notactive_{{ $idx + 1 }}_{{ $index }}"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">Неактивный
                                            элемент списка</label>
                                        <input type="text"
                                            id="price_list-notactive_{{ $idx + 1 }}_{{ $index }}"
                                            name="prices[{{ $idx + 1 }}][list-notactive][{{ $index }}]"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                            placeholder="элемент списка"
                                            value="{{ $pricesItem['list-notactive'][$index] }}" />
                                    </div>
                                    <div
                                        class="w-10 h-10 flex justify-center items-center self-end cursor-pointer prices__delete-item-notactive-btn">
                                        <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                                            <path fill="red"
                                                d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="mb-5 flex justify-between prices__item-notactive" data-index=0>
                                <div class="w-[80%]">
                                    <label for="price_list_notactive_{{ $idx + 1 }}"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Неактивный
                                        элемент списка</label>
                                    <input type="text" id="price_list-notactive_{{ $idx + 1 }}"
                                        name="prices[{{ $idx + 1 }}][list-notactive][0]"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        placeholder="элемент списка" value="" />
                                </div>
                                <div
                                    class="w-10 h-10 flex justify-center items-center self-end cursor-pointer prices__delete-item-notactive-btn">
                                    <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                                        <path fill="red"
                                            d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        @endif

                        <a
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block prices__add-item-notactive-btn mb-5">Добавить
                            элемент</a>
                    </div>
                    <div class="mb-5">
                        <label for="prices[{{ $idx + 1 }}][price]"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Стоимость</label>
                        <input type="text" id="prices[{{ $idx + 1 }}][price]"
                            name="prices[{{ $idx + 1 }}][price]"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            value="{{ $pricesItem['price'] }}" />
                    </div>
                    <div class="mb-5">
                        <label for="prices[{{ $idx + 1 }}][period]"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Сроки</label>
                        <input type="text" id="prices[{{ $idx + 1 }}][period]"
                            name="prices[{{ $idx + 1 }}][period]"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            value="{{ $pricesItem['period'] }}" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@else
    <div class="mb-5">
        <h2 class="mb-4">Блок цен</h2>

        <div class="mb-5">
            <label for="prices[0]" class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок для блока
                цен</label>
            <input type="text" id="prices[0]" name="prices[0]"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Заголовок для блока цен" value="{{ old('prices[0]') }}" />

        </div>

        <div class="grid grid-cols-[repeat(3,_1fr)] gap-4">
            <div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 " for="price_img_1">Изображение</label>
                    <div class="media-field">
                        <div class="hidden">
                            <input type="text" id="price_img_1" name="prices[1][img]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="img/pages/...promo.webp" value="{{ old('prices[1][img]', '/') }}" />
                        </div>
                        <div class="picture">
                            <div class="flex preview">
                                <img class="shadow rounded" src="">
                            </div>
                            <button
                                class="btn-pick text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-2">
                                Выбрать изображение
                            </button>
                        </div>
                    </div>

                    @error('img_big')
                        <p class="text-red-700 btn">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="price_title_1" class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок</label>
                    <input type="text" id="price_title_1" name="prices[1][title]"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Заголовок" value="{{ old('prices[1][title]') }}" />
                </div>
                <div class="mb-5 prices__list">
                    <div class="mb-5 flex justify-between prices__item" data-index=0>
                        <div class="w-[80%]">
                            <label for="price_list_1"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Список</label>
                            <input type="text" id="price_list_1" name="prices[1][list][0]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="элемент списка" value="{{ old('prices[1][list][0]') }}" />
                        </div>
                        <div
                            class="w-10 h-10 flex justify-center items-center self-end cursor-pointer prices__delete-item-btn">
                            <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                                <path fill="red"
                                    d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <a
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block prices__add-item-btn mb-5">Добавить
                        элемент</a>
                </div>
                <div class="mb-5 prices__list-notactive">
                    <div class="mb-5 flex justify-between prices__item-notactive" data-index=0>
                        <div class="w-[80%]">
                            <label for="price_list_notactive_1"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Неактивный
                                элемент списка</label>
                            <input type="text" id="price_list-notactive_1" name="prices[1][list-notactive][0]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="элемент списка" value="{{ old('prices[1][list-notactive][0]') }}" />
                        </div>
                        <div
                            class="w-10 h-10 flex justify-center items-center self-end cursor-pointer prices__delete-item-notactive-btn">
                            <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                                <path fill="red"
                                    d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <a
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block prices__add-item-notactive-btn mb-5">Добавить
                        элемент</a>
                </div>
                <div class="mb-5">
                    <label for="price_price_1" class="block mb-2 text-sm font-medium text-gray-900 ">Стоимость</label>
                    <input type="text" id="price_price_1" name="prices[1][price]"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ old('prices[1][price]') }}" />
                </div>
                <div class="mb-5">
                    <label for="price_period_1" class="block mb-2 text-sm font-medium text-gray-900 ">Сроки</label>
                    <input type="text" id="price_period_1" name="prices[1][period]"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ old('prices[1][period]') }}" />
                </div>
            </div>
            <div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 " for="price_img_2">Изображение</label>
                    <div class="media-field">
                        <div class="hidden">
                            <input type="text" id="price_img_2" name="prices[2][img]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="img/pages/...promo.webp" value="{{ old('prices[2][img]', '/') }}" />
                        </div>
                        <div class="picture">
                            <div class="flex preview">
                                <img class="shadow rounded" src="">
                            </div>
                            <button
                                class="btn-pick text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-2">
                                Выбрать изображение
                            </button>
                        </div>
                    </div>

                    @error('img_big')
                        <p class="text-red-700 btn">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="price_title_2" class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок</label>
                    <input type="text" id="price_title_2" name="prices[2][title]"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Заголовок" value="{{ old('prices[2][title]') }}" />
                </div>
                <div class="mb-5 prices__list">
                    <div class="mb-5 flex justify-between prices__item" data-index=0>
                        <div class="w-[80%]">
                            <label for="price_list_2"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Список</label>
                            <input type="text" id="price_list_2" name="prices[2][list][0]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="элемент списка" value="{{ old('prices[2][list][0]') }}" />
                        </div>
                        <div
                            class="w-10 h-10 flex justify-center items-center self-end cursor-pointer prices__delete-item-btn">
                            <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                                <path fill="red"
                                    d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <a
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block prices__add-item-btn mb-5">Добавить
                        элемент</a>
                </div>
                <div class="mb-5 prices__list-notactive">
                    <div class="mb-5 flex justify-between prices__item-notactive" data-index=0>
                        <div class="w-[80%]">
                            <label for="price_list_notactive_2"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Неактивный
                                элемент списка</label>
                            <input type="text" id="price_list-notactive_2" name="prices[2][list-notactive][0]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="элемент списка" value="{{ old('prices[2][list-notactive][0]') }}" />
                        </div>
                        <div
                            class="w-10 h-10 flex justify-center items-center self-end cursor-pointer prices__delete-item-notactive-btn">
                            <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                                <path fill="red"
                                    d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <a
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block prices__add-item-notactive-btn mb-5">Добавить
                        элемент</a>
                </div>
                <div class="mb-5">
                    <label for="price_price_2" class="block mb-2 text-sm font-medium text-gray-900 ">Стоимость</label>
                    <input type="text" id="price_price_2" name="prices[2][price]"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ old('prices[2][price]') }}" />
                </div>
                <div class="mb-5">
                    <label for="price_period_2" class="block mb-2 text-sm font-medium text-gray-900 ">Сроки</label>
                    <input type="text" id="price_period_2" name="prices[2][period]"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ old('prices[2][period]') }}" />
                </div>
            </div>
            <div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 " for="price_img_3">Изображение</label>
                    <div class="media-field">
                        <div class="hidden">
                            <input type="text" id="price_img_3" name="prices[3][img]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="img/pages/...promo.webp" value="{{ old('prices[3][img]', '/') }}" />
                        </div>
                        <div class="picture">
                            <div class="flex preview">
                                <img class="shadow rounded" src="">
                            </div>
                            <button
                                class="btn-pick text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-2">
                                Выбрать изображение
                            </button>
                        </div>
                    </div>

                    @error('img_big')
                        <p class="text-red-700 btn">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="price_title_3" class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок</label>
                    <input type="text" id="price_title_3" name="prices[3][title]"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Заголовок" value="{{ old('prices[3][title]') }}" />
                </div>
                <div class="mb-5 prices__list">
                    <div class="mb-5 flex justify-between prices__item" data-index=0>
                        <div class="w-[80%] ">
                            <label for="price_list_3"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Список</label>
                            <input type="text" id="price_list_3" name="prices[3][list][0]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="элемент списка" value="{{ old('prices[3][list][0]') }}" />
                        </div>

                        <div
                            class="w-10 h-10 flex justify-center items-center self-end cursor-pointer prices__delete-item-btn">
                            <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                                <path fill="red"
                                    d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <a
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block prices__add-item-btn mb-5">Добавить
                        элемент</a>
                </div>
                <div class="mb-5 prices__list-notactive">
                    <div class="mb-5 flex justify-between prices__item-notactive" data-index=0>
                        <div class="w-[80%]">
                            <label for="price_list_notactive_3"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Неактивный
                                элемент списка</label>
                            <input type="text" id="price_list-notactive_3" name="prices[3][list-notactive][0]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="элемент списка" value="{{ old('prices[3][list-notactive][0]') }}" />
                        </div>
                        <div
                            class="w-10 h-10 flex justify-center items-center self-end cursor-pointer prices__delete-item-notactive-btn">
                            <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                                <path fill="red"
                                    d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <a
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block prices__add-item-notactive-btn mb-5">Добавить
                        элемент</a>
                </div>
                <div class="mb-5">
                    <label for="price_price_3" class="block mb-2 text-sm font-medium text-gray-900 ">Стоимость</label>
                    <input type="text" id="price_price_3" name="prices[3][price]"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ old('prices[3][price]') }}" />
                </div>
                <div class="mb-5">
                    <label for="price_period_3" class="block mb-2 text-sm font-medium text-gray-900 ">Сроки</label>
                    <input type="text" id="price_period_3" name="prices[3][period]"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ old('prices[3][period]') }}" />
                </div>
            </div>
        </div>
    </div>
@endif
