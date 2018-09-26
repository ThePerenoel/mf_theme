<?php get_header(); ?>


<main role="main" class="container">

  <div class="starter-template">

    <div class="thumbnails-row">
      <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
        ?>

          <div class="article-preview">
              <div class="article-thumbnail">
                  <?php the_post_thumbnail('large'); ?>
              </div>
              <div class="article-preview-caption">
                <h4><?php the_title();?></h4>
                <p><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
              </div>
          </div>

        <?php
            }
          }
        ?>
      </div>

  </div>

</main>

<?php get_footer(); ?>
