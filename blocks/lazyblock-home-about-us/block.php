<section id="about" class="home-about">
  <div class="home-about__wrapper">


    <div class="home-about__tile">
      <div class="home-about__img-wrapper">
        <?php if (isset($attributes['home-about-image']['id'])): ?>
          <?php
          $image_url = wp_get_attachment_image_url($attributes['home-about-image']['id'], 'large');
          $alt_text = get_post_meta($attributes['home-about-image']['id'], '_wp_attachment_image_alt', true);
          ?>
          <img loading="lazy" class="home-about__img" src="<?php echo esc_url($image_url); ?>"
            alt="<?php echo esc_attr($alt_text); ?>" />
        <?php endif; ?>


      </div>
      <div class="home-about__text-wrapper">
        <h2 class="home-about__heading"><?php echo esc_html($attributes['home-about-heading']) ?></h2>
        <h3 class="home-about__subheading"><?php echo esc_html($attributes['home-about-subheading']) ?></h3>
        <?php foreach ($attributes['home-about-text'] as $paragraph): ?>
          <p class="home-about__text">
            <?php echo esc_html($paragraph['paragraph']); ?>
          </p>
        <?php endforeach; ?>

        <div class="home-about__features-container">
          <div class="home-about__feature home-about__feature--left">
            <h4 class="home-about__feature-heading "><span class="counter" data-target="5">0</span>+</h4>
            <p class="home-about__feature-subheading">Years of experience</p>
            <p class="home-about__feature-text">We have over five years of proffesional experience</p>
          </div>
          <div class="home-about__feature home-about__feature--right">
            <h4 class="home-about__feature-heading "><span class="counter" data-target="200">0</span>+</h4>
            <p class="home-about__feature-subheading">Happy customers</p>
            <p class="home-about__feature-text">We have served more than 100 happy customers</p>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>