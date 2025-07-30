<!--noindex-->
<!-- Modal call -->
<div class="overlay modal-mail">
    <div class="modal">
        <button class="modal__close-btn"></button>
        <!-- /.modal__close -->
        <div class="modal__content">
            <div class="modal__title">
                <div>Напишите нам</div>
                <h3>Мы постараемся ответить вам в ближайшее время</h3>
            </div>
            <form class="form modal__form" method="POST" id="form-mail">
                @csrf
                <input style="display:none;" class="anti-spam" type="text" name="anti-spam">
                <input class="form__input" type="email" name="email-mail" id="email-application" placeholder="Email"
                    required>
                <textarea name="wishes-mail" id="wishes-mail" placeholder="Сообщение" required></textarea>
                <input type="hidden" name="token" class="token">

                <div class="checkbox">
                    <input type="checkbox" name="accept" id="accept-mail" class="checkbox-input" required>
                    <label for="accept-mail" class="checkbox-label">
                        <span><span>Я ознакомлен(-а) с </span><a href="/politica" target="_blank">Политикой
                                конфиденциальности</a></span>
                    </label>
                </div><!-- end checkbox -->

                <button class="button btn-anim t-shadow" id="submit-mail" type="submit">Отправить</button>
            </form>
            <!-- /.modal__title -->
        </div>
        <!-- /.modal__content -->
    </div>
    <!-- /.modal -->
</div>
<!-- /.modal -->
<!--/noindex-->
