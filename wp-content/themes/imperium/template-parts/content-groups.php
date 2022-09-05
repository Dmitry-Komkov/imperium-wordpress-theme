<?php
/**
 * Template part for displaying group posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package imperiumchekhov
 */

  $content = get_field('group_content');
  $time = $content['time'];
  $level = $content['level'];
  $age = $content['age'];
  $trainer = $content['trainer'];
  $trainer_post_id = $trainer->ID;
  $trainer_name = $trainer->post_title;
  $trainer_exp = get_field('stazh', $trainer_post_id);
  $trainer_desc = get_field('short_desc', $trainer_post_id);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="row">
    <div class="col-lg-4">
      <header class="entry-header">
        <?php
        if ( is_singular() ) :
          the_title( '<h2 class="entry-title"><span>', '</span><span class="dash">—</span></h2>' );
        else :
          the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;
    
        if ( 'post' === get_post_type() ) :
          ?>
          <div class="entry-meta">
            <?php
            imperium_posted_on();
            imperium_posted_by();
            ?>
          </div><!-- .entry-meta -->
        <?php endif; ?>
      </header><!-- .entry-header -->
    </div>
    <div class="col-lg-8">
      <div class="entry-content">
        <?php
        the_content(
          sprintf(
            wp_kses(
              /* translators: %s: Name of current post. Only visible to screen readers */
              __( 'Продолжить чтение<span class="screen-reader-text"> "%s"</span>', 'imperium' ),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            wp_kses_post( get_the_title() )
          )
        ); ?>
      </div><!-- .entry-content -->
    </div>
  </div>

  <div class="post-content">
    <h2 class="post-subtitle">Как проходит тренировка</h2>
    <div class="row">
      <div class="col-lg-8 mb-4 mb-lg-0">
        <div class="post-thumb">
          <?php imperium_post_thumbnail(); ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="train-params">
          <?php if ( $time ) : ?>
            <div class="train-params__item">
              <?php echo load_inline_svg( 'time.svg' ); ?>
              <div class="box">
                <h5 class="item-title">Время тренировки</h5>
                <p><?php echo $time; ?></p>
              </div>
            </div>
          <?php endif; ?>
          <?php if ( $level ) : ?>
            <div class="train-params__item">
              <?php echo load_inline_svg( 'dumbell.svg' ); ?>
              <div class="box">
                <h5 class="item-title">Уровень подготовки</h5>
                <p><?php echo $level; ?></p>
              </div>
            </div>
          <?php endif; ?>
          <?php if ( $age ) : ?>
            <div class="train-params__item">
              <?php echo load_inline_svg( 'man-fitness.svg' ); ?>
              <div class="box">
                <h5 class="item-title">Кому подходит</h5>
                <p><?php echo $age; ?></p>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="post-trainer">
    <div class="row">
      <div class="col-md-4 mb-4 mb-md-0">
        <h2 class="post-subtitle">Кто проводит тренировку</h2>
      </div>
      <div class="col-md-8">
        <div class="trainer-card">
          <div class="trainer-description">
            <h5 class="trainer-name"><?php echo $trainer_name; ?></h5>
            <p><strong>Стаж работы:</strong> <?php echo $trainer_exp; ?></p>
            <p><?php echo $trainer_desc; ?></p>
          </div>
          <div class="trainer-thumb">
            <?php 
              echo get_the_post_thumbnail($trainer_post_id, 'trainer_post_card');
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="post-form">
    <h4 class="post-subtitle">Запишись на тренировку <br><i>«<?php the_title(); ?>»</i> прямо сейчас!</h4>

    <div class="form-box">
      <?php 
        $shortcodePlain = '[contact-form-7 id="207" title="Форма Групповой тренировки" html_class="form" group-page="' . get_the_title() . '"]';
      echo do_shortcode($shortcodePlain); ?>
    </div>
  </div>

	<footer class="entry-footer">
		<?php imperium_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
