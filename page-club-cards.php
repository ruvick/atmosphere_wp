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
				Приобретай карту и тренеруйся <br> 
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
			<div class="club-cards-block__row d-flex">
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
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); 
