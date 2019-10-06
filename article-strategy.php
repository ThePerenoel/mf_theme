
<?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
  ?>
    <div class="row">
          <div class="col-sm-9">
            <p class="article-strategy-excerpt"><?php
            if ( has_excerpt() ) {
              echo get_the_excerpt();
            } else {
               echo wp_get_attachment_caption(get_post_thumbnail_id());
            }
            ?></p>
            <h1 class="article-strategy-title">
                <?php the_title();?>
            </h1>
          </div>
          <div class="col-sm-3 article-strategy-year">
            <p>
              <?php
                $categories = get_the_category();
                if ($categories != NULL) {
                  foreach ($categories as $key=>$category) {
                    if($category->category_parent != 0) {
                      echo "_".$category->name;
                    }
                  }
                }
              ?>
            </p>
          </div>
    </div>
    <div class="col-12 the-article-strategy-content">
      <p><?php the_content(); ?></p>
    </div>
  <?php
      }
    }
  ?>
