<?php 

/*
Template Name: Страница Акции
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="stock-sec" class="banner-bg stock-sec">
		<div class="banner-bg__nuar_blk nuar_blk"></div>
		<div class="banner-bg__container _container">
			<h1 class="title"><? the_title();?></h1>
			<p class="banner-bg__subtitle">
				Самые выгодные предложения от <br> 
				фитнес клуба Atmosfera
			</p>
			<a href="#callback" class="banner-bg__btn _popup-link btn">Связаться с менеджером</a>
		</div>
		<div class="info-index__soc-block-icon soc-block-icon">
			<a href="#" class="soc-block-icon-link soc-icon-1"></a>
			<a href="#" class="soc-block-icon-link soc-icon-2"></a>
			<a href="#" class="soc-block-icon-link soc-icon-3"></a>
			<a href="#" class="soc-block-icon-link soc-icon-4"></a>
		</div>
	</section>

	<section id="recurring" class="stock-card recurring">
		<div class="_container">
			<h2>Акции</h2>
			<div class="card-bg__row d-flex">
				<? $promo = carbon_get_theme_option('complex_promo');
				if ($promo) {
					$promoIndex = 0;
					foreach ($promo as $item) {
						?>
						<div class="card-bg-item _bgi" style="background-image: url(<?php echo wp_get_attachment_image_src($item['img_promo'], 'full')[0];?>);">
							<div class="nuar_blk"></div>
							<h2 class="card-bg-item__title title-block"><? echo $item['title_promo']; ?></h2>
							<p><? echo $item['text_promo']; ?></p>
						</div>
						<?
						$promoIndex++; 
					}
				}
				?>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); 
