<?php 

/*
Template Name: Страница Наша команда
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="fitness-zone-sec" class="banner-bg fitness-zone-sec">
		<div class="banner-bg__nuar_blk nuar_blk"></div>
		<div class="banner-bg__container _container">
			<h1 class="title"><? the_title();?></h1>
			<p class="banner-bg__subtitle">
				Команда лучших тренеров <br> 
				позаботятся о Вашей форме и здоровье
			</p>
			<a href="#callback" class="banner-bg__btn _popup-link btn">Связаться с менеджером</a>
		</div>
		<?php get_template_part('template-parts/soc-block');?>
	</section>

	<section class="team-sec recurring">
		<div class="_container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 
			<h2 class="title">Тренеры</h2>
			<div class="team-sec__row d-flex">
				<? $team = carbon_get_theme_option('complex_team');
				if ($team) {
					$teamIndex = 0;
					foreach ($team as $item) {
						?>
						<div class="team-card__body slider__slide d-flex">
							<div class="team-card__img" style="background-image: url(<?php echo wp_get_attachment_image_src($item['img_team'], 'full')[0];?>);">
								<div class="nuar_blk"></div>
								<div class="team-card__name">
									<h3 class="team-card__name-text"><? echo $item['surname_team']; ?> <? echo $item['name_team']; ?></h3>
								</div>
							</div>
							<div class="team-card__special">
								<h4 class="team-card__special-title">Персональные тренировки</h4>
								<p class="team-card__special-text"><? echo $item['special_team']; ?></p>
								<h4 class="team-card__special-title">Групповые тренировки</h4>
								<p class="team-card__special-text"><? echo $item['special_team']; ?></p>
							</div>
						</div> 
						<?
						$teamIndex++; 
					}
				}
				?>
			</div>
		</div>
	</section>

	<section id="connection" class="connection">
		<div class="_container">
			<div class="connection__block d-flex">
				<div class="connection__descp connection__form-descp">
					<h2 class="title">Записаться на гостевой визит</h2>
					<form class="connection__form">
						<div class="connection__line form__line">
							<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="Имя"
							class="input _req">
							<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="Телефон"
							class="input _phone _req">
							<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="E-mail"
							class="input _email _req">
						</div>
						<p>
							Оставляя заявку, вы подтверждаете, что согласны на обработку ваших персональных данных,
							согласно нашим правилам соблюдения конфиденциальности.
						</p>
						<button type="submit" class="connection__form__btn btn">Записаться</button>
					</form>
				</div>
				<div class="connection__img">
					<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card-img.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card-img.png?_v=1633466607061" alt=""></picture>
					</div>
				</div>
			</div>
		</section>

		<?php get_template_part('template-parts/contacts-section');?>

	</main>

	<?php get_footer(); 
