<!--noindex-->
<!-- stopgap -->
<div class="stopgap">
    <div class="bold">
        <span class="warning">Бесплатная консультация</span>
        <form method="post" class="stopgap__form" id="form-stopgap">
            @csrf
            <input style="display:none;" class="anti-spam" type="text" name="anti-spam">
            <input class="contacts__form-input phone" type="tel" name="tel-stopgap" placeholder="+7" required>
            <input type="hidden" name="token" class="token">

            <button class="button stopgap-form__button" type="submit">Получить</button>
        </form>
    </div>
    <img src="/img/interface/stopgap.webp" alt="stopgap" class="stopgap__img">
</div><!-- end stopgap -->
<!--/noindex-->
