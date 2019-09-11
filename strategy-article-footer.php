<div class="portfolio-article-footer">
  <div class="row">
    <div class="col-6">
    <?php
    $next_post = get_next_post(TRUE);
    if ( is_a( $next_post , 'WP_Post' ) ) : ?>

        <a class="left-img-link" href="<?php echo get_permalink( $next_post->ID ); ?>">&#8592;
        <?php echo $next_post->post_title;?>
        </a>
    <?php endif; ?>
    </div>


  <div class="col-6 right-link">
    <?php
    $prev_post = get_previous_post(TRUE);
    if ( is_a( $prev_post , 'WP_Post' ) ) : ?>

    <a class="" href="<?php echo get_permalink( $prev_post->ID ); ?>">
       <?php echo $prev_post->post_title; ?>
       &#8594;</a>
    <?php endif; ?>
  </div>
  </div>
</div>
