<section class="services-section">
  <h2 class="services-section__heading"><?php echo esc_html($attributes['services-heading']) ?></h2>
  <?php foreach ($attributes['services-tile'] as $tile): ?>
    <div class="services-section__tile">
      <div class="services-section__tile-img-wrapper">
        <img class="services-section__tile-img" src="<?php echo esc_url($tile['service-img']['url']) ?>">
      </div>
      <div class="services-section__tile-text-wrapper">
        <h3 class="services-section__tile-heading"><?php echo esc_html($tile['service-subheading']) ?></h3>
        <p class="services-section__tile-text"><?php echo esc_html($tile['service-text']) ?></p>
        <h4 class="services-section__benefits-heading"><?php echo esc_html($tile['service-benefits-heading']) ?></h4>
        <div class="services-section__benefit-wrapper">
          <img class="services-section__done-icon"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/Done.webp" alt='done icon'>
          <p class="services-section__benefit"><?php echo esc_html($tile['service-benefit-one']) ?></p>
        </div>
        <div class="services-section__benefit-wrapper">
          <img class="services-section__done-icon"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/Done.webp" alt='done icon'>
          <p class="services-section__benefit"><?php echo esc_html($tile['service-benefit-two']) ?></p>
        </div>
        <div class="services-section__benefit-wrapper">
          <img class="services-section__done-icon"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/Done.webp" alt='done icon'>
          <p class="services-section__benefit"><?php echo esc_html($tile['service-benefit-three']) ?></p>
        </div>



      </div>
    </div>

  <?php endforeach; ?>
</section>