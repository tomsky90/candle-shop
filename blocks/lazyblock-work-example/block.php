<section id="portfolio" class="portfolio">
  <div class="portfolio__wrapper">

    <div class="portfolio__text-wrapper">
      <div class="portfolio__text-tile portfolio__text-tile--left">
        <h2 class="portfolio__heading"><?php echo esc_html($attributes['work-example-heading']) ?></h2>
        <h3 class="portfolio__subheading"><?php echo esc_html($attributes['work-example-subheading']) ?></h3>
      </div>
      <div class="portfolio__text-tile portfolio__text-tile--right">
        <p class="portfolio__text"><?php echo esc_html($attributes['work-example-text']) ?></p>
      </div>


    </div>
    <div class="portfolio__gallery">
      <div class="portfolio__slider">
        <div class="portfolio__slides">
          <?php foreach ($attributes['work-example-gallery'] as $image): ?>
            <?php if (isset($image['id'])): ?>

              <?php echo wp_get_attachment_image($image['id'], 'large', false, ['class' => 'portfolio__slide']); ?>

            <?php endif; ?>
          <?php endforeach; ?>
        </div>
        <button class="portfolio__prev">&#10094;</button>
        <button class="portfolio__next">&#10095;</button>
      </div>
    </div>

  </div>

</section>