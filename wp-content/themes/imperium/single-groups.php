<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package imperiumchekhov
 */

get_header();

$content = get_field('group_content');
$title = $content['title'];
?>

	<main id="primary" class="site-main">

		<section class="banner single-groups-banner">
			<div class="container">
				<div class="banner__row row">
					<div class="col-md-10">
						<?php if ( $title ) : ?>
							<h1 class="page-title"><?php echo $title; ?></h1>
						<?php else : ?>
							<h1 class="page-title"><?php echo the_title(); ?></h1>
						<?php endif; ?>
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

		<section class="single-groups-content">
			<div class="container">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content-groups', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => load_inline_svg('arrow.svg') . '<span class="nav-subtitle">' . esc_html__( 'Предыдущий:', 'imperium' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Следующий:', 'imperium' ) . '</span><span class="nav-title">%title</span>' . load_inline_svg('arrow.svg'),
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
