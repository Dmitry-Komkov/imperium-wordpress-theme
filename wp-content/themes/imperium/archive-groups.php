<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package imperiumchekhov
 */
<<<<<<< HEAD

get_header();
=======
$header_args = array(
  'promo_bar' => false,
);
get_header(null, $header_args);
>>>>>>> update
?>

	<main id="primary" class="site-main">

		<section class="banner single-groups-banner">
			<div class="container">
				<div class="banner__row row">
					<div class="col-md-10">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</div>
				</div>
			</div>
		</section>

		<section class="breadcrumbs">
			<div class="container">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
				?>
			</div>
		</section>

		<?php if ( have_posts() ) : ?>
			<section class="page-content">
				<div class="container">
					<div class="posts-grid">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/post-card', get_post_type() );

						endwhile;

							the_posts_navigation();

							else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
				</div>
			</section>

	</main><!-- #main -->

<?php
get_footer();
