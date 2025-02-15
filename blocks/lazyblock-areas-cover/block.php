<section class="areas">
  <h2 class="areas__heading"><?php echo esc_html($attributes['areas-cover-heading']) ?></h2>
  <h3 class="areas__subheading"><?php echo esc_html($attributes['areas-cover-subheading']) ?></h3>

  <ul class="areas__list-wrapper">
    <?php foreach ($attributes['areas-cover-list'] as $item): ?>
      <li class='areas__item'><?php echo esc_html($item['areas-cover-area']) ?></li>
    <?php endforeach; ?>
  </ul>
</section>