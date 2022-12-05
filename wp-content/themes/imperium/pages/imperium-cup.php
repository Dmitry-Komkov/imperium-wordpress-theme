<?php

/**
 * Template name: Imperium Cup 2
 * Imperium Cup 2 template file
 *
 *
 * @package imperiumchekhov
 */

$header_args = array(
  'promo_bar' => false,
);
get_header('secondary', $header_args);

$banner = get_field('banner');
$banner_bg = $banner['background'];
$banner_logo = $banner['logo'];

$kind_contests = get_field('kinds_of_contest');
$contest_image = $kind_contests['image'];
$contest_date = $kind_contests['date'];

?>

<main id="primary" class="site-main">
  <section id="banner" class="top-banner">
    <div class="background-image">
      <?php
      if ($banner_bg) {
        echo wp_get_attachment_image($banner_bg, 'full');
      }
      ?>
    </div>
    <div class="top-banner__content">
      <div class="container">
        <div class="top-banner__header">
          <div class="row flex-column align-items-end justify-content-lg-between">
            <div class="col-7 col-lg-8 text-end">
              <p>Фитнес-клуб IMPERIUM FITNESS ARENA г. Чехов, ул. Первомайская,</p>
            </div>
            <div class="col-5 col-lg-4 text-end">
              <p>13 ноября 2022г.</p>
            </div>
          </div>
        </div>
        <div class="top-banner__logo text-center mb-4">
          <?php
          if ($banner_logo) {
            echo wp_get_attachment_image($banner_logo, 'medium-large');
          }
          ?>
        </div>
        <div class="top-banner__text">
          <p>С присвоением разрядов до <strong>Мастера Спорта</strong> включительно </p>
          <h1 class="title">ТУРНИР ПО ПАУЭРЛИФТИНГУ И АРМРЕСТЛИНГУ <span>#IMPERIUM_CUPII</span></h1>
        </div>
      </div>
    </div>
  </section>

  <section id="main-info" class="main-info">
    <div class="container">
      <div class="row contest-heading">
        <div class="col-lg-8">
          <h2 class="title title--large text-uppercase">Виды соревнований</h2>
        </div>
        <div class="col-lg-4">
          <p class="title title--small">Первое взвешивание:</p>
          <p class="text"><?php echo $contest_date; ?></p>
        </div>
      </div>
      <div class="row contest-details">
        <div class="col-lg-8">
          <?php
          if ($contest_image) {
            echo wp_get_attachment_image($contest_image, 'post-thumbnail');
          }
          ?>
        </div>
        <div class="col-lg-4">
          <div class="contest-list">
            <div class="contest-list__item">
              <?php echo load_inline_svg('armwrestling.svg'); ?>
              <p>Армрестлинг</p>
            </div>
            <div class="contest-list__item">
              <?php echo load_inline_svg('powerlifting.svg'); ?>
              <p>Пауэрлифтинг</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="disciplines" class="disciplines">
    <div class="container">
      <div class="row title-row">
        <div class="col-lg-9">
          <h2 class="title title--large text-uppercase">
            Виды спортивных дисциплин по ПАУЭРЛИФТИНГУ
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <h3 class="subtitle">Дисциплины</h3>
        </div>
        <div class="col-lg-8">
          <ul class="disciplines__list">
            <li class="disciplines__list__item">Приседания без экипировки</li>
            <li class="disciplines__list__item">Приседание в экипировке</li>
            <li class="disciplines__list__item">Жим штанги лёжа без экипировки</li>
            <li class="disciplines__list__item">Жим штанги лёжа в софт-экипировке 1 петля</li>
            <li class="disciplines__list__item">Жим штанги лёжа в софт-экипировке 2–3 петля</li>
            <li class="disciplines__list__item">Жим штанги лёжа в однослойной экипировке</li>
            <li class="disciplines__list__item">Жим штанги лёжа в многослойной экипировке</li>
            <li class="disciplines__list__item">Становая тяга без экипировки</li>
            <li class="disciplines__list__item">Становая тяга в однослойной экипировке</li>
            <li class="disciplines__list__item">Становая тяга в многослойной экипировке</li>
            <li class="disciplines__list__item">Строгий подъем на бицепс</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="awards" class="awards">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-3">
          <h2 class="title title--large text-uppercase">
            Награды
          </h2>
        </div>
        <div class="col-lg-8">
          <div class="icon-box">
            <?php echo load_inline_svg('award.svg'); ?>
            <p>Спортсмены, занявшие первые три места в каждой весовой и возрастной категории, награждаются эксклюзивными медалями и дипломами</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact-form" class="contact-form">
    <div class="container">
      <div class="form-wrapper">
        <h4 class="post-subtitle">Предварительные заявки от команд и спортсменов <i>ОБЯЗАТЕЛЬНЫ</i>. Заявки принимаем до 01.10.2022</h4>
  
        <div class="form-box">
          <?php echo do_shortcode('[contact-form-7 id="238" title="Форма заявки на турнир" html_class="form"]'); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer( 'simple' );