<section class="contact">
  <h2 class="contact__heading"><?php echo esc_html($attributes['contact-heading']) ?></h2>
  <div class="contact__wrapper">
    <!-- WPForms Shortcode -->
    [contact-form-7 id="103c1ed" title="Contact form 1"]
    <div class="contact__text-wrapper">
      <h3 class="contact__subheading"><?php echo esc_html($attributes['contact-subheading']) ?></h3>
      <p class="contact__text">
        <?php echo esc_html($attributes['contact-text']) ?>
      </p>

      <div class="contact__link-wrapper">
        <?php if (isset($attributes['contact-address-icon']['url'])): ?>
          <img class="contact__link-icon" src='<?php echo esc_url($attributes['contact-address-icon']['url']) ?>'
            alt="<?php echo esc_attr($attributes['contact-address-icon']['alt']) ?>" />
        <?php endif ?>
        <p class="contact__link"><?php echo esc_html($attributes['contact-address']) ?> </p>
      </div>
      <div class="contact__link-wrapper">
        <a class="contact__link" href="tel:078645723">
          <?php if (isset($attributes['contact-phone-icon']['url'])): ?>
            <img class="contact__link-icon" src='<?php echo esc_url($attributes['contact-phone-icon']['url']) ?>'
              alt="<?php echo esc_attr($attributes['contact-phone-icon']['alt']) ?>" />
          <?php endif ?>
          <?php echo esc_html($attributes['contact-phone']) ?>
        </a>
      </div>
      <div class="contact__link-wrapper">
        <a class="contact__link" href="mailto:hi@labella.com">
          <?php if (isset($attributes['contact-email-icon']['url'])): ?>
            <img class="contact__link-icon" src='<?php echo esc_url($attributes['contact-email-icon']['url']) ?>'
              alt="<?php echo esc_attr($attributes['contact-email-icon']['alt']) ?>" />
          <?php endif ?>
          <?php echo esc_html($attributes['contact-email']) ?>
        </a>
      </div>
    </div>

  </div>
  <div class="contact__map-wrapper">
    <iframe class="contact__map"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19061.278550285777!2d-2.9986166106906356!3d53.331444004799536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487ad8cf8fd355eb%3A0x9bb55bbd9f9556cc!2sBromborough%2C%20Wirral!5e0!3m2!1sen!2suk!4v1734936050258!5m2!1sen!2suk"
      loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>