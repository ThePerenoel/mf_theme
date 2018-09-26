<?php

  /**
    Template Name: Normal page
   */

   get_header();

?>


<main role="main" class="container">

  <div class="starter-template">

    <div class="row">
      <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
        ?>

            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>

        <?php
            }
          }
        ?>
      </div>

  </div>

</main>

<?php get_footer(); ?>
