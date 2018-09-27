<?php

/**
  Template Name: Portfolio page
 */

get_header();

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
$args = array(
	'posts_per_page' => get_option('posts_per_page'), // the value from Settings > Reading by default
	'paged'          => $current_page // current page
);
query_posts( $args );

$wp_query->is_archive = true;
$wp_query->is_home = false;

?>


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
                <h4>
                  <a href="<?php the_permalink() ?>">
                    <?php the_title();?>
                  </a>
                </h4>
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

<?php
if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function

get_footer(); ?>