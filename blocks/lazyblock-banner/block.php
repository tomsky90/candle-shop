<section id="home" class="banner">
  <div class="banner__blure"></div>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <!-- SLIDE 1 -->
      <div class="swiper-slide">
        <div class="banner__text-wrapper">
          <h2 class="banner__subheading"><?php echo esc_html($attributes['banner-subheading-slide-1']); ?></h2>
          <p class="banner__text"><?php echo esc_html($attributes['banner-text-slide-1']); ?></p>
          <a class="banner__cta" href="http://candle-shop.local/shop/">Shop Now</a>
        </div>
        <div class="banner__img-wrapper">
          <?php if (isset($attributes['banner-img-slide-1']['id'])): ?>
            <?php
            $image_url1 = wp_get_attachment_image_url($attributes['banner-img-slide-1']['id'], 'large');
            $mobile_image_url1 = wp_get_attachment_image_url($attributes['banner-img-slide-1']['id'], 'medium');
            $alt_text1 = get_post_meta($attributes['banner-img-slide-1']['id'], '_wp_attachment_image_alt', true);
            ?>
            <picture>
              <source media="(max-width: 600px)" srcset="<?php echo esc_url($mobile_image_url1); ?>" />
              <img class="banner__bgc-image" src="<?php echo esc_url($image_url1); ?>"
                alt="<?php echo esc_attr($alt_text1); ?>" />
            </picture>
          <?php endif; ?>
        </div>
      </div>

      <!-- SLIDE 2 -->
      <div class="swiper-slide">
        <div class="banner__text-wrapper">
          <h2 class="banner__subheading"><?php echo esc_html($attributes['banner-subheading-slide-2']); ?></h2>
          <p class="banner__text"><?php echo esc_html($attributes['banner-text-slide-2']); ?></p>
          <a class="banner__cta" href="http://candle-shop.local/shop/">Shop Now</a>
        </div>
        <div class="banner__img-wrapper">
          <?php if (isset($attributes['banner-img-slide-2']['id'])): ?>
            <?php
            $image_url2 = wp_get_attachment_image_url($attributes['banner-img-slide-2']['id'], 'large');
            $mobile_image_url2 = wp_get_attachment_image_url($attributes['banner-img-slide-2']['id'], 'medium');
            $alt_text2 = get_post_meta($attributes['banner-img-slide-2']['id'], '_wp_attachment_image_alt', true);
            ?>
            <picture>
              <source media="(max-width: 600px)" srcset="<?php echo esc_url($mobile_image_url2); ?>" />
              <img class="banner__bgc-image" src="<?php echo esc_url($image_url2); ?>"
                alt="<?php echo esc_attr($alt_text2); ?>" />
            </picture>
          <?php endif; ?>
        </div>
      </div>

      <!-- SLIDE 3 -->
      <div class="swiper-slide">
        <div class="banner__text-wrapper">
          <h2 class="banner__subheading"><?php echo esc_html($attributes['banner-subheading-slide-3']); ?></h2>
          <p class="banner__text"><?php echo esc_html($attributes['banner-text-slide-3']); ?></p>
          <a class="banner__cta" href="http://candle-shop.local/shop/">Shop Now</a>
        </div>
        <div class="banner__img-wrapper">
          <?php if (isset($attributes['banner-img-slide-3']['id'])): ?>
            <?php
            $image_url3 = wp_get_attachment_image_url($attributes['banner-img-slide-3']['id'], 'large');
            $mobile_image_url3 = wp_get_attachment_image_url($attributes['banner-img-slide-3']['id'], 'medium');
            $alt_text3 = get_post_meta($attributes['banner-img-slide-3']['id'], '_wp_attachment_image_alt', true);
            ?>
            <picture>
              <source media="(max-width: 600px)" srcset="<?php echo esc_url($mobile_image_url3); ?>" />
              <img class="banner__bgc-image" src="<?php echo esc_url($image_url3); ?>"
                alt="<?php echo esc_attr($alt_text3); ?>" />
            </picture>
          <?php endif; ?>
        </div>
      </div>

    </div>

    <!-- Paginacja i nawigacja -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>