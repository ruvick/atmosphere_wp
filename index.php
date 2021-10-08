<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="info-index" class="info-index _bgi">
		<div class="info-index__nuar_blk nuar_blk"></div>
		<div class="fullscreen__container _container">
			<div class="info-index__logo"></div>
<!-- 			<h4>
				Пробное посещение <br>
				БЕСПЛАТНО
			</h4> -->
			<div class="info-index__btn-block d-flex">
				<a href="#callback" class="info-index__btn _popup-link btn">Связаться с менеджером</a>
				<a href="<?php echo get_permalink(26);?>" class="info-index__btn-text btn">#В честь открытия скидки на <br> клубные карты</a>
			</div>
		</div>
		<?php get_template_part('template-parts/soc-block');?>
	</section>

	<section id="about" class="about">
		<div class="_container">
			<? $aboutht = carbon_get_theme_option('about_home_title');
			if (!empty($aboutht)) { ?>
				<h1><?php echo  carbon_get_theme_option('about_home_title'); ?></h1>
			<? } ?>
			<div class="card-bg__row d-flex">
				<div class="about__title-center">
					<h2 class="title-block">Fitness zone</h2>
					<p class="about__item__subtitle">Более 2000 м² Фитнеса</p>
				</div>
				<a href="<?php echo get_permalink(28);?>" class="about__item card-bg-item _bgi">
					<div class="nuar_blk"></div>
					<div class="about__list-block about__list-block-left d-flex">
						<ul>
							<li>Современная среда</li>
							<li>Новейшее оборудования</li>
							<li>Система ключ-браслет</li>
						</ul>
					</div>
				</a>
				<a href="<?php echo get_permalink(28);?>" class="about__item card-bg-item _bgi">
					<div class="nuar_blk"></div>
					<div class="about__list-block about__list-block-right d-flex">
						<ul>
							<li>Сайкл-студия</li>
							<li>Клетка для борьбы</li>
							<li>Бесплатная питьевая вода</li>
						</ul>
					</div>
				</a>
				<a href="<?php echo get_permalink(57);?>" class="about__item card-bg-item _bgi">
					<div class="nuar_blk"></div>
					<h2 class="about__bg-item__title card-bg-item__title title-block">Beauty zone</h2>
					<p class="about__item__subtitle">Более 400м²</p>
					<div class="about__list-block d-flex">
						<ul>
							<li>Косметология</li>
							<li>Парикмахерские услуги</li>
							<li>SPA для двоих</li>
							<li>Коллариум</li>
						</ul>
						<ul>
							<li>Массаж</li>
							<li>Ногтевой сервс</li>
							<li>Аромосауны</li>
							<li>Бутик косметики</li>
						</ul>
					</div>
				</a>
				<a href="<?php echo get_permalink(59);?>" class="about__item card-bg-item _bgi">
					<div class="nuar_blk"></div>
					<h2 class="about__bg-item__title card-bg-item__title title-block">Cafe zone</h2>
					<p class="about__item__subtitle">Более 400м²</p>
					<div class="about__list-block d-flex">
						<ul>
							<li>Горячие, холодные напитки</li>
							<li>Завтраки</li>
							<li>Полезные перекусы</li>
						</ul>
					</div>
				</a>
			</div>
		</div>
	</section>

	<section id="team" class="team">
		<div class="_container">
			<h2 class="title">Тренеры ATMOSFERA фитнес</h2>
			<p>
				Благодаря профессиональным тренерам Вы сможете не только сбросить лишний вес или набрать мышечную <br>
				массу, выработать правильную технику, выточить идеальный рельеф и многое другое.
			</p>
		</div>

		<div class="team__row d-flex">
			<div class="team__container _container">
				<div class="slider-team _swiper">
					<? $team = carbon_get_theme_option('complex_team');
					if ($team) {
						$teamIndex = 0;
						foreach ($team as $item) {
							?>
							<div class="team-card__body slider__slide d-flex">
								<div class="team-card__img">
									<div class="nuar_blk"></div>
									<img src="<?php echo wp_get_attachment_image_src($item['img_team'], 'large')[0]; ?>" alt="">
								</div>
								<div class="team-card__text">
									<h3><? echo $item['surname_team']; ?> <br> <? echo $item['name_team']; ?></h3>
									<p class="team-card__descp"><? echo $item['special_team']; ?></p>
								</div>
							</div>
							<?
							$teamIndex++; 
						}
					}
					?>
				</div>
				<a href="<?php echo get_permalink(36);?>" class="slider-team__btn btn">Все тренеры</a>
			</div>
			<div class="swiper-button swiper-button-next"></div>
			<div class="swiper-button swiper-button-prev"></div>
		</div>

	</section>

	<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); ?> 