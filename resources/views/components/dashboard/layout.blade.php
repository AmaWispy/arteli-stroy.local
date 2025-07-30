<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/dashboard/style.css')
</head>

<body>
    <header class="bg-white shadow pl-72">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
        </div>
    </header>

    <main>

        <div class="mx-auto max-w-7xl lg:pl-64">
            {{ $slot }}
        </div>
    </main>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidenav">
        <div
            class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <ul class="space-y-2">
                @php
                    $routes = [
                        '/dashboard' => 'Старые Услуги',
                        '/dashboard/services' => 'Новые услуги',
                        '/dashboard/articles' => 'Статьи',
                        '/dashboard/categories' => 'Категории',
                        '/dashboard/portfolio' => 'Портфолио',
                        '/dashboard/pages' => 'Основные страницы',
                        '/dashboard/redirects' => 'Перенаправления',
                        '/dashboard/media' => 'Медиа',
                        '/dashboard/leads' => 'Заявки',
                        '/dashboard/menu' => 'Меню',
                        '/dashboard/authors' => 'Авторы',
                        '/dashboard/how-to' => 'Инструкции'
                    ];
                @endphp
                @foreach ($routes as $route => $title)
                    <li>
                        <a href="{{ $route }}"
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg aria-hidden="true"
                                class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3">{{ $title }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div
            class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20 border-r border-gray-200 dark:border-gray-700">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <div class="block px-4 py-2 text-sm text-white">{{ auth()->user()->role }}</div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="block px-4 py-2 text-sm text-white" type="submit">Выйти</button>
            </form>
        </div>
    </aside>

    </div>

    @if (session('status'))
        <div
            class="bg-lime-500 text-white flex justify-center items-center w-64 h-16 rounded fixed bottom-10 left-1/2 -translate-x-1/2 text-center">
            {{ session('status') }}
        </div>
    @endif

    <script src="/js/dashboard/script.min.js?ver={{ str()->random() }}"></script>
    <style>
        #media-popup {
            background: rgba(0, 0, 0, .8);
        }

        .picture .preview {
            max-width: 600px;
            max-height: 600px;
            margin: 10px 0;
        }

        .picture .preview.small {
            max-width: 300px;
            max-height: 300px;
        }

        .picture .preview img {
            object-fit: contain;
            width: 100%;
        }

        #headlessui-portal-root {
            z-index: 9999;
        }

        .tox-tinymce-aux {
            /*z-index: 20 !important;*/
        }

        .dropzone-loader {
            display: none;
            position: absolute;
            width: 100%;
            height: 100%;
            background: #fff;
            opacity: .5;
            pointer-events: visible;
            z-index: 10;
            user-select: none;
        }

        .dropzone-loader.show {
            display: block;
        }

        input[data-mce-name="dropzoneInput"] {
            display: none;
        }

        /* Стиль для контейнера dropzone */
        .dropzone .tox-dropzone {
            border: 3px dashed #cccccc;
            !important;
            /* Обводка контейнера */
            border-radius: 10px;
            !important;
            /* Закругленные углы */
            padding: 80px 20px !important;
            /* Внутренний отступ */
            text-align: center;
            /* Текст по центру */
            background-color: #f9f9f9;
            /* Светлый фон */
            transition: background-color 0.3s ease, border-color 0.3s ease;
            cursor: pointer;
            /* Курсор указывает на активную зону */
            margin: 20px 0;
        }

        /* Состояние hover при перетаскивании файлов */
        .dropzone .tox-dropzone.hover {
            background-color: #e0f7fa;
            /* Подсветка фона при наведении */
            border-color: rgb(0, 96, 206);
            /* Подсветка обводки при наведении */
        }

        .dropzone .dropzone-status p {
            margin: 20px 0;
        }

        /* Стиль для внутреннего текста */
        .dropzone .tox-dropzone p {
            font-size: 16px;
            color: #666666;
            /* Серый цвет текста */
            margin-bottom: 15px;
        }

        /* Прячем стандартный input для файлов */
        .dropzone .tox-dropzone input[type="file"] {
            display: none;
        }

        /* Улучшаем визуальное представление для мобильных устройств */
        @media (max-width: 768px) {
            .dropzone .tox-dropzone {
                padding: 10px;
            }

            .dropzone .tox-dropzone p {
                font-size: 14px;
            }

            .dropzone .tox-dropzone .tox-button {
                padding: 8px 16px;
                font-size: 12px;
            }
        }
    </style>
</body>

</html>
