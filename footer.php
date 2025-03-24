<?php $logo = get_theme_mod('custom_logo'); ?>

<footer class="footer">

  <div class="footer__wrapper">
    <div class="footer__links-wrapper">
      <a href="./home">
        <img loading="lazy" class="footer__logo"
          src="<?php echo get_template_directory_uri() ?>/assets/images/new-logo.webp" alt="footer logo" />
      </a>
    </div>
    <div class="footer__links-wrapper">
      <h3 class="footer__heading">Contact</h3>



      <div class="footer__link-wrapper">
        <img class="footer__link-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/Email.webp"
          alt="mail" />
        <a class="footer__link" href="mailto:hello@candleshop.com">
          hello@candleshop.com
        </a>
      </div>
    </div>
    <div class="footer__links-wrapper">
      <h3 class="footer__heading">About</h3>
      <div class="footer__link-wrapper">
        Hande made candles, a perfect gift for every occasion.
      </div>

    </div>
    <div class="footer__links-wrapper">
      <h3 class="footer__heading">Links</h3>
      <ul class="footer__nav">
        <li class='footer__link-wrapper'><a class="footer__link" href="https://home">Home</a></li>
        <li class='footer__link-wrapper'><a class="footer__link" href="https://">Shop</a></li>
        <li class='footer__link-wrapper'><a class="footer__link" href="https://tk-webdev.com/#services">Cart</a>
        </li>
        <li class='footer__link-wrapper'><a class="footer__link" href="https://tk-webdev.com/#prices">My Account</a>
        </li>



      </ul>
    </div>

  </div>
  <p class="footer__copyright">&copy; 2025 All rights reserved</p>
</footer>


<?php wp_footer() ?>