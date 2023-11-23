<?php

/**
 * Template name: Home
 * The home page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package imperiumchekhov
 */

$header_args = array(
  'promo_bar' => false,
);

get_header(null, $header_args);

$prices = get_field('club_cards_group');
$month_1_price_new = $prices['1-month'];
$month_1_price_old = $prices['1-month-up'];
$month_3_price_new = $prices['3-month'];
$month_3_price_old = $prices['3-month-up'];
$month_6_price_new = $prices['6-month'];
$month_6_price_old = $prices['6-month-up'];
$month_12_price_new = $prices['12-month'];
$month_12_price_old = $prices['12-month-up'];

$sale_group = get_field('sale_group');
$sale_text = $sale_group['sale-text'];
$sale_list = $sale_group['sale-content'];
$sale_price = $sale_group['sale-price'];
?>

<main id="primary" class="site-main">

	<section id="main-box">
		<div class="main-screen">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col">
						<div class="title">
							<h1>ФИТНЕС-КЛУБ в центре города Чехов</h1>
						</div>
						<div class="description my-3 my-lg-5">
							<p>Мы разработали несколько гибких тарифных планов, которые подойдут каждому</p>
						</div>
						<div class="main-screen__btn"><a href="#cards" class="btn btn_shine">Посмотреть
								абонементы</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="socials">
			<div class="socials__item">
				<a href="https://instagram.com/imperium.chekhov/"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/instagram.png" /></a>
			</div>
			<div class="socials__item">
				<a href="#!"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/vk.png" /></a>
			</div>
		</div>
	</section>

	<section id="sale">
		<div class="sale__container custom-pulse">
			<div class="sale__inner">
				<p class="sale__number">20<small>%</small></p>
				<p class="sale__info">Приведи друга и получи <span class="text-uppercase font-weight-bold">скидку на
						абонемент</span></p>
			</div>
		</div>
	</section>

	<section id="advantages">
		<div class="container">
			<div class="title-small">
				<h2>Почему в Чехове <strong>выбирают IMPERIUM?</strong></h2>
			</div>
			<div class="advantages-wrapper">
				<div class="row g-2 g-md-4 g-md-5">
					<div class="col-lg-2 advantage-box col-6">
						<div class="advantage-box__icon"><object data="<?php echo bloginfo('template_url'); ?>/assets/images/content/adv-icon-1.svg" type=""></object></div>
						<div class="advantage-box__text">
							<p>Рабочая атмосфера для тренировок</p>
						</div>
					</div>
					<div class="col-lg-2 advantage-box col-6">
						<div class="advantage-box__icon"><object data="<?php echo bloginfo('template_url'); ?>/assets/images/content/adv-icon-2.svg" type=""></object></div>
						<div class="advantage-box__text">
							<p>Лучшие тренера города</p>
						</div>
					</div>
					<div class="col-lg-2 advantage-box col-6">
						<div class="advantage-box__icon"><object data="<?php echo bloginfo('template_url'); ?>/assets/images/content/adv-icon-3.svg" type=""></object></div>
						<div class="advantage-box__text">
							<p>Бесплатные консультации по питанию</p>
						</div>
					</div>
					<div class="col-lg-2 advantage-box col-6">
						<div class="advantage-box__icon"><object data="<?php echo bloginfo('template_url'); ?>/assets/images/content/adv-icon-4.svg" type=""></object></div>
						<div class="advantage-box__text">
							<p>Современные тренажеры и оборудование</p>
						</div>
					</div>
					<div class="col-lg-2 advantage-box col-6">
						<div class="advantage-box__icon"><object data="<?php echo bloginfo('template_url'); ?>/assets/images/content/adv-icon-5.svg" type=""></object></div>
						<div class="advantage-box__text">
							<p>Удобная бесплатная парковка</p>
						</div>
					</div>
					<div class="col-lg-2 advantage-box col-6">
						<div class="advantage-box__icon"><object data="<?php echo bloginfo('template_url'); ?>/assets/images/content/adv-icon-6.svg" type=""></object></div>
						<div class="advantage-box__text">
							<p>Более 15 групповых программ</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="cards">
		<div class="wrapper">
			<div class="container">
				<div class="title-two-columns">
					<div class="title-two-columns__item left left-anim-item">
						<h2>Для вашего удобства мы разработали <span class="text-primary font-weight-bold">четыре
								тарифных плана</span> на посещение клуба</h2>
					</div>
					<div class="title-two-columns__item right right-anim-item">
						<p>Вы можете выбрать подходящий тариф , оставить заявку на сайте и при первом посещении менеджер оформит клубную карту за пару минут.</p>
					</div>
				</div>
				<div class="cards-box">
					<div class="cards-panel">
						<div class="cards-panel__item" data-tab="tab-1">
							<p class="big-text">Абонемент</p>
							<p class="small-text">1 месяц</p>
						</div>
						<div class="cards-panel__item" data-tab="tab-2">
							<p class="big-text">Абонемент</p>
							<p class="small-text">3 месяца</p>
						</div>
						<div class="cards-panel__item active" data-tab="tab-3">
							<p class="big-text">Абонемент</p>
							<p class="small-text">6 месяцев</p>
						</div>
						<div class="cards-panel__item" data-tab="tab-4">
							<p class="big-text">Абонемент</p>
							<p class="small-text">1 год</p>
						</div>
						<div class="cards-panel__item" data-tab="tab-5">
							<p class="big-text">Абонементы</p>
							<p class="small-text">По акции</p>
						</div>
					</div>
					<div class="cards-tabs">
						<div id="tab-1" class="single-tab">
							<div class="single-tab__header">
								<div class="info">
									<p>Данная карта прекрасно подойдет тем, кому важны комфортные условия для
										занятий без оплаты дополнительных услуг.</p>
								</div>
								<div class="logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo-black.png" alt="" /></div>
							</div>
							<div class="single-tab__info">
								<ul class="info-list">
									<li class="info-item">Групповые программы по расписанию с тренером</li>
									<li class="info-item">Безлимитное посещение клуба с 7:00 - 00:00</li>
									<li class="info-item">3 гостевых визита для ваших друзей</li>
								</ul>
							</div>
							<div class="single-tab__footer">
								<div class="price-box">
									<p class="big-text"><?php echo $month_1_price_new . 'р.' ?></p>
									<p class="small-text">продление <?php echo $month_1_price_old . 'р.' ?></p>
								</div>
								<div class="btn-box"><button class="btn btn-primary" data-call="modal-card" data-period="1 месяц">Купить</button></div>
							</div>
						</div>
						<div id="tab-2" class="single-tab">
							<div class="single-tab__header">
								<div class="info">
									<p>Данная карта прекрасно подойдет тем, кому важны комфортные условия для
										занятий без оплаты дополнительных услуг.</p>
								</div>
								<div class="logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo-black.png" alt="" /></div>
							</div>
							<div class="single-tab__info">
								<ul class="info-list">
									<li class="info-item">Групповые программы по расписанию с тренером</li>
									<li class="info-item">Безлимитное посещение клуба с 7:00 - 00:00</li>
									<li class="info-item">3 гостевых визита для ваших друзей</li>
								</ul>
							</div>
							<div class="single-tab__footer">
								<div class="price-box">
									<p class="big-text"><?php echo $month_3_price_new . 'р.' ?></p>
									<p class="small-text">продление <?php echo $month_3_price_old . 'р.' ?></p>
								</div>
								<div class="btn-box"><button class="btn btn-primary" data-call="modal-card" data-period="3 месяца">Купить</button></div>
							</div>
						</div>
						<div id="tab-3" class="single-tab active">
							<div class="single-tab__header">
								<div class="info">
									<p>Данная карта прекрасно подойдет тем, кому важны комфортные условия для
										занятий без оплаты дополнительных услуг.</p>
								</div>
								<div class="logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo-black.png" alt="" /></div>
							</div>
							<div class="single-tab__info">
								<ul class="info-list">
									<li class="info-item">Групповые программы по расписанию с тренером</li>
									<li class="info-item">Безлимитное посещение клуба с 7:00 - 00:00</li>
									<li class="info-item">3 гостевых визита для ваших друзей</li>
									<li class="info-item">Заморозка на 14 дней</li>
								</ul>
							</div>
							<div class="single-tab__footer">
								<div class="price-box">
									<p class="big-text"><?php echo $month_6_price_new . 'р.' ?></p>
									<p class="small-text">продление <?php echo $month_6_price_old . 'р.' ?></p>
								</div>
								<div class="btn-box"><button class="btn btn-primary" data-call="modal-card" data-period="6 месяцев">Купить</button></div>
							</div>
						</div>
						<div id="tab-4" class="single-tab">
							<div class="single-tab__header">
								<div class="info">
									<p>Данная карта прекрасно подойдет тем, кому важны комфортные условия для
										занятий без оплаты дополнительных услуг.</p>
								</div>
								<div class="logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo-black.png" alt="" /></div>
							</div>
							<div class="single-tab__info">
								<ul class="info-list">
									<li class="info-item">Групповые программы по расписанию с тренером</li>
									<li class="info-item">Безлимитное посещение клуба с 7:00 - 00:00</li>
									<li class="info-item">3 гостевых визита для ваших друзей</li>
									<li class="info-item">Заморозка 30 дней</li>
								</ul>
							</div>
							<div class="single-tab__footer">
								<div class="price-box">
									<p class="big-text"><?php echo $month_12_price_new . 'р.' ?></p>
									<p class="small-text">продление <?php echo $month_12_price_old . 'р.' ?></p>
								</div>
								<div class="btn-box"><button class="btn btn-primary" data-call="modal-card" data-period="1 год">Купить</button></div>
							</div>
						</div>
						<div id="tab-5" class="single-tab">
							<div class="single-tab__header">
								<div class="info">
									<p>
										<?php
										$default_text = 'На данный момент акций нет.<br> Следите за новостями клуба.';
										if ($sale_text != '') :
											echo $sale_text;
										else :
											echo $default_text;
										endif; ?>
									</p>
								</div>
								<div class="logo">
									<img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo-black.png" alt="">
								</div>
							</div>
							<div class="single-tab__info">
								<?php if ($sale_list) : ?>
									<ul class="info-list">
										<?php foreach ($sale_list as $content) : ?>
											<li class="info-item"><?php echo $content; ?></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</div>
							<div class="single-tab__footer">
								<div class="price-box">
									<p class="big-text">
										<?php if ( $sale_price ) :
											echo $sale_price . 'р.';
										else :
											echo '';
										endif; ?>
									</p>
								</div>
								<div class="btn-box">
									<?php if ( $sale_price ) : ?>
										<button class="btn btn-primary" data-call="modal-card" data-period="Абонемент по акции">Купить</button>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="programs">
		<div class="wrapper">
			<div class="img-left abs-img"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/programs_bg_item.png" alt="" /></div>
			<div class="img-right abs-img">
				<picture>
					<source srcset="<?php echo bloginfo('template_url'); ?>/assets/images/content/programs_bg_item.png" media="(min-width: 768px)" />
					<source srcset="<?php echo bloginfo('template_url'); ?>/assets/images/content/programs_bg_item-mob.png" />
					<img srcset="<?php echo bloginfo('template_url'); ?>/assets/images/content/programs_bg_item.png" alt="Декор" />
				</picture>
			</div>
			<div class="container">
				<div class="title">
					<h2><strong>Фитнес</strong> программы</h2>
					<p class="subtitle">Найди программу групповых тренировок, которая подходит именно тебе!</p>
					<p class="subtitle">Записаться на любую групповую тренировку и посмотреть расписание, вы сможете
						<a href="#free-training">здесь</a>
					</p>
				</div>
				<div class="slider-wrapper">
					<div class="swiper-container programs-swiper">
						<div class="swiper-wrapper">
							<?php
								$args = array(
									'post_type'      => 'groups',
									'posts_per_page' => 10,
									'orderby'        => 'menu_order'
								);

								$groups = new WP_Query( $args );
								while ( $groups->have_posts() ) : $groups->the_post(); ?>
									<?php
										$id = get_the_ID();
										$permalink = get_the_permalink();
									?>
									<div class="single-card swiper-slide">
										<div class="front" style="background: url('<?php echo get_the_post_thumbnail_url( $id, 'medium_large' ); ?>') center center / cover no-repeat;">
											<div class="single-card__name">
												<h3><?php the_title(); ?></h3>
											</div>
										</div>
										<div class="back">
											<div class="single-card__descr">
												<h4>Групповые тренировки<br>«<?php the_title(); ?>»</h4>
												<img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo-small.png" alt="Логотип" />
												<a class="btn btn-primary" href="<?php echo $permalink; ?>">Подробнее</a>
											</div>
										</div>
									</div>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>
					</div>
					<div class="swiper-pagination programs-pagination"></div>
					<div class="swiper-button-prev programs-button-prev"></div>
					<div class="swiper-button-next programs-button-next"></div>
				</div>
				<div class="button-box text-center mt-4">
					<a href="/groups" class="btn btn-white large">Все программы</a>
				</div>
			</div>
		</div>
	</section>

	<section id="trainers">
		<div class="logo-abs-container"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo-rotate.png" alt="" /></div>
		<div class="wrapper">
			<div class="container">
				<div class="title">
					<h2>Лучший <strong>тренерский состав</strong> города</h2>
				</div>
				<div class="trainers-carousel-wrap">
					<div class="trainers__description">
						<div class="description-wrapper">
							<p class="name"></p>
							<p class="direction">Направление: <span></span></p>
							<p class="work-experience">Стаж работы: <span></span></p>
							<p class="short-description"></p>
						</div>
					</div>
					<div class="trainers-swiper swiper-container swiper">
						<div class="swiper-wrapper trainers-swiper__wrapper">
							<?php
							$trainers = new wp_query([
								'post_type'      => 'trainers',
								'posts_per_page' => -1,
								'orderby'        => 'menu_order',
							]);
							if ($trainers->have_posts()) :
								while ($trainers->have_posts()) :
									$trainers->the_post();
									$tr_ID = get_the_ID();
									$name = get_the_title();
									$img = get_the_post_thumbnail_url(get_the_ID(), 'trainer_post_card_square');
									$napravlenie = get_field('napravlenie', get_the_ID());
									$stazh = get_field('stazh', get_the_ID());
									$short_desc = get_field('short_desc', get_the_ID());
									$full_desc = get_field('full_desc', get_the_ID());
							?>
									<div class="trainers-slide swiper-slide" data-trainer-id="<?php echo $tr_ID ?>">
										<div class="trainers-slide__img">
											<img src="<?php echo $img ?>" alt="Тренер <?php echo $name;?> Империум">
										</div>
										<div class="trainers-slide__btn">
											<button class="btn btn-primary" data-call="modal-trainer" data-trainer-id="<?php echo $tr_ID ?>">Записаться на занятие</button>
										</div>
										<div class="trainer-data" style="display: none">
											<p class="trainer-name"><?php echo $name ?></p>
											<p class="trainer-napravlenie"><?php echo $napravlenie ?></p>
											<p class="trainer-stazh"><?php echo $stazh ?></p>
											<p class="trainer-shortdesc"><?php echo $short_desc ?></p>
											<div class="trainer-fulldesc"><?php echo $full_desc ?></div>
											<p class="img-src"><?php echo $img ?></p>
										</div>
									</div>
							<?php
								endwhile;
								wp_reset_postdata();
							endif;
							?>
						</div>
						<div class="swiper-button-prev trainers-button-prev"></div>
						<div class="swiper-button-next trainers-button-next"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="free-training">
		<div class="adaptive-bg">
			<picture>
				<source srcset="<?php echo bloginfo('template_url'); ?>/assets/images/content/free-training_bg.jpg" media="(min-width: 768px)" />
				<source srcset="<?php echo bloginfo('template_url'); ?>/assets/images/content/free-training_bg-mob.jpg" />
				<img srcset="<?php echo bloginfo('template_url'); ?>/assets/images/content/free-training_bg-mob.jpg" alt="Фон" />
			</picture>
		</div>
		<div class="wrapper">
			<div class="container free-training__container">
				<div class="row gx-md-2 gx-lg-5 align-items-center">
					<div class="col-12 col-md-6 order-2 order-md-1">
						<div class="form-wrapper free-training__form">
							<div class="form-heading">
								<h2>Записаться на <strong>бесплатную</strong> тренировку</h2>
							</div>
							<div class="form-container">
								<?php echo do_shortcode('[contact-form-7 id="17" title="Бесплатная тренировка"]'); ?>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 order-1 order-md-2">
						<div class="video-container">
							<div class="video-box">
<!-- 								<picture>
									<source srcset="<?php echo bloginfo('template_url'); ?>/assets/images/content/video-preview.png" media="(min-width: 768px)" />
									<source srcset="<?php echo bloginfo('template_url'); ?>/assets/images/content/video-bg-mob.jpg" />
									<img srcset="<?php echo bloginfo('template_url'); ?>/assets/images/content/video-bg-mob.jpg" alt="Видео" />
								</picture> -->
								<video controls poster="<?php echo bloginfo('template_url'); ?>/assets/images/content/video-bg-mob.jpg">
									<source src="https://imperium-chekhov.ru/wp-content/uploads/2023/03/promo-video.mp4" type="video/mp4">
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="schedule-container">
			<div class="container">
				<div class="row gx-md-4 gx-lg-5 align-items-center">
					<div class="col-12 col-md-5 order-2 order-md-1">
						<div class="schedule-button-container"><button class="btn btn-white anim-btn" data-call="modal-schedule">Смотреть расписание</button></div>
					</div>
					<div class="col-md-7 col-12 order-1 order-md-2">
						<div class="schedule-info-container">
							<div class="schedule-title mb-3">
								<h2><strong>Расписание</strong> тренировок</h2>
							</div>
							<div class="row gx-md-3 align-items-center">
								<div class="col-md-2 social-box">
									<a class="social-icon" href="https://instagram.com/imperium.chekhov/" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/instagram.png" alt="Instagram" /></a>
								</div>
								<div class="col-md-10">
									<p>Не забудь подписаться на нас в соц сетях, чтобы быть в курсе последних
										событий и акций</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="gallery">
		<div class="wrapper">
			<div class="gallery-swiper-container swiper-container swiper">
				<div class="swiper-wrapper">
					<div class="gallery-slide swiper-slide" data-call="modal-gallery" data-img-modal="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-1.jpg"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-1_1.jpg" alt="" /></div>
					<div class="gallery-slide swiper-slide" data-call="modal-gallery" data-img-modal="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-2.jpg"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-2_1.jpg" alt="" /></div>
					<div class="gallery-slide swiper-slide" data-call="modal-gallery" data-img-modal="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-3.jpg"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-3_1.jpg" alt="" /></div>
					<div class="gallery-slide swiper-slide" data-call="modal-gallery" data-img-modal="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-4.jpg"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-4_1.jpg" alt="" /></div>
					<div class="gallery-slide swiper-slide" data-call="modal-gallery" data-img-modal="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-5.jpg"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-5_1.jpg" alt="" /></div>
					<div class="gallery-slide swiper-slide" data-call="modal-gallery" data-img-modal="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-6.jpg"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-6_1.jpg" alt="" /></div>
					<div class="gallery-slide swiper-slide" data-call="modal-gallery" data-img-modal="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-7.jpg"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-7_1.jpg" alt="" /></div>
					<div class="gallery-slide swiper-slide" data-call="modal-gallery" data-img-modal="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-8.jpg"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-8_1.jpg" alt="" /></div>
					<div class="gallery-slide swiper-slide" data-call="modal-gallery" data-img-modal="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-9.jpg"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-9_1.jpg" alt="" /></div>
					<div class="gallery-slide swiper-slide" data-call="modal-gallery" data-img-modal="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-10.jpg"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-10_1.jpg" alt="" /></div>
					<div class="gallery-slide swiper-slide" data-call="modal-gallery" data-img-modal="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-11.jpg"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-11_1.jpg" alt="" /></div>
					<div class="gallery-slide swiper-slide" data-call="modal-gallery" data-img-modal="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-12.jpg"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content//club-img-12_1.jpg" alt="" /></div>
				</div>
				<div class="swiper-button-prev gallery-button-prev"></div>
				<div class="swiper-button-next gallery-button-next"></div>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
