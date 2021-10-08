<!-- В этом файле описываем все  всплывающие окна -->

<!-- Popup-JS -->
<div class="popup popup_callback">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close"></div>
			<div class="popup__item d-flex">
				<div class="popup__img">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/popup.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/popup.jpg?_v=1632757662937" alt="">
					</picture>
				</div>
				<div class="popup__form-block">
					<h2>Заказать звонок</h2>
					
					<div class="headen_form_blk">
						<p class="popup__notific">Оставьте заявку и мы свяжемся с Вами в течении 15 минут</p>
						<form action="#" class="form universal_send_form">
							
							<div class="SendetMsg form_msg" style="display:none;">
								Ваше сообщение успешно отправлено.
							</div>

							<div class="form__line">
								<input autocomplete="off" type="text" name="name" data-error="Заполните поля" data-value="Имя" class="popup__form-input input _req">
								<input autocomplete="off" type="text" name="tel" data-error="Заполните поля" data-value="Телефон" class="popup__form-input input _phone _req">
							</div>
							<p class="popup__policy">Заполняя данную форму вы соглашаетесь с <a href="#">политикой
									конфиденциальности</a></p>
							<button type = "button" class="popup__form-btn form__btn btn u_send">Заказать</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <a href="#callback" class="header__popup-link _popup-link">ЗАКАЗАТЬ ЗВОНОК</a> -->
<!-- Popup-JS End -->
