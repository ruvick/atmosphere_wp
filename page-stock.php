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
						<div class="stock-bg-item card-bg-item _bgi">
							<div class="nuar_blk"></div>
							<h2 class="card-bg-item__title title-block">AERO</h2>
							<p>
								Кардиотренировка, включающая в себя разучивание
								комбинаций по классической аэробике.
							</p>
						</div>
						<div class="stock-bg-item card-bg-item _bgi">
							<div class="nuar_blk"></div>
							<h2 class="card-bg-item__title title-block">YOGA</h2>
							<p>
								Занятия позволят улучшить состояние собственного здоровья,
								забыть об психических проблемах и стрессах
							</p>
						</div>
						<div class="stock-bg-item card-bg-item _bgi">
							<div class="nuar_blk"></div>
							<h2 class="card-bg-item__title title-block">Crossfit</h2>
							<p>
								Эти тренировки развивают силу, выносливость и
								скорость благодаря своему
							</p>
						</div>
						<div class="stock-bg-item card-bg-item _bgi">
							<div class="nuar_blk"></div>
							<h2 class="card-bg-item__title title-block">Upper body</h2>
							<p>
								Данное направление подразумевает детальную проработку верхней
								части тела с помощью спортивного инвентаря.
							</p>
						</div>
						<div class="stock-bg-item card-bg-item _bgi">
							<div class="nuar_blk"></div>
							<h2 class="card-bg-item__title title-block">Массаж</h2>
							<p>
								Антицеллюлитный, спортивный,
								расслабляющий — выбери массаж на свой вкус
							</p>
						</div>
						<div class="stock-bg-item card-bg-item _bgi">
							<div class="nuar_blk"></div>
							<h2 class="card-bg-item__title title-block">RPM</h2>
							<p>
								Ежедневные велотренировки с ускорениями, подъемами и
								спусками для всех уровней подготовки в самое удобное время.
							</p>
						</div>
					</div>
				</div>
			</section>

	<?php get_template_part('template-parts/contacts-section');?>

		</main>

	<?php get_footer(); 
