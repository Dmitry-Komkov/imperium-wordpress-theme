<?php
/**
 * Template part for displaying post card
 *
 * @package imperiumchekhov
 */

?>

<article class="post-card">
  <div class="post-card__wrapper">
    <div class="post-thumb">
        <?php imperium_post_thumbnail('medium'); ?>
    </div>
    <div class="post-card__content">
      <header class="post-card__header">
        <?php the_title( '<h2 class="post-card__title">', '</h2>' ); ?>
      </header>
    </div>
  </div>
</article>
