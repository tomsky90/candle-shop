<?php
/**
 * Template for displaying the blog posts page
 * 
 * @package candlesshop
 */
get_header();
?>

<div class="blog-posts">
  <div class="small-banner">


  </div>
  <h1 class="blog-posts__heading">Check my new articles</h1>

  <?php if (have_posts()): ?>
    <?php while (have_posts()):
      the_post(); ?>
      <div class="blog-posts__tile">
        <?php if (has_post_thumbnail()): ?>
          <div class="blog-posts__thumbnail">
            <?php the_post_thumbnail('full'); ?>
          </div>
        <?php endif; ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="blog-posts__desc">
          <?php the_excerpt(); ?>
        </div>
      </div>
    <?php endwhile; ?>

    <div class="pagination">
      <?php the_posts_pagination(); ?>
    </div>

  <?php else: ?>
    <p>No posts found.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>