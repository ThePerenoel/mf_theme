<div class="portfolio-article-footer">

  <?php
  $next_post = get_next_post(TRUE);
  if ( is_a( $next_post , 'WP_Post' ) ) : ?>
      <a class="left-img-link" href="<?php echo get_permalink( $next_post->ID ); ?>">&#8592;
      <?php echo get_the_post_thumbnail($next_post->ID); ?>
      </a>
  <?php endif; ?>


  <?php
  $prev_post = get_previous_post(TRUE);
  if ( is_a( $prev_post , 'WP_Post' ) ) : ?>
  <a class="right-img-link" href="<?php echo get_permalink( $prev_post->ID ); ?>">
     <?php echo get_the_post_thumbnail($prev_post->ID, array(100,100)); ?>
     &#8594;</a>
  <?php endif; ?>

</div>
