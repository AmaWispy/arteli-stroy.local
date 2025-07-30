<!--noindex-->
<!-- Modal help -->
<div class="overlay modal-help">
    <div class="modal">
        <button class="modal__close-btn"></button>
        <!-- /.modal__close -->
        <div class="modal__content">
            <div class="modal__title">
                <div>Оставьте Ваш телефон и мы Вам поможем</div>
                <h3>Не можете найти нужную информацию?</h3>
            </div>
            <form class="form modal__form" method="POST" id="form-help">
                @csrf
                <input style="display:none;" class="anti-spam" type="text" name="anti-spam">
                <input class="form__input" type="text" name="name-help" id="name-help" placeholder="Введите Имя"
                    required minlength="2" maxlength="15">
                <input class="form__input phone" type="tel" name="phone-help" id="phone-help" required
                    placeholder="+7">
                <input type="hidden" name="token" class="token">

                <div class="checkbox">
                    <input type="checkbox" name="accept" id="accept-help" class="checkbox-input" required>
                    <label for="accept-help" class="checkbox-label">
                        <span><span>Я ознакомлен(-а) с </span><a href="/politica" target="_blank">Политикой
                                конфиденциальности</a></span>
                    </label>
                </div><!-- end checkbox -->

                <button class="button btn-anim t-shadow" id="submit-help" type="submit">Отправить</button>
            </form>
            <!-- /.modal__title -->
        </div>
        <!-- /.modal__content -->
    </div>
    <!-- /.modal -->
</div>
<!-- /.modal -->
<!--/noindex-->
