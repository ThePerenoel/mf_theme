<?php

/**
  Template Name: Default page
 */

get_header(); ?>


<main role="main" class="container">

  <div class="starter-template">

    <div class="row">
      <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
        ?>
              <div class="col-12">
                <h4>
                    <?php the_title();?>
                </h4>
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
