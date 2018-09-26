<?php

  /**
    Template Name: Normal page
   */

   get_header();

?>


<main role="main" class="container">

  <div class="starter-template">

    <div class="row">
      <div class="col-7 about-me-image">
      </div>
      <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
        ?>
          <div class="col-5 about-me">
            <div class="about-me-content">
              <h1><?php the_title(); ?></h1>
              <p><?php the_content(); ?></p>
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
