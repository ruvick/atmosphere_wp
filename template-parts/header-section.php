		<header id="header" class="header">
			<div class="header__container _container">

				<div class="header__row d-flex">

					<a href="index.html" class="header__logo logo-icon">
						<!-- <? bloginfo("url"); ?> -->
					</a>

					<div class="header__navigation">
						<ul class="header__menu-list menu-list d-flex">
							<li><a href="club.html" class="menu-list__link">О клубе</a></li>
							<li><a href="club-cards.html" class="menu-list__link">Клубные карты</a></li>
							<li><a href="zones.html" class="menu-list__link">Услуги</a></li>
							<li><a href="#" class="menu-list__link">Клубная жизнь</a></li>
							<li><a href="stock.html" class="menu-list__link">Акции</a></li>
							<li><a href="#" class="menu-list__link">Расписание</a></li>
							<li><a href="#" class="menu-list__link">Контакты</a></li> 
						</ul>
				<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu__list',
					'container_class' => 'menu__list','container' => false )); ?>  -->

					<div class="header__contacts d-flex">
						<a href="tel:79005555155" class="header__phone">7 (900) 5555-155</a>
						<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phone_1"); ?></a> -->
						<a href="#callback" class="header__popup-link btn _popup-link">Заявка On-Line</a>
					</div>
					<a href="tel:79005555155" class="mob-callback__phone"></a>
					<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="mob-callback__phone"></a> -->

					<div class="menu__icon icon-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>

			</div>

		</div>
	</header>

	<!-- Мобильное меню -->
	<div class="header__mob-menu mob-menu">
		<ul class="mob-menu__list">
			<li><a href="club.html" class="menu-list__link">О клубе</a></li>
			<li><a href="club-cards.html" class="menu-list__link">Клубные карты</a></li>
			<li><a href="zones.html" class="menu-list__link">Услуги</a></li>
			<li><a href="#" class="menu-list__link">Клубная жизнь</a></li>
			<li><a href="stock.html" class="menu-list__link">Акции</a></li>
			<li><a href="#" class="menu-list__link">Расписание</a></li>
			<li><a href="#" class="menu-list__link">Контакты</a></li>
		</ul>
	<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
		'container_class' => 'mob-menu__list','container' => false )); ?>  -->
		<a href="#callback" class="header__popup-link header__popup-link_mob btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
	</div>