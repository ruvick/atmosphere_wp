<?php 

/*
Template Name: Страница О клубе
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="club-sec" class="banner-bg club-sec">
		<div class="banner-bg__nuar_blk nuar_blk"></div>
		<div class="banner-bg__container _container">
			<h1 class="title"><? the_title();?></h1>
			<p class="banner-bg__subtitle">
				Узнай больше о жизни фитнес клуба <br> 
				Atmosfera
			</p>
			<a href="#callback" class="banner-bg__btn _popup-link btn">Связаться с менеджером</a>
		</div>
		<?php get_template_part('template-parts/soc-block');?>
	</section>

	<section id="advant-sec" class="advant-sec recurring">
		<div class="_container">
			<h2>Преимущества</h2>
			<div class="advant-sec__row d-flex">
				<div class="advant-sec__item _bgi d-flex">
					<div class="nuar_blk"></div>
					<div class="advant-sec__icon icon-advant-01"></div>
					<div class="advant-sec__line"></div>
					<h3>
						Опытные <br>
						тренеры
					</h3>
				</div>
				<div class="advant-sec__item _bgi d-flex">
					<div class="nuar_blk"></div>
					<div class="advant-sec__icon icon-advant-02"></div>
					<div class="advant-sec__line"></div>
					<h3>
						Современное <br>
						оборудование
					</h3>
				</div>
				<div class="advant-sec__item _bgi d-flex">
					<div class="nuar_blk"></div>
					<div class="advant-sec__icon icon-advant-03"></div>
					<div class="advant-sec__line"></div>
					<h3>
						Удобный <br>
						график
					</h3>
				</div>
				<div class="advant-sec__item _bgi d-flex">
					<div class="nuar_blk"></div>
					<div class="advant-sec__icon icon-advant-04"></div>
					<div class="advant-sec__line"></div>
					<h3>
						Выгодные <br>
						цены
					</h3>
				</div>
			</div>
		</div>
	</section>

	<section id="connection" class="connection">
		<div class="_container">
			<div class="connection__block d-flex">
				<div class="connection__descp">
					<h2 class="title">Клубные карты <span>ATMOSFERA</span> фитнес</h2>
					<p>
						Мы подготовили для вас не только разнообразные варианты членства, но и обширную систему лояльности:
						активные члены клуба получают дополнительные привилегии и скидки. Вы можете оформить заявку на карту и
						наши менеджеры помогут подобрать вам оптимальный вариант.
					</p>
					<div class="connection__btn-block d-flex">
						<a href="#callback" class="connection__btn-white _popup-link btn">Оставить заявку</a>
						<a href="#" class="connection__btn btn">Все карты</a>
					</div>
				</div>
				<div class="connection__img">
					<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card-img.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card-img.png?_v=1633466607061" alt=""></picture>
					</div>
				</div>
			</div>
		</section>

		<section id="stock-slider-sec" class="stock-slider-sec">
			<div class="_container">
				<h2>Акции</h2>
			</div>
			<div class="stock-slider__wrap">
				<div class="stock-slider__container _container">
					<div class="stock-slider _swiper d-flex">
						<div class="stock-slider-bg-item card-bg-item slider__slide _bgi">
							<div class="nuar_blk"></div>
							<h2 class="card-bg-item__title title-block">Массаж</h2>
							<p>
								Антицеллюлитный, спортивный,
								расслабляющий — выбери массаж на свой вкус
							</p>
						</div>
						<div class="stock-slider-bg-item card-bg-item slider__slide _bgi">
							<div class="nuar_blk"></div>
							<h2 class="card-bg-item__title title-block">RPM</h2>
							<p>
								Ежедневные велотренировки с ускорениями, подъемами и
								спусками для всех уровней подготовки в самое удобное время.
							</p>
						</div>
						<div class="stock-slider-bg-item card-bg-item slider__slide _bgi">
							<div class="nuar_blk"></div>
							<h2 class="card-bg-item__title title-block">Массаж</h2>
							<p>
								Антицеллюлитный, спортивный,
								расслабляющий — выбери массаж на свой вкус
							</p>
						</div>
						<div class="stock-slider-bg-item card-bg-item slider__slide _bgi">
							<div class="nuar_blk"></div>
							<h2 class="card-bg-item__title title-block">RPM</h2>
							<p>
								Ежедневные велотренировки с ускорениями, подъемами и
								спусками для всех уровней подготовки в самое удобное время.
							</p>
						</div>
					</div>
				</div>
				<div class="swiper-button swiper-button-next"></div>
				<div class="swiper-button swiper-button-prev"></div>
			</div>
		</section>

	<?php get_template_part('template-parts/contacts-section');?>

	</main>

	<?php get_footer(); 
