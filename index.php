<?php get_header(); ?>


<main role="main" class="container">

  <div class="starter-template">

    <div class="row">
      <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
        ?>
          <div class="col-12">
              <div class="article-thumbnail">
                  <?php the_post_thumbnail(); ?>
              </div>
              <div class="offset-md-3 col-md-9 col-xs-12 article-caption">
                <div class="article-caption-title">
                  <h1>
                      <?php the_title();?>
                  </h1>
                  <p><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
                </div>
                <div class="article-caption-rectangle">
                  <span>
                    <?php
                      $categories = get_the_category();
                      if ($categories != NULL) {
                        foreach ($categories as $key=>$category) {
                          if($category->category_parent != 0) {
                            echo $category->name;
                          }
                        }
                      }
                    ?>
                  </span>
                </div>
              </div>
          </div>
          <div class="col-12 the-article-content">
            <p><?php the_content(); ?></p>
          </div>
        <?php
            }
          }
        ?>
      </div>
  </div>

</main>

<div class="portfolio-article-footer">

  <?php
  $next_post = get_next_post();
  if ( is_a( $next_post , 'WP_Post' ) ) : ?>
      <a class="left-img-link" href="<?php echo get_permalink( $next_post->ID ); ?>">&#8592;
      <?php echo get_the_post_thumbnail($next_post->ID); ?>
      </a>
  <?php endif; ?>


  <?php
  $prev_post = get_previous_post();
  if ( is_a( $prev_post , 'WP_Post' ) ) : ?>
  <a class="right-img-link" href="<?php echo get_permalink( $prev_post->ID ); ?>">
     <?php echo get_the_post_thumbnail($prev_post->ID, array(100,100)); ?>
     &#8594;</a>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
