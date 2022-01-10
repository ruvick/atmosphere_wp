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

	<section id="recurring" class="recurring">
		<div class="_container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 
			<h2>Наши карты</h2>
			
			<!-- <div class="club-cards-block__row d-flex">
				<? $clubCards = carbon_get_theme_option('complex_club_cards');
				if ($clubCards) {
					$clubCardsIndex = 0;
					foreach ($clubCards as $item) {
						?>
						<div class="club-cards-block__item d-flex">
							<div class="club-cards-block__img">
								<img src="<?php echo wp_get_attachment_image_src($item['img_club_cards'], 'large')[0]; ?>" alt="">
							</div>
							<div class="club-cards-block__descp">
								<h2 class="club-cards-block__title"><? echo $item['title_club_cards']; ?></h2>
								<p class="club-cards-block__subtitle"><? echo $item['text_club_cards']; ?></p>
							</div>
							<div class="club-cards-block__btn">
								<a href="#" class="club-cards-block__btn-link-white btn">Подробнее</a>
								<a href="#" class="club-cards-block__btn-link btn">Купить карту</a>
							</div> 
						</div>
						<?
						$clubCardsIndex++; 
					}
				}
				?>
			</div> -->
		</div>
	</section>
	
	<section class = "card_new_section" id = "card_new_section">
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
						<li>Посещение всех зон клуба будни с 8-00 до 22-00 выходные с 9-00 до 21-00</li>
						<li>Групповые занятия по расписанию</li>
						<li>Вводное персональное занятие</li>
						<li>Посещение сауны</li>
						<li>5 персональных занятий бесплатно</li>
						<li>Один раз в месяц купон «Гостевой визит»</li>
						<li>Заморозка до 60 дней</li>
						<li>Клубный браслет при первой регистрации</li>
					</ul>
					<span class = "snoska">* период использования 12 мес</span>

					<a href="#callback" class = "btn _popup-link">Подробнее</a>
				</div>

				<div class="card_blk">
					<div class="card_circle ten"></div>
					<h3>КАРТА ТИНЕЙДЖЕРА</h3>
					<ul>
						<li>Посещение всех зон клуба будни с 8-00 до 20-00 выходные с 9-00 до 20-00</li>
						<li>Групповые занятия по расписанию</li>
						<li>Посещение сауны</li>
						<li>Для детей с 12 до 15 лет занятия проводятся только с тренером</li>
						<li>Заморозка до 30 дней</li>
						<li>Клубный браслет при первой регистрации</li>
					</ul>
					<span class = "snoska">* Возраст от 12 до 16 лет
							<br/>* период использования 12 мес</span>

					<a href="#callback" class = "btn _popup-link">Подробнее</a>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); 
