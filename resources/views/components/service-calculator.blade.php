<div class="service-calculator">
    <div class="service-calculator__title">Калькулятор оценки стоимости работ</div>
    <div class="service-calculator__types">
        <div class="service-calculator__subtitle">Тип работ</div>
        <ul class="service-calculator__types-list" data-value="reconstruction">
            <li class="service-calculator__types-item" data-value="reconstruction">Реконструкция</li>
            <li class="service-calculator__types-item" data-value="building">Строительство</li>
            <li class="service-calculator__types-item" data-value="decoration">Отделка/Ремонт</li>
            <li class="service-calculator__types-item" data-value="communication">Коммуникации</li>
        </ul>
    </div>
    <div class="service-calculator__square">
        <div class="service-calculator__subtitle">Площадь, м.кв.</div>
        <div class="service-calculator__range">
            <input
                class="service-calculator__range-slider"
                type="range"
                name="square"
                min="1"
                max="1000"
                value="4">
        </div>
        <div class="service-calculator__square-bottom">
            <div class="service-calculator__square-result">25 м.кв.</div>
            <button class="service-calculator__square-dec">-</button>
            <button class="service-calculator__square-inc">+</button>
        </div>
    </div>
    <div class="service-calculator__result">
        Итого: <span class="service-calculator__result-target">0 р.</span>
    </div>
    <form class="service-calculator__form service-general-form" method="post" data-goal="service-calculator">
        @csrf
        <input type="text" class="token" name="token" hidden>
        <label class="service-calculator__form-label" for="service-calculator__form-input">
            Номер телефона
        </label>
        <div class="service-calculator__form-wrap">
            <input class="service-calculator__form-input phone" name="phone" id="service-calculator__form-input" type="tel" placeholder="+7 (913) 999-99-99" required>
            <button class="service-calculator__form-submit">Отправить</button>
        </div>
        <label class="service-checkbox">
            <input type="checkbox" name="policy" required>
            <span></span>
            <div>Нажимая на кнопку, вы даёте согласие на обработку <a href="/politica">персональных данных</a></div>
        </label>
    </form>
</div>