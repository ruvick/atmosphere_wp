<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="info-index" class="info-index _bgi">
		<div class="info-index__nuar_blk nuar_blk"></div>
		<div class="fullscreen__container _container">
			<div class="info-index__logo"></div>
			<h4>
				Пробное посещение <br>
				БЕСПЛАТНО
			</h4>
			<div class="info-index__btn-block d-flex">
				<a href="#callback" class="info-index__btn _popup-link btn">Связаться с менеджером</a>
				<a href="club-cards.html" class="info-index__btn-text btn">#В честь открытия скидка на <br> клубные карты</a>
			</div>
		</div>
		<div class="info-index__soc-block-icon soc-block-icon">
			<a href="#" class="soc-block-icon-link soc-icon-1"></a>
			<a href="#" class="soc-block-icon-link soc-icon-2"></a>
			<a href="#" class="soc-block-icon-link soc-icon-3"></a>
			<a href="#" class="soc-block-icon-link soc-icon-4"></a>
		</div>
	</section>

	<section id="about" class="about">
		<div class="_container">
			<h1>
				Фитнес-клуб ATMOSFERA создан чтобы помочь вам провести <br>
				время эффективно и комфортно
			</h1>
			<div class="card-bg__row d-flex">
				<div class="about__title-center">
					<h2 class="title-block">Fitness zone</h2>
					<p class="about__item__subtitle">Более 2000 м² Фитнеса</p>
				</div>
				<div class="about__item card-bg-item _bgi">
					<div class="nuar_blk"></div>
					<div class="about__list-block about__list-block-left d-flex">
						<ul>
							<li>Холодные спортивные напитки</li>
							<li>Горячие спортивные напитки</li>
							<li>Завтраки</li>
						</ul>
					</div>
				</div>
				<div class="about__item card-bg-item _bgi">
					<div class="nuar_blk"></div>
					<div class="about__list-block about__list-block-right d-flex">
						<ul>
							<li>Холодные спортивные напитки</li>
							<li>Горячие спортивные напитки</li>
							<li>Завтраки</li>
						</ul>
					</div>
				</div>
				<div class="about__item card-bg-item _bgi">
					<div class="nuar_blk"></div>
					<h2 class="about__bg-item__title card-bg-item__title title-block">Beauty zone</h2>
					<p class="about__item__subtitle">Более 400м²</p>
					<div class="about__list-block d-flex">
						<ul>
							<li>Косметология</li>
							<li>Парикмахерские</li>
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
				</div>
				<div class="about__item card-bg-item _bgi">
					<div class="nuar_blk"></div>
					<h2 class="about__bg-item__title card-bg-item__title title-block">Cafe zone</h2>
					<p class="about__item__subtitle">Более 400м²</p>
					<div class="about__list-block d-flex">
						<ul>
							<li>Холодные спортивные напитки</li>
							<li>Горячие спортивные напитки</li>
						</ul>
						<ul>
							<li>Завтраки</li>
							<li>Перекусы</li>
						</ul>
					</div>
				</div>
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
					<div class="team-card__body slider__slide d-flex">
						<div class="team-card__img">
							<div class="nuar_blk"></div>
							<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/01.jpg?_v=1633466607061" alt=""></picture>
							</div>
							<div class="team-card__text">
								<h3>Абрамова <br> Мария</h3>
								<p class="team-card__descp">Инструктор групповых программ</p>
							</div>
						</div>

						<div class="team-card__body slider__slide d-flex">
							<div class="team-card__img">
								<div class="nuar_blk"></div>
								<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/02.jpg?_v=1633466607061" alt=""></picture>
								</div>
								<div class="team-card__text">
									<h3>Аксана <br> Щеглова</h3>
									<p class="team-card__descp">Менеджер тренажерного зала и персональный тренер</p>
								</div>
							</div>

							<div class="team-card__body slider__slide d-flex">
								<div class="team-card__img">
									<div class="nuar_blk"></div>
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/03.jpg?_v=1633466607061" alt=""></picture>
									</div>
									<div class="team-card__text">
										<h3>Королева <br> Анастасия</h3>
										<p class="team-card__descp">Персональный тренер</p>
									</div>
								</div>

								<div class="team-card__body slider__slide d-flex">
									<div class="team-card__img">
										<div class="nuar_blk"></div>
										<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/04.jpg?_v=1633466607061" alt=""></picture>
										</div>
										<div class="team-card__text">
											<h3>Александр <br> Горюнов</h3>
											<p class="team-card__descp">Инструктор тренажерного зала</p>
										</div>
									</div>

									<div class="team-card__body slider__slide d-flex">
										<div class="team-card__img">
											<div class="nuar_blk"></div>
											<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/01.jpg?_v=1633466607061" alt=""></picture>
											</div>
											<div class="team-card__text">
												<h3>Абрамова <br> Мария</h3>
												<p class="team-card__descp">Инструктор групповых программ</p>
											</div>
										</div>

										<div class="team-card__body slider__slide d-flex">
											<div class="team-card__img">
												<div class="nuar_blk"></div>
												<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/02.jpg?_v=1633466607061" alt=""></picture>
												</div>
												<div class="team-card__text">
													<h3>Аксана <br> Щеглова</h3>
													<p class="team-card__descp">Менеджер тренажерного зала и персональный тренер</p>
												</div>
											</div>

											<div class="team-card__body slider__slide d-flex">
												<div class="team-card__img">
													<div class="nuar_blk"></div>
													<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/03.jpg?_v=1633466607061" alt=""></picture>
													</div>
													<div class="team-card__text">
														<h3>Королева <br> Анастасия</h3>
														<p class="team-card__descp">Персональный тренер</p>
													</div>
												</div>

												<div class="team-card__body slider__slide d-flex">
													<div class="team-card__img">
														<div class="nuar_blk"></div>
														<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/04.jpg?_v=1633466607061" alt=""></picture>
														</div>
														<div class="team-card__text">
															<h3>Александр <br> Горюнов</h3>
															<p class="team-card__descp">Инструктор тренажерного зала</p>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-button swiper-button-next"></div>
											<div class="swiper-button swiper-button-prev"></div>
										</div>

									</section>

									<section id="application" class="application">
										<div class="_container">
											<h2 class="title">Оставьте заявку и мы Вам перезвоним:</h2>
											<form action="#" class="application__form form">
												<div class="application__line form__line">
													<input id="name" autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="Имя"
													class="input _req">
													<input id="tel2" autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="Телефон"
													class="input _phone _req">
													<button type="submit" class="form__btn btn">Подробнее</button>
												</div>
												<p>
													Нажимая на кнопку «Отправить» Вы принимаете условия политики конфиденциальности <br>
													в отношении обработки персональных данных
												</p>
											</form>
										</div>
									</section>

	<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); ?> 