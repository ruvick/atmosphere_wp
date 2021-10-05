<header id="header" class="header">
	<div class="header__container _container">
		<div class="header__row d-flex">
			<a href="<? bloginfo("url"); ?>" class="header__logo logo-icon"></a>
			<div class="header__navigation">
				<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'header__menu-list menu-list',
				'container_class' => 'header__menu-list menu-list','container' => false )); ?>
				<div class="header__contacts d-flex">
					<? $tel = carbon_get_theme_option("as_phone_1"); 
					if (!empty($tel)){?><li><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="header__phone"><? echo $tel; ?></a></li><?}?>
					<a href="#callback" class="header__popup-link btn _popup-link">Заявка On-Line</a>
				</div>
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
	<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
	'container_class' => 'mob-menu__list','container' => false )); ?>
	<a href="#callback" class="header__popup-link header__popup-link_mob btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div>