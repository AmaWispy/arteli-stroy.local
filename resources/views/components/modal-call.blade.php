<!--noindex-->
<div class="overlay modal-call">
    <div class="modal">
        <button class="modal__close-btn"></button>
        
        <div class="modal__content">
            <div class="modal__title">
                <div>Консультация бесплатно</div>
                <h3>Оставьте, пожалуйста, ваш телефон и мы с Вами свяжемся.</h3>
            </div>

            <form class="form form modal__form" method="POST" id="form-call">
                @csrf
                <input style="display:none;" class="anti-spam" type="text" name="anti-spam">
                <input class="form__input" type="text" name="name-call" id="name-call" placeholder="Введите Имя" required minlength="2"
                    maxlength="15">
                <input class="form__input phone" type="tel" name="phone-call" id="phone-call" required placeholder="+7">
                <input type="hidden" name="token" class="token">

                <div class="checkbox">
                    <input type="checkbox" name="accept" id="accept-call" class="checkbox-input" required>
                    <label for="accept-call" class="checkbox-label">
                        <span><span>Я ознакомлен(-а) с </span><a href="/politica" target="_blank">Политикой
                                конфиденциальности</a></span>
                    </label>
                </div>

                <button class="button btn-anim t-shadow" id="submit-call" type="submit">Отправить</button>
            </form>
        </div>
    </div>
</div>
<!--/noindex-->
