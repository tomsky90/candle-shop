<?php $reviews_number = count($attributes['reviews']) ?>

<section class="reviews">
  <h2 class="reviews__heading"><?php echo esc_html($attributes['reviews-heading']) ?></h2>
  <h3 class="reviews__subheading"><?php echo esc_html($attributes['reviews-subheading']) ?></h3>
  <div class="reviews__features-container">
    <div class="reviews__feature home-about__feature--left">
      <h4 class="reviews__feature-heading"><span class="counter" data-target="5">0</span>+</h4>
      <p class="reviews__feature-subheading">Years of experience</p>
      <p class="reviews__feature-text">We have over five years of proffesional experience</p>
    </div>
    <div class="reviews__feature reviews__feature--right">
      <h4 class="reviews__feature-heading"><span class="counter" data-target="150">0</span>+</h4>
      <p class="reviews__feature-subheading">Five stars reviews</p>
      <p class="reviews__feature-text">We have over 150 five stars reviews </p>
    </div>
  </div>
  <div class="reviews__wrapper">




    <div class="reviews__slider">

      <?php foreach ($attributes['reviews'] as $review): ?>
        <div class='reviews__review-wrapper'>
          <img class="reviews__quote" src="<?php echo get_template_directory_uri(); ?>/assets/images/quote.webp" alt=''>
          <div class="reviews__image-wrapper">
            <?php if (isset($review['reviews-image']['id'])): ?>
              <?php
              $image_url = wp_get_attachment_image_url($review['reviews-image']['id'], 'large');
              $alt_text = get_post_meta($review['reviews-image']['id'], '_wp_attachment_image_alt', true);
              ?>
              <img class="reviews__img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt_text); ?>" />
            <?php endif; ?>
          </div>
          <div class="reviews__text-wrapper">
            <img class="reviews__stars" src="<?php echo get_template_directory_uri(); ?>/assets/images/stars.webp"
              alt='Five stars'>
            <p class="reviews__text"><?php echo esc_html($review['reviews-text']) ?></p>
            <p class="reviews__text"><?php echo esc_html($review['reviews-author']) ?></p>
          </div>
        </div>
      <?php endforeach ?>


    </div>
    <div class="reviews__nav-wrapper">
      <?php for ($i = 0; $i < $reviews_number; $i++) {
        echo '<button aria-label="Go to slide" class="reviews__nav-btn"></button>';
      } ?>
    </div>
  </div>
</section>