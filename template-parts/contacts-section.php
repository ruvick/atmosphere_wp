<section id="application" class="application">
	<div class="_container">
		<h2 class="title">Оставьте заявку и мы Вам перезвоним:</h2>
		<form action="#" class="application__form form">
			<div class="application__line form__line">
				<input autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Имя"
				class="input _req">
				<input autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Телефон"
				class="input _phone _req">
				<button type="submit" class="form__btn btn">Подробнее</button>
			</div>
			<p>
				Нажимая на кнопку «Отправить» Вы принимаете условия политики конфиденциальности <br>
				в отношении обработки персональных данных
			</p>
		</form>
	</div>
</section>

<section id="contacts-sec" class="contacts-sec">
	<div class="_container">
		<div id="map" class="contacts-sec__map"></div>
		<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script> 

		<script>
			ymaps.ready(init); 

			function init () {
				var myMap = new ymaps.Map("map", {
        // Координаты центра карты
        center:[<?php echo carbon_get_theme_option('map_point') ?>], 
        // Масштаб карты
        zoom: 18,
        // Выключаем все управление картой
        controls: []
      }); 

				var myGeoObjects = [];

    // Указываем координаты метки
    myGeoObjects = new ymaps.Placemark([<?php echo carbon_get_theme_option('map_point') ?>],{
    								// hintContent: '<div class="map-hint">Авто профи, Курск, ул.Комарова, 16</div>',
    								balloonContent: '<div class="map-hint"><?php echo carbon_get_theme_option('text_map') ?>', },{
    									iconLayout: 'default#image',
                    // Путь до нашей картинки
                    iconImageHref:  '<?php bloginfo("template_url"); ?>/img/icons/map-marker.svg',  
                    // Размеры иконки
                    iconImageSize: [36, 55],
                    // Смещение верхнего угла относительно основания иконки
                    iconImageOffset: [38, -115]
                  });

    var clusterer = new ymaps.Clusterer({
    	clusterDisableClickZoom: false,
    	clusterOpenBalloonOnClick: false,
    });
    
    clusterer.add(myGeoObjects);
    myMap.geoObjects.add(clusterer);
    // Отключим zoom
    myMap.behaviors.disable('scrollZoom');

  }
</script>
<div class="contacts-sec__row d-flex">
	<div class="contacts-sec__item">
		<ul>
			<li>Адрес:</li>
			<li>Курская область,</li>
			<li>г. Железногорск,</li>
			<li>ул. Гайдара, д. 5</li>
		</ul>
	</div>
	<div class="contacts-sec__item">
		<ul>
			<li>Часы работы клуба:</li>
			<? $op_wkdays = carbon_get_theme_option("as_club_opening_weekdays"); 
			if (!empty($op_wkdays)){?>
				<li>будни: <? echo $op_wkdays; ?>,</li>
				<?}?> 
				<? $op_wkends = carbon_get_theme_option("as_club_opening_weekends"); 
				if (!empty($op_wkends)){?>
					<li>выходные: <? echo $op_wkends; ?></li>
					<?}?> 
				</ul>
				
				<a href="<?php echo get_permalink(125);?>" class="ofert">Договор публичной оферты</a>
			</div>
<!-- 			<? $sal_depart = carbon_get_theme_option("as_sales_department"); 
			if (!empty($sal_depart)){?>
				<div class="contacts-sec__item">
					<ul>
						<li>Часы работы отдела продаж:</li>
						<li>ежедневно: <? echo $sal_depart; ?></li>
					</ul>
				</div>
				<?}?>  -->
				<div class="contacts-sec__item">
					<ul>
						<li>Контакты:</li>
						<? $tel = carbon_get_theme_option("as_phone_1"); 
						if (!empty($tel)){?><li><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="contacts-sec__phone"><? echo $tel; ?></a></li><?}?> 
						<? $tel2 = carbon_get_theme_option("as_phone_2"); 
						if (!empty($tel2)){?><li><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel2); ?>" class="contacts-sec__phone"><? echo $tel2; ?></a></li><?}?> 
						<? $mail = carbon_get_theme_option("as_email");
						if (!empty($mail)) { ?><li><a href="mailto:<? echo $mail; ?>" class="contacts-sec__email"><? echo $mail; ?></a></li><? } ?>
					</ul>
					<div class="contacts-sec__soc-block-icon soc-block-icon">
						<a href="<?php echo carbon_get_theme_option('as_insta'); ?>" class="soc-block-icon-link soc-icon-1"></a>
						<a href="<?php echo carbon_get_theme_option('as_vk'); ?>" class="soc-block-icon-link soc-icon-2"></a>
						<a href="<?php echo carbon_get_theme_option('as_telegr'); ?>" class="soc-block-icon-link soc-icon-3"></a>
						<a href="<?php echo carbon_get_theme_option('as_whatsapp'); ?>" class="soc-block-icon-link soc-icon-4"></a>
					</div> 
				</div>
			</div>
		</div>
	</section>