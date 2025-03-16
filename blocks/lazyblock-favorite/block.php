<section class="favorite">
  <div class="favorite__tile favorite__tile--img">
    <?php if (isset($attributes['favorite-img1']['id'])): ?>
      <?php
      $image_url = wp_get_attachment_image_url($attributes['favorite-img1']['id'], 'large');
      $alt_text = get_post_meta($attributes['favorite-img1']['id'], '_wp_attachment_image_alt', true);
      ?>
      <img loading="lazy" class="favorite__img1" src="<?php echo esc_url($image_url); ?>"
        alt="<?php echo esc_attr($alt_text); ?>" />
    <?php endif; ?>

    <?php if (isset($attributes['favorite-img2']['id'])): ?>
      <?php
      $image_url = wp_get_attachment_image_url($attributes['favorite-img2']['id'], 'large');
      $alt_text = get_post_meta($attributes['favorite-img2']['id'], '_wp_attachment_image_alt', true);
      ?>
      <img loading="lazy" class="favorite__img2" src="<?php echo esc_url($image_url); ?>"
        alt="<?php echo esc_attr($alt_text); ?>" />
    <?php endif; ?>


  </div>
  <div class="favorite__tile favorite__tile--text">
    <?php if (isset($attributes['favorite-text-img']['id'])): ?>
      <?php
      $image_url = wp_get_attachment_image_url($attributes['favorite-text-img']['id'], 'large');
      $alt_text = get_post_meta($attributes['favorite-text-img']['id'], '_wp_attachment_image_alt', true);
      ?>
      <img loading="lazy" class="favorite__text-img" src="<?php echo esc_url($image_url); ?>"
        alt="<?php echo esc_attr($alt_text); ?>" />
    <?php endif; ?>
    <h2 class="favorite__heading"><?php echo esc_html($attributes['favorite-heading']) ?></h2>
    <p class="favorite__text"><?php echo esc_html($attributes['favorite-text']) ?></p>
  </div>
</section>