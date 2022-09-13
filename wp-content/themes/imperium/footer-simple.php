<?php

/**
 * The template for displaying the footer without information
 * 
 * @package imperiumchekhov
 */

$contacts = get_field('contacts_group', '8');
$phone_1 = $contacts['phone_1'];
$phone_2 = $contacts['phone_2'];
?>

<footer class="footer" id="footer">
  <div class="footer__wrapper">
    <div class="footer__contacts">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="footer__contacts__widget">
              <?php
              if (function_exists('dynamic_sidebar'))
                dynamic_sidebar('footer-contacts');
              ?>
            </div>
          </div>
          <div class="col-lg-8">
            <div id="map_google">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2280.198322440568!2d37.45295551602844!3d55.14480814618511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41354233468201d1%3A0xe2d8736f6fd3edaa!2z0J_QtdGA0LLQvtC80LDQudGB0LrQsNGPINGD0LsuLCAzMywg0KfQtdGF0L7Qsiwg0JzQvtGB0LrQvtCy0YHQutCw0Y8g0L7QsdC7LiwgMTQyMzA2!5e0!3m2!1sru!2sru!4v1596197071954!5m2!1sru!2sru" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p><?php echo date("Y"); ?> © Все права защищены. Информация на сайте не является публичной офертой</p>
          </div>
          <div class="col-lg-6">
            <div class="footer__bottom__links">
              <div class="pe-4">
                <a href="#!" style="display: block" class="mb-1">
                  Политика конфиденциальности
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
    </div>
  </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>