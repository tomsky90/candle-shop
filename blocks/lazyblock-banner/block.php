<section id="home" class="banner">
  <div class="banner__blure"></div>
  <div class="banner__text-wrapper">
    <h1 class="banner__heading"><?php echo esc_html($attributes['banner-heading']) ?></h1>
    <h2 class="banner__subheading"><?php echo esc_html($attributes['banner-subheading']) ?><span
        class="banner__subheading-color"><?php echo esc_html($attributes['banner-subheading-color']) ?></span></h2>
    <p class="banner__text"> <?php echo esc_html($attributes['banner-text']) ?></p>
    <div><?php if (isset($attributes['banner-small-img']['id'])): ?>
        <?php
        $image_url = wp_get_attachment_image_url($attributes['banner-small-img']['id'], 'large');
        $mobile_image_url = wp_get_attachment_image_url($attributes['banner-small-img']['id'], 'medium');
        $alt_text = get_post_meta($attributes['banner-small-img']['id'], '_wp_attachment_image_alt', true);
        ?>
        <picture>
          <source media="(max-width: 600px)" srcset="<?php echo esc_url($mobile_image_url); ?>" />
          <img class="banner__small-image" src="<?php echo esc_url($image_url); ?>"
            alt="<?php echo esc_attr($alt_text); ?>" />
        </picture>

      <?php endif; ?>
    </div>

    <a class="cta-link " target="blank" href="<?php echo esc_url($attributes['banner-cta']) ?>">Contact Me</a>


  </div>
  <div class="banner__img-wrapper">

    <?php if (isset($attributes['banner-img']['id'])): ?>
      <?php
      $image_url = wp_get_attachment_image_url($attributes['banner-img']['id'], 'large');
      $mobile_image_url = wp_get_attachment_image_url($attributes['banner-img']['id'], 'medium');
      $alt_text = get_post_meta($attributes['banner-img']['id'], '_wp_attachment_image_alt', true);
      ?>
      <picture>
        <source media="(max-width: 600px)" srcset="<?php echo esc_url($mobile_image_url); ?>" />
        <img class="banner__bgc-image" src="<?php echo esc_url($image_url); ?>"
          alt="<?php echo esc_attr($alt_text); ?>" />
      </picture>

    <?php endif; ?>
  </div>
</section>