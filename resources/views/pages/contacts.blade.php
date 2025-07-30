<x-layout>
    <x-slot:meta>
        <title>{{ $page->title }}</title>
        <meta name="description" content="{{ $page->description }}">

        <meta property="og:site_name" content="Артель и С">
        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://arteli-stroy.ru/{{ $page->link }}">
        <meta property="og:image" content="https://arteli-stroy.ru/{{ $page->image }}">
        <meta property="og:image:type" content="image/webp">

        @if (!$page->indexing)
            <meta name="robots" content="noindex,follow">
        @endif

        <x-plagins />
    </x-slot:meta>

    <main>

        <div class="container">

            <section class="section">

                <x-sidebar />

                <div class="contacts content-900">

                    <ul class="navigation" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <meta itemprop="position" content="0">
                            <a itemprop="item" href="/"><span itemprop="name">Главная</span></a>
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <meta itemprop="position" content="1">
                            <span itemprop="name">{{ $page->h1 }}</span>
                            <div itemprop="item" itemscope="" itemtype="https://schema.org/Thing">
                                <link itemprop="url" href="/{{ $page->link }}">
                            </div>
                        </li>
                    </ul>

                    <div itemprop="inLanguage" itemscope="" itemtype="https://schema.org/Language">
                        <meta itemprop="name" content="Russian">
                        <meta itemprop="alternateName" content="ru">
                    </div>

                    <meta itemprop="name" content="{{ $page->title }}">
                    <link itemprop="url" href="https://arteli-stroy.ru/{{ $page->link }}">
                    <meta itemprop="image" content="https://arteli-stroy.ru/{{ $page->image }}">

                    <article class="article-contacts">

                        <div class="contacts__block">
                            <div class="contacts__info">

                                <h1 class="article__title" itemprop="headline">{{ $page->h1 }}</h1>
                                <div class="contacts__info-block">
                                    <div class="contacts__info-card">
                                        <img src="img/contacts/icon-tel.png" alt="tel">
                                        <h3 class="contacts__info-subtitle">Позвоните нам</h3>
                                        <div class="contacts__text">
                                            <a href="tel:+74952589397" rel="nofollow">+7 (495) 258-93-97</a><br>
                                            <span>
                                                <span>WhatsApp</span>
                                                <a href="https://wa.me/79162527728" rel="nofollow">+7 (916)
                                                    252-77-28</a>
                                                <a href="https://wa.me/79690773306" rel="nofollow">+7 (969)
                                                    077-33-06</a>
                                            </span>
                                        </div>
                                        <button class="button contacts__button modal-open__call">Заказать
                                            звонок</button>
                                    </div>
                                    <div class="contacts__info-card">
                                        <img src="img/contacts/icon-email.png" alt="email">
                                        <h3 class="contacts__info-subtitle">Напишите нам</h3>
                                        <div class="contacts__text">
                                            Идеи? Предложения?<br>
                                            Мы открыты для<br>
                                            любых вопросов!
                                        </div>
                                        <button class="button contacts__button mail__open">Написать на почту</button>
                                    </div>
                                    <div class="contacts__info-card">
                                        <img src="img/contacts/icon-message.png" alt="message">
                                        <h3 class="contacts__info-subtitle">Обратная связь</h3>
                                        <div class="contacts__text">Поделитесь мнением<br> о нашей работе, чтобы<br> мы
                                            стали лучше!</div>
                                        <button class="button contacts__button allFeedback-block__open">Оставить
                                            отзыв</button>
                                    </div>
                                </div>


                            </div>

                            <div class="contacts__form">
                                <h3 class="contacts__subtitle">Есть вопросы?</h3>
                                <h2 class="article__title">Оставьте свой номер и мы свяжемся с Вами!</h2>
                                <form class="form contacts__form-send" method="post" id="form-contacts">
                                    @csrf
                                    <input style="display:none;" class="anti-spam" type="text" name="anti-spam">
                                    <input class="form__input contacts__form-input" type="text" name="name-contacts"
                                        placeholder="Имя" required minlength="2" maxlength="15">
                                    <input class="form__input contacts__form-input phone" type="tel"
                                        name="tel-contacts" placeholder="+7" required>
                                    <input type="hidden" name="token" class="token">

                                    <button class="button contacts__form-button" type="submit">Заказать
                                        звонок</button>

                                    <div class="contacts-form__checkbox">
                                        <input type="checkbox" name="accept" id="accept-contacts"
                                            class="checkbox-input" required>
                                        <label for="accept-contacts" class="checkbox-label">
                                            <span><span>Настоящим подтверждаю, что я ознакомлен(-а) и согласен(-а) с
                                                    условиями</span><a href="politica" target="_blank">Политикой
                                                    конфиденциальности</a></span>
                                        </label>
                                    </div><!-- end checkbox -->

                                </form>
                            </div>
                        </div><!-- /end contacts__block -->

                        <h2 class="article__title">Реквизиты</h2>

                        <div class="contacts__price">

                            <div class="contacts__price-left price-wrap price-wrap__left">
                                <h3 class="price-title price-title__left">ООО "Артель и С"</h3>
                                <div class="box box-left">

                                    <ul>
                                        <li>
                                            <p><span>ОГРН: </span>1165024052863</p>
                                        </li>
                                        <li>
                                            <p><span>ИНН: </span>5024164085</p>
                                        </li>
                                        <li>
                                            <p><span>КПП: </span>502401001</p>
                                        </li>
                                        <li>
                                            <p><span>ОКПО: </span>01766572</p>
                                        </li>
                                        <li>
                                            <p><span>ОКТМО: </span>46744000</p>
                                        </li>
                                        <li>
                                            <p><span>ОКВЭД: </span>41.20 - Строительство жилых и нежилых зданий</p>
                                        </li>
                                        <li>
                                            <p><span>р/с: </span>40702810140000024930</p>
                                        </li>
                                        <li>
                                            <p><span>к/с: </span>30101810400000000225</p>
                                        </li>
                                        <li>
                                            <p><span>Банк: </span>ПАО СБЕРБАНК</p>
                                        </li>
                                        <li>
                                            <p><span>БИК: </span>044525225</p>
                                        </li>
                                        <li>
                                            <p><span>Тел: </span><a href="tel:+74952589397" rel="nofollow">+7 (495)
                                                    258-93-97 </a></p>
                                        </li>
                                        <li>
                                            <p><span>E-mail: </span><a href="mailto:info@arteli-stroy.ru"
                                                    target="_blank" rel="nofollow">info@arteli-stroy.ru</a></p>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <div class="contacts__price-right price-wrap price-wrap__right">
                                <h3 class="price-title price-title__right">ИП Сташков Д.В</h3>
                                <div class="box box-right">

                                    <ul>
                                        <li>
                                            <p><span>ОГРНИП: </span>318692000028191</p>
                                        </li>
                                        <li>
                                            <p><span>ИНН: </span>593200021646</p>
                                        </li>
                                        <li>
                                            <p><span>р/с: </span>40802810500000708575</p>
                                        </li>
                                        <li>
                                            <p><span>к/с: </span>30101810145250000974</p>
                                        </li>
                                        <li>
                                            <p><span>Банк: </span>АО «Тинькофф Банк»</p>
                                        </li>
                                        <li>
                                            <p><span>БИК: </span>044525974</p>
                                        </li>
                                        <li>
                                            <p><span>Тел: </span><a href="tel:+74952589397" rel="nofollow">+7 (495)
                                                    258-93-97 </a></p>
                                        </li>
                                        <li>
                                            <p><span>E-mail: </span><a href="mailto:info@arteli-stroy.ru"
                                                    target="_blank" rel="nofollow">info@arteli-stroy.ru</a></p>
                                        </li>
                                    </ul>

                                </div>

                            </div>

                        </div><!-- /end contacts__price -->

                        <div class="contacts__socials">
                            <h2 class="article__title">Социальные сети и мессенджеры</h2>
                            <div class="contacts__socials-wrapper">
                                <span class="socials socials__contacts" data-external
                                    data-href="https://www.youtube.com/@arteli-stroy" target="_blank">
                                    <img src="/img/interface/youtube.svg" alt="youtube icon" title="youtube">
                                </span>
                                <span class="socials socials__contacts" data-external
                                    data-href="https://t.me/artelistroy" target="_blank">
                                    <img src="/img/interface/telegram.svg" alt="telegram icon" title="telegram">
                                </span>
                                <span class="socials socials__contacts" data-external
                                    data-href="https://wa.me/79162527728" target="_blank">
                                    <img src="/img/interface/whatsapp.svg" alt="whatsApp" title="WhatsApp">
                                </span>
                                <span class="socials socials__contacts">
                                    <img src="/img/interface/e-mail.svg" alt="Email" title="E-mail"
                                        class="mail__open">
                                </span>
                            </div>
                        </div>
                    </article>

                </div>
                <!-- /.contacts -->

            </section>

        </div> <!-- .container -->

    </main>

</x-layout>
