<?php

/**
  Template Name: Blog page
 */

get_header();

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
$category_name = 'blog';
$args = array(
	'posts_per_page' => get_option('posts_per_page'), // the value from Settings > Reading by default
	'paged'          => $current_page, // current page
	'category_name'  => $category_name
);
query_posts( $args );

$wp_query->is_archive = true;
$wp_query->is_home = false;

?>


<main role="main" class="container-fluid">

  <div class="starter-template">

    <div class="blog">
      <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
        ?>
          <div class="row">
              <div class="blog-preview-thumbnail">
                <a href="<?php the_permalink() ?>">
                  <?php the_post_thumbnail('large'); ?>
                </a>
              </div>
              <div class="blog-preview-caption">
								<p><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
                <h4>
                    <?php the_title();?>
                </h4>
								<p>Lire l'article &#8594;</p>
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
page-
