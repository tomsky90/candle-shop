<section class="home-why-us">
  <div class="home-why-us__wrapper">


    <div class="home-why-us__tile">
      <div class="home-why-us__img-wrapper">
        <?php if (isset($attributes['why-us-img']['id'])): ?>
          <?php
          $image_url = wp_get_attachment_image_url($attributes['why-us-img']['id'], 'large');
          $alt_text = get_post_meta($attributes['why-us-imge']['id'], '_wp_attachment_image_alt', true);
          ?>
          <img loading="lazy" class="home-about__img" src="<?php echo esc_url($image_url); ?>"
            alt="<?php echo esc_attr($alt_text); ?>" />
        <?php endif; ?>


      </div>
      <div class="home-why-us__text-wrapper">

        <div class="home-why-us__tile-wrapper">
          <div class="home-why-us__tile-img-wrapper">
            <img class="home-why-us__tile-img"
              src="<?php echo get_template_directory_uri() ?>/assets/images/In-Transit.png" alt="delivery truck">
          </div>
          <div class="home-why-us__tile-text-wrapper">
            <h3 class="home-why-us__tile-heading">Fast and free delivery</h3>
            <p class="home-why-us__tile-text">Order now and recive your delivery withing few days for free</p>
          </div>
        </div>


        <div class="home-why-us__tile-wrapper">
          <div class="home-why-us__tile-img-wrapper">
            <img class="home-why-us__tile-img"
              src="<?php echo get_template_directory_uri() ?>/assets/images/Credit-Card.png" alt="credit card">
          </div>
          <div class="home-why-us__tile-text-wrapper">
            <h3 class="home-why-us__tile-heading">Fast and secure payment</h3>
            <p class="home-why-us__tile-text">You can make your payment in the way that best suits you</p>
          </div>
        </div>

        <div class="home-why-us__tile-wrapper">
          <div class="home-why-us__tile-img-wrapper">
            <img class="home-why-us__tile-img"
              src="<?php echo get_template_directory_uri() ?>/assets/images/Mountain.png" alt="mountain">
          </div>
          <div class="home-why-us__tile-text-wrapper">
            <h3 class="home-why-us__tile-heading">Safe for envirement</h3>
            <p class="home-why-us__tile-text">Our candles are made 100% from natural ingridients</p>
          </div>
        </div>




      </div>

    </div>
  </div>
</section>