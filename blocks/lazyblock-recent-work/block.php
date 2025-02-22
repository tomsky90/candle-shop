<section id="portfolio" class="gallery">
  <h2 class="gallery__heading"><?php echo esc_html($attributes['recent-work-heading']) ?></h2>

  <div class="gallery__images-wrapper">
    <?php foreach ($attributes['recent-work-repeater'] as $image): ?>
      <div><?php if (isset($attributes['banner-small-img']['id'])): ?>
          <?php
          $image_url = wp_get_attachment_image_url($image['id'], 'large');
          $mobile_image_url = wp_get_attachment_image_url($image['id'], 'small');
          $alt_text = get_post_meta($attributes['banner-small-img']['id'], '_wp_attachment_image_alt', true);
          ?>
          <picture>
            <source media="(max-width: 600px)" srcset="<?php echo esc_url($mobile_image_url); ?>" />
            <img class="banner__small-image" src="<?php echo esc_url($image_url); ?>"
              alt="<?php echo esc_attr($alt_text); ?>" />
          </picture>

        <?php endif; ?>
      </div>

    <?php endforeach; ?>
    <div class="gallery__fullscreen-background ">
      <button class="gallery__fullscreen-close-btn">x</button>
      <button class="gallery__fullscreen-btn gallery__fullscreen-btn--prev">&lt;</button>
      <button class="gallery__fullscreen-btn gallery__fullscreen-btn--next">></button>
      <img class="gallery__fullscreen-image" src="" alt="">
    </div>
  </div>

</section>