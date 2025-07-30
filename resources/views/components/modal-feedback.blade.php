<!--noindex-->
<!-- Modal call -->
<div class="overlay modal-feedback">
    <div class="modal">
        <button class="modal__close-btn"></button>
        <!-- /.modal__close -->
        <div class="modal__content">
            <div class="modal__title">
                <h3>Оставьте, пожалуйста, ваш отзыв</h3>
            </div>
            <form class="form modal__form" method="POST" id="form-feedback">
                @csrf
                <input style="display:none;" class="anti-spam" type="text" name="anti-spam">
                <input class="form__input" type="text" name="name-feedback" id="name-feedback"
                    placeholder="Введите Имя" required minlength="2" maxlength="30">
                <textarea name="wishes-feedback" cols="30" rows="3" id="wishes-feedback" placeholder="Ваш отзыв" required
                    minlength="3"></textarea>
                <input type="hidden" name="token" class="token">

                <div class="checkbox">
                    <input type="checkbox" name="accept" id="accept-feedback" class="checkbox-input" required>
                    <label for="accept-feedback" class="checkbox-label">
                        <span><span>Я ознакомлен(-а) с </span><a href="/politica" target="_blank">Политикой
                                конфиденциальности</a></span>
                    </label>
                </div><!-- end checkbox -->

                <button class="button btn-anim t-shadow" id="submit-feedback" type="submit">Отправить</button>
            </form>
            <!-- /.modal__title -->
        </div>
        <!-- /.modal__content -->
    </div>
    <!-- /.modal -->
</div>
<!-- /.modal -->
<!--/noindex-->
