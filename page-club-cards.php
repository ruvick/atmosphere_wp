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
					<h2>Наши карты</h2>
					<div class="club-cards-block__row d-flex">
						<div class="club-cards-block__item d-flex">
							<div class="club-cards-block__img">
								<picture><source srcset="<?php echo get_template_directory_uri();?>/img/club-cards/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/club-cards/01.jpg?_v=1633466607061" alt=""></picture>
							</div>
							<div class="club-cards-block__descp">
								<h2 class="club-cards-block__title">Тест-драйв</h2>
								<p class="club-cards-block__subtitle">
									Мы подготовили для вас не только разнообразные варианты членства, но и обширную систему лояльности:
									активные члены клуба получают дополнительные привилегии и скидки. Вы можете оформить заявку на карту и
									наши менеджеры помогут подобрать вам оптимальный вариант.
								</p>
							</div>
							<div class="club-cards-block__btn">
								<a href="#" class="club-cards-block__btn-link-white btn">Подробнее</a>
								<a href="#" class="club-cards-block__btn-link btn">Купить карту</a>
							</div>
						</div>
						<div class="club-cards-block__item d-flex">
							<div class="club-cards-block__img">
								<picture><source srcset="<?php echo get_template_directory_uri();?>/img/club-cards/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/club-cards/02.jpg?_v=1633466607061" alt=""></picture>
							</div>
							<div class="club-cards-block__descp">
								<h2 class="club-cards-block__title">Супер фитнес</h2>
								<p class="club-cards-block__subtitle">
									Мы подготовили для вас не только разнообразные варианты членства, но и обширную систему лояльности:
									активные члены клуба получают дополнительные привилегии и скидки. Вы можете оформить заявку на карту и
									наши менеджеры помогут подобрать вам оптимальный вариант.
								</p>
							</div>
							<div class="club-cards-block__btn">
								<a href="#" class="club-cards-block__btn-link-white btn">Подробнее</a>
								<a href="#" class="club-cards-block__btn-link btn">Купить карту</a>
							</div>
						</div>
						<div class="club-cards-block__item d-flex">
							<div class="club-cards-block__img">
								<picture><source srcset="<?php echo get_template_directory_uri();?>/img/club-cards/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/club-cards/03.jpg?_v=1633466607061" alt=""></picture>
							</div>
							<div class="club-cards-block__descp">
								<h2 class="club-cards-block__title">Абонемент выходного дня</h2>
								<p class="club-cards-block__subtitle">
									Мы подготовили для вас не только разнообразные варианты членства, но и обширную систему лояльности:
									активные члены клуба получают дополнительные привилегии и скидки. Вы можете оформить заявку на карту и
									наши менеджеры помогут подобрать вам оптимальный вариант.
								</p>
							</div>
							<div class="club-cards-block__btn">
								<a href="#" class="club-cards-block__btn-link-white btn">Подробнее</a>
								<a href="#" class="club-cards-block__btn-link btn">Купить карту</a>
							</div>
						</div>
						<div class="club-cards-block__item d-flex">
							<div class="club-cards-block__img">
								<picture><source srcset="<?php echo get_template_directory_uri();?>/img/club-cards/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/club-cards/04.jpg?_v=1633466607061" alt=""></picture>
							</div>
							<div class="club-cards-block__descp">
								<h2 class="club-cards-block__title">Для всей семьи</h2>
								<p class="club-cards-block__subtitle">
									Мы подготовили для вас не только разнообразные варианты членства, но и обширную систему лояльности:
									активные члены клуба получают дополнительные привилегии и скидки. Вы можете оформить заявку на карту и
									наши менеджеры помогут подобрать вам оптимальный вариант.
								</p>
							</div>
							<div class="club-cards-block__btn">
								<a href="#" class="club-cards-block__btn-link-white btn">Подробнее</a>
								<a href="#" class="club-cards-block__btn-link btn">Купить карту</a>
							</div>
						</div>
					</div>
				</div>
			</section>

	<?php get_template_part('template-parts/contacts-section');?>

		</main>

	<?php get_footer(); 
