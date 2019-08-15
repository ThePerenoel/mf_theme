<?php

/**
  Template Name: Strategy page
 */

get_header();

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
$category_name = 'strategy';
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

    <div class="container">
      <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
        ?>
          <div class="row no-gutters strategy">
              <div class="col-8 strategy-preview-caption">
									<p class="strategy-excerpt">
										<?php
										if ( has_excerpt() ) {
											echo get_the_excerpt();
										} else {
											 echo wp_get_attachment_caption(get_post_thumbnail_id());
										}
										?>

									</p>
								<h4>
                    <?php the_title();?>
                </h4>
              </div>
              <div class="col-4 strategy-article-link">
								<div class="strategy-article-link-block">
								<p>Voir cette stratégie &#8594;</p>
							</div>
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
