<section class="small-banner">
  <div class="small-banner__text-wrapper">
    <h1 class="small-banner__heading"><?php echo esc_html($attributes['small-banner-heading']) ?></h1>
    <h2 class="small-banner__subheading"><?php echo esc_html($attributes['small-banner-subheading']) ?></h2>
  </div>
  <div class="small-banner__img-wrapper">
    <?php if (isset($attributes['small-banner-img']['url'])): ?>
      <img class='small-banner__bgc-image' src="<?php echo esc_url($attributes['small-banner-img']['url']) ?>"
        alt="<?php echo esc_attr($attributes['small-banner-img']['alt']) ?>" />
    <?php endif ?>
  </div>
</section>