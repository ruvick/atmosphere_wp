<?php 

/*
Template Name: Страница Клубные карты
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="club-cards-sec" class="banner-bg club-cards-sec">
		<div class="banner-bg__nuar_blk nuar_blk"></div>
		<div class="banner-bg__container _container">
			<h1 class="title"><? the_title();?></h1>
			<p class="banner-bg__subtitle">
				Приобретай карту и тренируйся <br> 
				так как удобно тебе
			</p>
			<a href="#callback" class="banner-bg__btn _popup-link btn">Связаться с менеджером</a>
		</div>
		<?php get_template_part('template-parts/soc-block');?>
	</section>

	<!-- <section id="recurring" class="recurring">
		<div class="_container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 
			<h2>Наши карты</h2>
			
		</div>
	</section>
	 -->
	
	<!-- <section class = "card_new_section" id = "card_new_section">
		<div class="_container">
		<div class="maincard_new">
				<div class="card_blk">
					<div class="card_circle bezlim"></div>
					<h3>БЕЗЛИМИТНАЯ</h3>
					<ul>
						<li>Посещение всех зон клуба будни с 8-00 до 22-00 выходные с 9-00 до 21-00</li>
						<li>Групповые занятия по расписанию</li>
						<li>Вводное персональное занятие</li>
						<li>Посещение сауны</li>
						<li>Заморозка до 30 дней</li>
						<li>Клубный браслет при первой регистрации</li>
					</ul>
					<span class = "snoska">* период использования от 1 до 12 мес</span>

					<a href="#callback" class = "btn _popup-link">Подробнее</a>
				</div>

				<div class="card_blk">
					<div class="card_circle dey"></div>
					<h3>ДНЕВНАЯ</h3>
					<ul>
						<li>Посещение всех зон клуба будни с 8-00 до 17-00 выходные с 9-00 до 17-00</li>
						<li>Групповые занятия по расписанию</li>
						<li>Вводное персональное занятие</li>
						<li>Посещение сауны</li>
						<li>Заморозка до 30 дней</li>
						<li>Клубный браслет при первой регистрации</li>
					</ul>
					<span class = "snoska">* период использования от 1 до 12мес</span>

					<a href="#callback" class = "btn _popup-link">Подробнее</a>
				</div>

				<div class="card_blk">
					<div class="card_circle vip"></div>
					<h3>VIP-КАРТА</h2>
					<ul>
						<li>Посещение всех зон клуба будни с 8.00 до 22.00 выходные с 9.00 до 21.00</li>
						<li>Вводное персональное занятие</li>
						<li>Групповые занятия по расписанию</li>
						<li>Посещение сауны</li>
						<li>Гостевой визит - 3шт</li>
						<li>Заморозка до 60 дней</li>
						<li>Скидка на время действия карты  Beauty zone / Cafe zone</li>
						<li>Бесплатная аренда полотенца</li>
						<li>Клубный браслет при первой регистрации</li>
					</ul>
					<span class = "snoska">* период использования 12 мес</span>

					<a href="#callback" class = "btn _popup-link">Подробнее</a>
				</div>

				<div class="card_blk">
					<div class="card_circle ten"></div>
					<h3>КАРТА ТИНЕЙДЖЕРА</h3>
					<ul>
						<li>Посещение всех зон клуба будни с 8-00 до 21-00 выходные с 9-00 до 21-00</li>
						<li>Групповые занятия по расписанию</li>
						<li>Посещение сауны</li>
						<li>Для детей с 12 до 14 лет занятия проводятся только с тренером</li>
						<li>Заморозка до 30 дней</li>
						<li>Клубный браслет при первой регистрации</li>
					</ul>
					<span class = "snoska">* Возраст от 12 до 14 лет
							<br/>* период использования 12 мес</span>

					<a href="#callback" class = "btn _popup-link">Подробнее</a>
				</div>
			</div>
		</div>
	</section> -->

	<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); 
