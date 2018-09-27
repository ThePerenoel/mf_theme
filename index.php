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
                <div class="article-caption-rectangle"><span>2017</span></div>
              </div>
          </div>
          <div class="col-12">
            <p><?php the_content(); ?></p>
          </div>
        <?php
            }
          }
        ?>
      </div>

  </div>

</main>

<?php get_footer(); ?>
