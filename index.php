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
                  <?php the_post_thumbnail('large'); ?>
              </div>
              <div class="article-preview-caption">
                <h4>
                  <a href="<?php the_permalink() ?>">
                    <?php the_title();?>
                  </a>
                </h4>
                <p><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
              </div>
          </div>

          <p><?php the_content(); ?></p>
        <?php
            }
          }
        ?>
      </div>

  </div>

</main>

<?php get_footer(); ?>
