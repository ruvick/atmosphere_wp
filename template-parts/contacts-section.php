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
        zoom: 17,
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
                    iconImageSize: [65, 65],
                    // Смещение верхнего угла относительно основания иконки
                    iconImageOffset: [-25, -100]
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
			<li>будни: 08:00 – 22:00,</li>
			<li>выходные: 09:00 – 21:00</li>
		</ul>
	</div>
	<div class="contacts-sec__item">
		<ul>
			<li>Часы работы отдела продаж:</li>
			<li>ежедневно: 09:00 – 21:00</li>
		</ul>
	</div>
	<div class="contacts-sec__item">
		<ul>
			<li>Контакты:</li>
			<li><a href="tel:79005555155" class="contacts-sec__phone">7 (900) 5555-155</a></li>
			<li><a href="mailto:info@bestatmosfera.ru" class="contacts-sec__email">info@bestatmosfera.ru</a></li>
		</ul>
		<div class="contacts-sec__soc-block-icon soc-block-icon">
			<a href="#" class="soc-block-icon-link soc-icon-1"></a>
			<a href="#" class="soc-block-icon-link soc-icon-2"></a>
			<a href="#" class="soc-block-icon-link soc-icon-3"></a>
			<a href="#" class="soc-block-icon-link soc-icon-4"></a>
		</div>
	</div>
</div>
</div>
</section>