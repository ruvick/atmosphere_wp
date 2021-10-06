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
		<div class="info-index__soc-block-icon soc-block-icon">
			<a href="#" class="soc-block-icon-link soc-icon-1"></a>
			<a href="#" class="soc-block-icon-link soc-icon-2"></a>
			<a href="#" class="soc-block-icon-link soc-icon-3"></a>
			<a href="#" class="soc-block-icon-link soc-icon-4"></a>
		</div>
	</section>

	<section class="team-sec recurring">
		<div class="_container">
			<h2 class="title">Тренеры</h2>

			<div class="team-sec__row d-flex">
				<div class="team-card__body d-flex">
					<div class="team-card__img">
						<div class="nuar_blk"></div>
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/01.jpg?_v=1633466607061" alt=""></picture>
						</div>
						<div class="team-card__text">
							<h3>Абрамова <br> Мария</h3>
							<p class="team-card__descp">Инструктор групповых программ</p>
						</div>
					</div>

					<div class="team-card__body d-flex">
						<div class="team-card__img">
							<div class="nuar_blk"></div>
							<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/02.jpg?_v=1633466607061" alt=""></picture>
							</div>
							<div class="team-card__text">
								<h3>Аксана <br> Щеглова</h3>
								<p class="team-card__descp">Менеджер тренажерного зала и персональный тренер</p>
							</div>
						</div>

						<div class="team-card__body d-flex">
							<div class="team-card__img">
								<div class="nuar_blk"></div>
								<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/03.jpg?_v=1633466607061" alt=""></picture>
								</div>
								<div class="team-card__text">
									<h3>Королева <br> Анастасия</h3>
									<p class="team-card__descp">Персональный тренер</p>
								</div>
							</div>

							<div class="team-card__body d-flex">
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
							</section>

							<section id="connection" class="connection">
								<div class="_container">
									<div class="connection__block d-flex">
										<div class="connection__descp connection__form-descp">
											<h2 class="title">Записаться на гостевой визит</h2>
											<form class="connection__form">
												<div class="connection__line form__line">
													<input id="name" autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="Имя"
													class="input _req">
													<input id="tel2" autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="Телефон"
													class="input _phone _req">
													<input id="email" autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="E-mail"
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

								<section id="photo-gallery-sec" class="photo-gallery-sec">
									<div class="_container">
										<h2>Фото галерея</h2>
										<div class="photo-gallery-sec__row d-flex">
											<div class="photo-gallery-sec__item-img">
												<picture><source srcset="<?php echo get_template_directory_uri();?>/img/photo-gallery/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/photo-gallery/01.jpg?_v=1633466607061" alt=""></picture>
												</div>
												<div class="photo-gallery-sec__item-img">
													<picture><source srcset="<?php echo get_template_directory_uri();?>/img/photo-gallery/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/photo-gallery/02.jpg?_v=1633466607061" alt=""></picture>
													</div>
													<div class="photo-gallery-sec__item-img">
														<picture><source srcset="<?php echo get_template_directory_uri();?>/img/photo-gallery/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/photo-gallery/03.jpg?_v=1633466607061" alt=""></picture>
														</div>
														<div class="photo-gallery-sec__item-img">
															<picture><source srcset="<?php echo get_template_directory_uri();?>/img/photo-gallery/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/photo-gallery/04.jpg?_v=1633466607061" alt=""></picture>
															</div>
															<div class="photo-gallery-sec__item-img">
																<picture><source srcset="<?php echo get_template_directory_uri();?>/img/photo-gallery/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/photo-gallery/05.jpg?_v=1633466607061" alt=""></picture>
																</div>
																<div class="photo-gallery-sec__item-img">
																	<picture><source srcset="<?php echo get_template_directory_uri();?>/img/photo-gallery/06.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/photo-gallery/06.jpg?_v=1633466607061" alt=""></picture>
																	</div>
																</div>
															</div>
														</section>

														<section id="stock-slider-sec" class="stock-slider-sec">
															<div class="_container">
																<h2>Программы Fitnes Zone</h2>
															</div>
															<div class="stock-slider__wrap">
																<div class="stock-slider__container _container">
																	<div class="stock-slider _swiper d-flex">
																		<div class="programs-zone-bg-item card-bg-item slider__slide _bgi">
																			<div class="nuar_blk"></div>
																			<h2 class="card-bg-item__title title-block">Upper body</h2>
																			<p>
																				Данное направление подразумевает детальную проработку верхней
																				части тела с помощью спортивного инвентаря.
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
																		<div class="programs-zone-bg-item card-bg-item slider__slide _bgi">
																			<div class="nuar_blk"></div>
																			<h2 class="card-bg-item__title title-block">Upper body</h2>
																			<p>
																				Данное направление подразумевает детальную проработку верхней
																				части тела с помощью спортивного инвентаря.
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
