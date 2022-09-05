<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package imperiumchekhov
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="banner error-404 not-found">
			<div class="container">
				<div class="banner__row row">
					<div class="col-md-6">
						<h1 class="page-title"><?php esc_html_e( 'Упс! Эта страница не найдена...', 'imperium' ); ?></h1>
					</div>
				</div>
			</div>
		</section>

		<section class="page-content">
			<div class="container">
				<p>Кажется, по этому адресу ничего не найдено. Попробуйте сначала.</p>
				<p><a href="/">Вернуться на главную</a></p>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
