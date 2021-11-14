<?php 

/*
Template Name: Страница Fitness zone -test
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="fitness-zone-sec" class="banner-bg" style="background-image: url('<?php the_post_thumbnail_url( 'full' );?>');">
		<div class="banner-bg__nuar_blk nuar_blk"></div> 
		<div class="banner-bg__container _container">
			<h1 class="title"><? the_title();?></h1>
			<p class="banner-bg__subtitle"><?echo carbon_get_post_meta(get_the_ID(),"zone_subtitle"); ?></p>
			<a href="#callback" class="banner-bg__btn _popup-link btn">Связаться с менеджером</a>
		</div>
		<?php get_template_part('template-parts/soc-block');?>
	</section>

	<section id="fitness-zone-descp-sec" class="fitness-zone-descp-sec zone recurring">
		<div class="_container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 
			<h2 class="title f22"><? the_title();?></h2>
			<p><?//echo carbon_get_post_meta(get_the_ID(),"zone_text"); ?></p>
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
					<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card-img.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card-img.png" alt=""></picture>
					</div>
				</div>
			</div>
		</section>

		<? 
		$zoneGalery = carbon_get_post_meta(get_the_ID(),"complex_zone_galery");
		if (!empty($zoneGalery)) {?>
			

			<section id="stock-slider-sec" class="stock-slider-sec">
				<div class="_container">
					<h2 class="stock-slider-sec__title title title_center">Фото галерея</h2>
					<p class="stock-slider-sec__subtitle"></p> 
				</div>
				<div class="stock-slider__wrap">
					<div class="stock-slider__container _container">
						<div class="stock-slider _swiper d-flex">
						<? 
							
								$fprogrIndex = 0;
								foreach ($zoneGalery as $item) {
									?>
									<div class="card-bg-item slider__slide _bgi" style="background-image: url(<?php echo wp_get_attachment_image_src($item['zone_galery_img'], 'full')[0];?>);">
										<div class="nuar_blk"></div>
										<p><? echo $item['zone_galery_txt']; ?></p>
									</div>
									<?
									$fprogrIndex++; 
								}
							
							?>
						</div>
					</div>
					<div class="swiper-button swiper-button-next"></div>
					<div class="swiper-button swiper-button-prev"></div>
				</div>
			</section>

			<!-- <section id="photo-gallery-sec" class="photo-gallery-sec">
				<div class="_container">
					<h2>Фото галерея</h2> 
					<div class="photo-gallery-sec__row d-flex">
						<? 
						// if ($zoneGalery) {
						// 	$zoneGaleryIndex = 0;
						// 	foreach ($zoneGalery as $item) {
						// 		?>
						// 		<div class="photo-gallery-sec__item-img">
						// 			<img src="<?php echo wp_get_attachment_image_src($item['zone_galery_img'], 'large')[0]; ?>" alt="Картинка фотогалереи">
						// 		</div>
						// 		<?
						// 		$$zoneGaleryIndex++; 
						// 	}
						// }
						?>
					</div>
				</div>
			</section> -->

			<?}?>

		<!-- <?php if (is_page('28')) { ?> --> 
		<? $fprogr = carbon_get_post_meta(get_the_ID(),"complex_programm");
		if (!empty($fprogr)) {?>
			<section id="stock-slider-sec" class="stock-slider-sec">
				<div class="_container">
					<h2 class="stock-slider-sec__title title title_center">Групповые тренировки</h2>
					<p class="stock-slider-sec__subtitle"></p> 
				</div>
				<div class="stock-slider__wrap">
					<div class="stock-slider__container _container">
						<div class="fg-slider _swiper d-flex">
						<? 
							if ($fprogr) {
								$fprogrIndex = 0;
								foreach ($fprogr as $item) {
									?>
									<div class="card-bg-item slider__slide _bgi" style="background-image: url(<?php echo wp_get_attachment_image_src($item['img_programm'], 'full')[0];?>);">
										<div class="nuar_blk"></div>
										<h2 class="card-bg-item__title title-block"><? echo $item['title_programm']; ?></h2>
										<p><? echo $item['text_programm']; ?></p>
									</div>
									<?
									$fprogrIndex++; 
								}
							}
							?>
						</div>
					</div>
					<div class="swiper-button swiper-button-next"></div>
					<div class="swiper-button swiper-button-prev"></div>
				</div>
			</section>
			<?}?>
		<!-- <?php } ?> -->

		<?php get_template_part('template-parts/contacts-section');?>

	</main>

	<?php get_footer(); 
