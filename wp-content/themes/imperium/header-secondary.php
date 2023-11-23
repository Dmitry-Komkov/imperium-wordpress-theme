<?php

/**
 * Secondary, non sticky header, for a theme
 *
 * @package imperiumchekhov
 */

$promo_bar = true;
$contacts = get_field('contacts_group', '8');
$phone_1 = $contacts['phone_1'];
$phone_2 = $contacts['phone_2'];

if (!empty($args) && !$args['promo_bar']) {
	$promo_bar = false;
}

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="header" class="header header-secondary">
			<?php if ( $promo_bar ) : ?>
			<div id="promo-banner-1" class="promo-banner py-2">
				<div class="container">
					<div class="promo-banner__box">
						<div class="promo-banner__col">
							<p>Турнир по пауэрлифтингу с присвоением разрядов до мастера спорта</p>
						</div>
						<div class="promo-banner__col">
							<a href="/imperium-cup" class="btn btn-white">Подробнее</a>
						</div>
					</div>
				</div>
				<button class="close-button" data-close="#promo-banner-1" aria-label="Закрыть баннер"><span></span><span></span></button>
			</div>
			<?php endif; ?>
			<div class="wrapper">
				<div class="navigation-box">
					<button class="menu-toggler" type="button" data-toggle="menu-collapse" data-target="#menuItems" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<nav id="menuItems" class="nav-menu">
						<div class="container py-3">
							<div class="menu-box">
								<div class="nav-menu__logo">
									<a href="/" class="logo__link"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/content/logo.png" alt="Логотип Империум фитнес клуб" /></a>
								</div>
								<?php
								wp_nav_menu([
									'theme_location'  => '',
									'menu'            => 'Главное меню',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'menu__list nav',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 1,
									'walker'          => '',
								]);
								?>
								<div class="nav-menu__contacts">
									<div class="phone__number">
										<div>
											<a href="tel:<?php echo $phone_1; ?>" class="phone__link"><?php echo $phone_1; ?></a>
										</div>
										<?php if ($phone_2) : ?>
											<div>
												<a href="tel:<?php echo $phone_2; ?>" class="phone__link"><?php echo $phone_2; ?></a>
											</div>
										<?php endif; ?>
									</div>
									<div class="phone__button"><button class="btn btn_shine" data-call="modal-callback">Заказать звонок</button></div>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header>