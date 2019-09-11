<?php get_header(); ?>


<main role="main" class="container">

  <div class="starter-template">

    <?php
    $categories = get_the_category();
    $selected_category = "NULL";
    if ($categories != NULL) {
      foreach ($categories as $key=>$category) {
        if($category->category_parent == 0) {
          $selected_category = $category->name;
        }
      }
    }


    if ($selected_category == "strategy") {
      load_template(TEMPLATEPATH . '/article-strategy.php');
    }

    if ($selected_category == "portfolio") {
      load_template(TEMPLATEPATH . '/article-portfolio.php');
    }

    ?>

  </div>

</main>

<?php

if ($selected_category == "strategy") {
  load_template(TEMPLATEPATH . '/strategy-article-footer.php');
}

if ($selected_category == "portfolio") {
  load_template(TEMPLATEPATH . '/portfolio-article-footer.php');
}

?>

<?php get_footer(); ?>
