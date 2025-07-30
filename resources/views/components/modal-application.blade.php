<!--noindex-->
<div class="overlay modal-application">
    <div class="modal">
        <button class="modal__close-btn"></button>
        <div class="modal__content">
            <div class="modal__title">
                <div>Консультация бесплатно</div>
                <h3>Оставьте, пожалуйста, ваши координаты и мы с Вами свяжемся.</h3>
            </div>
            <form class="form modal__form" method="POST" id="form-application">
                @csrf
                <input style="display:none;" class="anti-spam" type="text" name="anti-spam">
                <input class="form__input" type="text" name="name-application" id="name-application"
                    placeholder="Введите Имя" required minlength="2" maxlength="15">
                <input class="form__input phone" type="tel" name="phone-application" id="phone-application"
                    placeholder="+7" required>
                <textarea name="wishes-application" id="wishes-application" placeholder="Сообщение" required></textarea>
                <input type="hidden" name="token" class="token">

                <div class="checkbox">
                    <input type="checkbox" name="accept-application" id="accept-application" class="checkbox-input"
                        required>
                    <label for="accept-application" class="checkbox-label">
                        <span><span>Я ознакомлен(-а) с </span><a href="/politica" target="_blank">Политикой
                                конфиденциальности</a></span>
                    </label>
                </div><!-- end checkbox -->

                <button class="button btn-anim t-shadow" id="submit-application" type="submit">Отправить</button>
            </form>
            <!-- /.modal__title -->
        </div>
        <!-- /.modal__content -->
    </div>
    <!-- /.modal -->
</div>
<!-- /.modal-application -->
<!--/noindex-->
