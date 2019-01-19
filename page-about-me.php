<?php

  /**
    Template Name: About me page
   */

   get_header();

?>


<main role="main" class="container">

  <div class="starter-template">

    <div class="row">
      <div class="col-xs-12 col-md-7">
        <div class="about-me-image">
        </div>
      </div>
      <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
        ?>
          <div class="col-xs-12 col-md-5 about-me">
            <div class="about-me-content">
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
