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
				<!-- <a href="<?php echo get_permalink(26);?>" class="info-index__btn-text btn">#В честь открытия скидки на <br> клубные карты</a> -->
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
							<li>Комфортная среда</li>
							<li>Современное оборудование</li>
							<li>Система "ключ-браслет"</li>
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
							<li>Коллариум</li>
							<li>Спа-программы</li>
							<li>Аппаратная косметология</li>
							<li>Уходовые процедуры для лица</li>
							<li>Коррекция фигуры</li>
						</ul>
						<ul>
							<li>Лазерная эпиляция</li>
							<li>Массаж</li>
							<li>Парикмахерсике услуги</li>
							<li>Ногтевой сервис</li>
						</ul>
					</div>
				</a>
				<a href="<?php echo get_permalink(59);?>" class="about__item card-bg-item _bgi">
					<div class="nuar_blk"></div>
					<h2 class="about__bg-item__title card-bg-item__title title-block">Cafe zone</h2>
					<p class="about__item__subtitle">Более 100м²</p>
					<div class="about__list-block d-flex">
						<ul>
							<li>Горячие, холодные напитки</li> 
							<li>Завтраки</li>
							<li>Полезные перекусы</li>
							<li>Спортивное питание</li>
						</ul>
					</div>
				</a>
			</div>
		</div>
	</section>

	<section id="team" class="team">
		<div class="_container">
			<h2 class="title title_center">Тренерский состав</h2>

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
								<div class="team-card__img" style="background-image: url(<?php echo wp_get_attachment_image_src($item['img_team'], 'full')[0];?>);">
									<div class="nuar_blk"></div>
									<div class="team-card__name">
										<h3 class="team-card__name-text"><? echo $item['surname_team']; ?> <? echo $item['name_team']; ?></h3>
									</div>
								</div>
								<div class="team-card__special">
									<h4 class="team-card__special-title">Персональные тренировки</h4>
									<p class="team-card__special-text"><? echo $item['pers_training_team']; ?></p>
									<h4 class="team-card__special-title">Групповые тренировки</h4>
									<p class="team-card__special-text"><? echo $item['group_training_team']; ?></p>
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