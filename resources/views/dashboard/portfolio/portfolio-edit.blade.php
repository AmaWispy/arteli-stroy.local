<x-dashboard.layout>
  <form class="w-100 mx-auto" action="/update-portfolio" method="post">
    @csrf

    <input type="hidden" name="id" value="{{ $portfolio->id }}">

    <div class="mb-5">
      <label for="h1" class="block mb-2 text-sm font-medium text-gray-900 ">H1</label>
      <input type="text" id="h1" name="h1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="H1 заголовок" value="{{ $portfolio->h1 }}"/>
      @error('h1')
        <p class="text-red-700">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-5">
      <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 ">Категория</label>
      <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        @php
          foreach ($categories as $category) {
        @endphp
          <option value="{{ $category->id }}" 
                  {{ $category->id === $portfolio->category_id ? "selected" : "" }}
          >
                  {{ $category->title }}
          </option>
        @php
          }
        @endphp
      </select>
      @error('category_id')
        <p class="text-red-700">{{$message}}</p>
      @enderror
    </div>

    @if (auth()->user()->role === 'admin') 
    <div class="mb-5">
      <label for="link" class="block mb-2 text-sm font-medium text-gray-900 ">Сcылка</label>
      <input type="text" id="link" name="link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Ссылка на статью" value="{{ $portfolio->link }}" />
      @error('link')
        <p class="text-red-700">{{$message}}</p>
      @enderror
    </div>
    @endif

    <div class="mb-5">
      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
      <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Title" value="{{ $portfolio->title }}" />
      @error('title')
        <p class="text-red-700">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-5">
      <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
      <input type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Description" value="{{ $portfolio->description }}"/>
      @error('description')
        <p class="text-red-700">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-5">
      <label for="short_title" class="block mb-2 text-sm font-medium text-gray-900 ">Короткий заголовок</label>
      <input type="text" id="short_title" name="short_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Короткий заголовок" value="{{ $portfolio->short_title }}"/>
      @error('short_title')
        <p class="text-red-700">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-gray-900 " for="thumbnail">Preview image</label>
      <input type="text" id="thumbnail" name="thumbnail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="img/pages/...promo-300x.webp" value="{{ $portfolio->thumbnail }}" />
      @error('thumbnail')
        <p class="text-red-700">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-gray-900 " for="image_big">Meta tags image</label>
      <input type="text" id="img_big" name="img_big" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="img/pages/...promo.webp" value="{{ $portfolio->img_big }}" />
      @error('img_big')
        <p class="text-red-700">{{$message}}</p>
      @enderror
    </div>

    @if ($portfolio->card)
      @php
        $card = json_decode($portfolio->card);
      @endphp

      <div class="mb-5 p-5 border border-solid rounded border-[#d1d5db]">
        <h2 class="mb-5">Карточка проекта</h2>

        <div class="mb-5 p-5 border border-solid rounded border-[#d1d5db]">
          <h3 class="mb-5">Галерея</h3>

          <div class="mb-5 grid grid-cols-3 grid-rows-2 gap-5">
            @foreach ($card->galery as $idx => $image)
            <div >
              <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[galery][{{$idx}}]">Изображение</label>
              <div class="media-field">
                  <div class="hidden">
                      <input type="text" id="card[galery][{{$idx}}]" name="card[galery][{{$idx}}]"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="img/pages/...promo.webp" value="{{ $image }}"/>
                  </div>
                  <div class="picture">
                      <div class="flex preview">
                          <img class="shadow rounded" src="/{{ $image }}">
                      </div>
                      <button
                          class="btn-pick text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-2">
                          Выбрать изображение
                      </button>
                  </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>

        <div class="p-5 border border-solid rounded border-[#d1d5db]"">
          <h3 class="mb-5">Данные</h3>

          <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[title]">Заголовок</label>
            <input type="text" id="card[title]" name="card[title]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Заголовок" value="{{ $card->title }}" />
          </div>

          <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[list]">Список</label>
            <textarea maxlength=500 id="card[list]" name="card[list]" rows="3"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
            placeholder="Первый пункт; Второй; ... Последний пункт">{{ $card->list }}</textarea>
          </div>

          <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[price]">Стоимость</label>
            <input type="text" id="card[price]" name="card[price]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Стоимость" value="{{ $card->price }}" />
          </div>

          <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[period]">Сроки</label>
            <input type="text" id="card[period]" name="card[period]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Сроки" value="{{ $card->period }}" />
          </div>

          <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[square]">Площадь</label>
            <input type="text" id="card[square]" name="card[square]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Площадь" value="{{ $card->square }}" />
          </div>

          <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[year]">Год</label>
            <input type="text" id="card[year]" name="card[year]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Год" value="{{ $card->year }}" />
          </div>
        </div>
    </div>
    @else
      <div class="mb-5 p-5 border border-solid rounded border-[#d1d5db]">
        <h2 class="mb-5">Карточка проекта</h2>

        <div class="mb-5 p-5 border border-solid rounded border-[#d1d5db]">
          <h3 class="mb-5">Галерея</h3>

          <div class="mb-5 grid grid-cols-3 grid-rows-2 gap-5">
            <div >
              <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[galery][0]">Изображение</label>
              <div class="media-field">
                  <div class="hidden">
                      <input type="text" id="card[galery][0]" name="card[galery][0]"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="img/pages/...promo.webp" value="{{ old('card[galery][0]', '/') }}"/>
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
            </div>
            <div >
              <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[galery][1]">Изображение</label>
              <div class="media-field">
                  <div class="hidden">
                      <input type="text" id="card[galery][1]" name="card[galery][1]"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="img/pages/...promo.webp" value="{{ old('card[galery][1]', '/') }}"/>
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
            </div>
            <div >
              <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[galery][2]">Изображение</label>
              <div class="media-field">
                  <div class="hidden">
                      <input type="text" id="card[galery][2]" name="card[galery][2]"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="img/pages/...promo.webp" value="{{ old('card[galery][2]', '/') }}"/>
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
            </div>
            <div >
              <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[galery][3]">Изображение</label>
              <div class="media-field">
                  <div class="hidden">
                      <input type="text" id="card[galery][3]" name="card[galery][3]"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="img/pages/...promo.webp" value="{{ old('card[galery][3]', '/') }}"/>
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
            </div>
            <div >
              <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[galery][4]">Изображение</label>
              <div class="media-field">
                  <div class="hidden">
                      <input type="text" id="card[galery][4]" name="card[galery][4]"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="img/pages/...promo.webp" value="{{ old('card[galery][4]', '/') }}"/>
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
            </div>
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[galery][5]">Изображение</label>
              <div class="media-field">
                  <div class="hidden">
                      <input type="text" id="card[galery][5]" name="card[galery][5]"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="img/pages/...promo.webp" value="{{ old('card[galery][5]', '/') }}"/>
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
            </div>
          </div>
        </div>

        <div class="p-5 border border-solid rounded border-[#d1d5db]"">
          <h3 class="mb-5">Данные</h3>

          <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[title]">Заголовок</label>
            <input type="text" id="card[title]" name="card[title]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Заголовок" value="{{ old('card[title]') }}" />
          </div>

          <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[list]">Список</label>
            <textarea maxlength=500 id="card[list]" name="card[list]" rows="3"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
            placeholder="Первый пункт; Второй; ... Последний пункт">{{ old('card[list]') }}</textarea>
          </div>

          <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[price]">Стоимость</label>
            <input type="text" id="card[price]" name="card[price]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Стоимость" value="{{ old('card[price]') }}" />
          </div>

          <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[period]">Сроки</label>
            <input type="text" id="card[period]" name="card[period]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Сроки" value="{{ old('card[period]') }}" />
          </div>

          <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[square]">Площадь</label>
            <input type="text" id="card[square]" name="card[square]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Площадь" value="{{ old('card[square]') }}" />
          </div>

          <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="card[year]">Год</label>
            <input type="text" id="card[year]" name="card[year]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Год" value="{{ old('card[year]') }}" />
          </div>
        </div>
    </div>
    @endif

    <div class="mb-5">
      <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 ">
        <div class="px-4 py-2 bg-white rounded-b-lg ">
          <label for="content" class="sr-only">Publish post</label>
          <textarea id="content" name="content" rows="50" class="block w-full p-2.5 text-sm text-gray-800 bg-gray-50 border-0 " placeholder="Контент">{{ $portfolio->content }}</textarea>
          @error('content')
            <p class="text-red-700">{{$message}}</p>
          @enderror
        </div>
      </div>
    </div>

    <div class="mb-5">
      <label for="author_id" class="block mb-2 text-sm font-medium text-gray-900 ">Автор</label>
      <select id="author_id" name="author_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        @php
          foreach ($authors as $author) {
        @endphp
          <option value="{{ $author->id }}"
                  {{ $author->id === $portfolio->author_id ? "selected" : "" }}
          >
            {{ $author->name }}
          </option>
        @php
          }
        @endphp
      </select>
      @error('author_id')
        <p class="text-red-700">{{$message}}</p>
      @enderror
    </div>

    <div class="flex items-center mb-10">
      <input name="indexed" 
             id="indexed" 
             type="checkbox" 
             class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
             {{ $portfolio->indexed ? "checked" : "" }}
       >
      <label for="indexed" class="ms-2 text-sm font-medium text-gray-900">Индексировать</label>
    </div>

    <div class="flex items-center mb-10">
      <input name="published" 
             id="published" 
             type="checkbox" 
             class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
             {{ $portfolio->published ? "checked" : "" }}
       >
      <label for="published" class="ms-2 text-sm font-medium text-gray-900">Опубликовать</label>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Обновить</button>
  </form>

  <div class="w-100 absolute top-20 right-4">
    <button id="delete-article" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Удалить статью</button>
  </div>

  <div id="confirm-deletion" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div id="modal" class="relative p-4 w-full max-w-md max-h-full">
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" id="modal-close">
          <svg class="w-3 h-3 pointer-events-none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
        <form class="p-4 md:p-5 text-center" method="post" action="/delete-portfolio">
          @csrf

          <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Подтвердить удаление?</h3>
          <input type="hidden" name="id" value="{{$portfolio->id}}">
          <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
            Да, удалить
          </button>
          <button id="cancel-deletion" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Нет, отмена</button>
        </form>
      </div>
    </div>
  </div>

  <x-dashboard.media-popup/>
</x-dashboard.layout>
