<?php $logo = get_theme_mod('custom_logo'); ?>

<footer class="footer">

  <div class="footer__wrapper">
    <div class="footer__links-wrapper">
      <a href="./home">
        <img loading="lazy" class="footer__logo"
          src="<?php echo get_template_directory_uri() ?>/assets/images/logo1.webp" alt="footer logo" />
      </a>
    </div>
    <div class="footer__links-wrapper">
      <h3 class="footer__heading">Contact</h3>



      <div class="footer__link-wrapper">
        <img class="footer__link-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/Email.webp"
          alt="mail" />
        <a class="footer__link" href="mailto:hello@wirraljetwashing.com">
          hello@wirraljetwashing.com
        </a>
      </div>
    </div>
    <div class="footer__links-wrapper">
      <h3 class="footer__heading">About</h3>
      <div class="footer__link-wrapper">
        We are wirral jetwashing and we serve customers around wirral for all they cleaning needs
      </div>

    </div>
    <div class="footer__links-wrapper">
      <h3 class="footer__heading">Links</h3>
      <ul class="footer__nav">
        <li class='footer__link-wrapper'><a class="footer__link" href="https://tk-webdev.com/#home">Home</a></li>
        <li class='footer__link-wrapper'><a class="footer__link" href="https://tk-webdev.com/#about">About</a></li>
        <li class='footer__link-wrapper'><a class="footer__link" href="https://tk-webdev.com/#services">Services</a>
        </li>
        <li class='footer__link-wrapper'><a class="footer__link" href="https://tk-webdev.com/#prices">Prices</a></li>
        <li class='footer__link-wrapper'><a class="footer__link" href="https://tk-webdev.com/#portfolio">Portfolio</a>
        </li>
        <li class='footer__link-wrapper'><a class="footer__link" href="https://tk-webdev.com/blog/">Blog</a></li>
        <li class='footer__link-wrapper'><a class="footer__link" href="https://tk-webdev.com/#contact">Contact</a></li>


      </ul>
    </div>

  </div>
  <p class="footer__copyright">&copy; 2025 All rights reserved</p>
</footer>


<?php wp_footer() ?>