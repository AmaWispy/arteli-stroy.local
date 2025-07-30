 <!--noindex-->
 <div class="overlay modal-calc">
     <div class="modal">
         <button class="modal__close-btn"></button>
         <div class="modal__content">
             <div class="modal-__title">
                 <h3>Бесплатный расчет стоимости</h3>
             </div>
             <form class="form modal__form" method="POST" id="form-calc">
                 @csrf
                 <input style="display:none;" class="anti-spam" type="text" name="anti-spam">
                 <input class="form__input" type="text" name="name-calc" id="name-calc" placeholder="Введите Имя"
                     required minlength="2" maxlength="15">
                 <input class="form__input phone" type="tel" name="phone-calc" id="phone-calc" required
                     placeholder="+7">
                 <input type="hidden" name="token" class="token">

                 <div class="checkbox">
                     <input type="checkbox" name="accept" id="accept-calc" class="checkbox-input" required>
                     <label for="accept-calc" class="checkbox-label">
                         <span><span>Я ознакомлен(-а) с </span><a href="/politica" target="_blank">Политикой
                                 конфиденциальности</a></span>
                     </label>
                 </div><!-- end checkbox -->

                 <button class="button btn-anim t-shadow" id="submit-calc" type="submit">Заказать</button>
             </form>
             <!-- /.modal__title -->
         </div>
         <!-- /.modal__content -->
     </div>
     <!-- /.modal -->
 </div>
 <!-- /.modal -->
 <!--/noindex-->
