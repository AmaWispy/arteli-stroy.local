@props(['tiles', 'oldTiles'])

<div class="mb-5 tiles p-5 border border-solid rounded border-[#d1d5db]">
    <h2 class="mb-4">Плитка тегов</h2>

    @if ($oldTiles)
        <div class="mb-5">
            <label for="tiles[title]" class="block mb-2 text-sm font-medium text-gray-900 ">Название</label>
            <input type="text" id="tiles[title]" name="tiles[title]"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Название" value="" />
        </div>

        <div class="tiles__wrapper mb-5 flex flex-col gap-5">
            @foreach ($oldTiles as $idx => $item)
                @php
                    $parsed = explode('::', $item);
                    if (!isset($parsed[0]) || !isset($parsed[1])) {
                        continue;
                    }
                @endphp
                <div class="tiles__item grid grid-cols-[repeat(2,_1fr)_40px] gap-5">
                    <div class="mb-5">
                        <label for="tiles[items][{{ $idx }}][link]"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Ссылка</label>
                        <input type="text" id="tiles[items][{{ $idx }}][link]"
                            name="tiles[items][{{ $idx }}][link]"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="Ссылка" value="{{ $parsed[0] }}" />
                    </div>
                    <div class="mb-5">
                        <label for="tiles[items][{{ $idx }}][title]"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок</label>
                        <input type="text" id="tiles[items][{{ $idx }}][title]"
                            name="tiles[items][{{ $idx }}][title]"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="Заголовок" value="{{ $parsed[1] }}" />
                    </div>
                    <div
                        class="w-10 h-10 flex justify-center items-center self-center cursor-pointer tiles__delete-btn">
                        <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                            <path fill="red"
                                d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                            </path>
                        </svg>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="mb-5">
            <label for="tiles[title]" class="block mb-2 text-sm font-medium text-gray-900 ">Название</label>
            <input type="text" id="tiles[title]" name="tiles[title]"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Название" value="{{ $tiles['title'] }}" />
        </div>

        <div class="tiles__wrapper mb-5 flex flex-col gap-5">
            @foreach ($tiles['items'] as $idx => $item)
                <div class="tiles__item grid grid-cols-[repeat(2,_1fr)_40px] gap-5">
                    <div class="mb-5">
                        <label for="tiles[items][{{ $idx }}][link]"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Ссылка</label>
                        <input type="text" id="tiles[items][{{ $idx }}][link]"
                            name="tiles[items][{{ $idx }}][link]"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="Ссылка" value="{{ $item['link'] }}" />
                    </div>
                    <div class="mb-5">
                        <label for="tiles[items][{{ $idx }}][title]"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок</label>
                        <input type="text" id="tiles[items][{{ $idx }}][title]"
                            name="tiles[items][{{ $idx }}][title]"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="Заголовок" value="{{ $item['title'] }}" />
                    </div>
                    <div
                        class="w-10 h-10 flex justify-center items-center self-center cursor-pointer tiles__delete-btn">
                        <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                            <path fill="red"
                                d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                            </path>
                        </svg>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    <a
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block tiles__add">Добавить
        тег</a>
</div>
