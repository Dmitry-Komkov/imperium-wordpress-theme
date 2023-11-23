<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package imperiumchekhov
 */

 $contacts = get_field('contacts_group', '8');
 $phone_1 = $contacts['phone_1'];
 $phone_2 = $contacts['phone_2'];
?>

<div id="information">
	<div class="wrapper">
		<div class="d-md-none information__logo_mob">
			<picture>
				<source srcset="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo-mob-footer.png" />
				<img srcset="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo-mob-footer.png" alt="Лого" />
			</picture>
		</div>
		<div class="info__outer">
			<div class="info__inner">
				<div class="container">
					<div class="info__title">
						<h2>imperium – это:</h2>
					</div>
					<div class="info__desc">
						<ul class="info__list">
							<li>Новые, анатомически удобные тренажеры последнего поколения</li>
							<li>Площадь зала — более 800 м2</li>
							<li>Многофункциональный групповой зал</li>
							<li>Более 15 направлений фитнеса</li>
							<li>Просторная кардио зона</li>
							<li>Большой, функциональный зал силовых тренажеров</li>
							<li>Фитнес бар</li>
							<li>Квалифицированный тренерский состав с высшим, профильным образованием и со
								стажем работы от 5 лет</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="contacts" class="contacts__outer">
			<div class="contacts__inner">
				<div class="container">
					<div class="row gx-md-5">
						<div class="col-lg-4 col-12 col-md-5 contacts__info order-2 order-md-1">
							<div class="contacts__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo-contacts.png" alt="Логотип" /></div>
							<div class="contacts__info-box">
								<div class="address-info">
									<p>Адрес:</p>
									<p>
										Чехов, ул. Первомайская, 33,<br />
										ТЦ Весна, 2 этаж
									</p>
								</div>
								<div class="address-info">
									<p>Телефон:</p>
									<div>
										<a href="tel:<?php echo $phone_1; ?>" class="phone__link"><?php echo the_field('telefon-1', 8) ?></a>
									</div>
									<?php if ($phone_2) : ?>
										<div>
											<a href="tel:<?php echo $phone_2; ?>" class="phone__link"><?php echo $phone_2; ?></a>
										</div>
									<?php endif; ?>
								</div>
								<div class="address-info">
									<p>Почта:</p>
									<a href="mailto:info@imperium-chekhov.ru" class="phone__link">info@imperium-chekhov.ru</a>
								</div>
							</div>
						</div>
						<div class="col-lg-8 col-12 col-md-7 contacts__map order-1 order-md-2">
							<div id="map_google">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2280.198322440568!2d37.45295551602844!3d55.14480814618511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41354233468201d1%3A0xe2d8736f6fd3edaa!2z0J_QtdGA0LLQvtC80LDQudGB0LrQsNGPINGD0LsuLCAzMywg0KfQtdGF0L7Qsiwg0JzQvtGB0LrQvtCy0YHQutCw0Y8g0L7QsdC7LiwgMTQyMzA2!5e0!3m2!1sru!2sru!4v1596197071954!5m2!1sru!2sru" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer id="footer" class="footer">
		<div class="footer__container">
			<div class="container">
				<div class="row gx-2 gx-lg-5 g-md-3 align-items-center">
					<div class="footer__item col-md-8 col-6 col-lg-3 order-2 order-md-1">
						<p><?php echo date("Y"); ?> © Все права защищены. Информация на сайте не является публичной офертой</p>
					</div>
					<div class="footer__item col-6 col-md-4 col-lg-6 order-1 order-md-2" style="text-align: center;"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo-mob-footer.png" alt="Логотип" /></div>
					<div class="footer__item col-md-12 col-lg-3 col-12 order-3 order-md-3 d-flex mt-4 mt-lg-0 align-items-center" style="text-align: left;">
						<div class="pe-4">
							<a href="#!" style="display: block" class="mb-1">
								Политика<br />
								конфиденциальности
							</a>
							<a href="<?php echo wp_get_upload_dir()['baseurl'] ?>/imperium-docs/dogovor.pdf" target="_blank" noopener noreferrer style="display: block">
								Договор оказания услуг
							</a>
						</div>
						<a class="social-icon" href="https://instagram.com/imperium.chekhov/" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/instagram.png" alt="Instagram" /></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<section class="modal modal-form" id="modal-card">
	<div class="wrapper">
		<div class="close-modal-button">
			<button type="button" class="close" data-close="modal-card" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="modal-card__container">
			<div class="modal-card__head">
				<div class="modal-card__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo.png" alt="Логотип" /></div>
			</div>
			<div class="modal-card__body">
				<div class="modal-card__text">
					<p>Вы выбрали абонемент на <span class="period"></span></p>
					<p>Оставьте заявку прямо сейчас и получите план питания и тренировок в подарок!</p>
				</div>
				<div class="modal-card__form callback-form__container">
					<?php echo do_shortcode('[contact-form-7 id="20" title="Бронь карты"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="modal" id="modal-gallery">
	<div class="wrapper">
		<div class="close-modal-button">
			<button type="button" class="close" data-close="modal-gallery" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="modal-body"><img class="modal-gallery__img" alt="" /></div>
		<div class="gallery-modal-button-prev swiper-button-prev"></div>
		<div class="gallery-modal-button-next swiper-button-next"></div>
	</div>
</section>
<section class="modal" id="modal-schedule">
	<div class="wrapper">
		<div class="close-modal-button">
			<button type="button" class="close" data-close="modal-schedule" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="modal-schedule__container">
			<div class="title text-center">
				<h2>
					Расписание групповых программ
				</h2>
			</div>
			<div id="mf_schedule_widget_cont_arl">
				<?php
				$schedule = get_field('schedule_group', '8')['schedule'];
				if ( $schedule ) :
					echo wp_get_attachment_image($schedule, 'full');
				endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="modal modal-form" id="modal-callback">
	<div class="wrapper">
		<div class="close-modal-button">
			<img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo-cb.png" alt="Логотип" /> <button type="button" class="close" data-close="modal-callback" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="modal-body">
			<div class="cb-heading">
				<h2>Заказать звонок</h2>
			</div>
			<div class="callback-form__container">
				<?php echo do_shortcode('[contact-form-7 id="10" title="Обратный звонок"]'); ?>
			</div>
		</div>
	</div>
</section>
<section class="modal modal-form" id="modal-sale">
	<div class="wrapper">
		<div class="close-modal-button">
			<img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo-cb.png" alt="Логотип" /> <button type="button" class="close" data-close="modal-sale" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="modal-body">
			<div class="cb-heading">
				<h2>запишись на <strong>бесплатную</strong> тренировку прямо сейчас</h2>
			</div>
			<div class="callback-form__container">
				<?php echo do_shortcode('[contact-form-7 id="14" title="Акция"]'); ?>
			</div>
		</div>
	</div>
</section>
<section class="modal modal-form" id="modal-trainer">
	<div class="wrapper">
		<div class="close-modal-button">
			<button type="button" class="close" data-close="modal-trainer" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="modal-body">
			<div class="trainer__img-box"></div>
			<div class="trainer__info-box">
				<div class="trainer__info">
					<div class="trainer__name-box">
						<p></p>
					</div>
					<div class="trainer__desc-box">
						<p></p>
					</div>
				</div>
				<div class="callback-form__container">
					<?php echo do_shortcode('[contact-form-7 id="16" title="Форма заявки для тренера"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>