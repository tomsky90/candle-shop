<?php
/**
 * The Template for displaying a single post
 * 
 * @package candles-shop
 */

get_header();

?>
<div class="single-post__wrapper">
  <?php

  if (have_posts()):
    while (have_posts()):
      the_post(); ?>
      <div class="small-banner">
      </div>


      <!-- Display Post Title -->
      <h1 class="single-post__heading"><?php the_title(); ?></h1>



      <!-- Display Post Content -->
      <div class="post-content">
        <?php the_content(); ?>
      </div>



    <?php endwhile;
  else:
    echo '<p>No posts found.</p>';
  endif;


  ?>
</div>


<?php get_footer(); // Include the footer ?>