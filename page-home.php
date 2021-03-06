<?php

/**
  Template Name: Home page
 */
?>

<!DOCTYPE html>

<html lang="fr">
        <head>
          <meta property="og:url"                content="https://mathildefaivre.com" />
          <meta property="og:type"               content="website" />
          <meta property="og:title"              content="Mathile Faivre, Brand & UX Strategist" />
          <meta property="og:description"        content="Brand & UX Strategist, j’allie au quotidien les méthodologies UX et Design Thinking" />
          <meta property="og:image"              content=<?php echo get_template_directory_uri() . '/screenshot.png'; ?> />
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>Mathilde Faivre Website</title>
                <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400" rel="stylesheet">
                <?php wp_head(); ?>
        </head>
      <body class="home-page-body">

        <nav class="navbar right mt-5">
          <div class="brand">
            <a class="brand" href="<?php echo get_site_url() ?>">
              <img id="logo_mf" src="<?php echo get_template_directory_uri() . '/logo_mf_2.png'; ?>">
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <?php
              wp_nav_menu(
                array(
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id'    => 'navbarMenu',
                  'menu_class'      => 'menu',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  'items_wrap'      => '<ul class="navbar-nav home-navbar-items ml-auto">%3$s</ul>',
                  'depth'           => 0,
                  'walker'          => new Mf_theme_nav_menu_walker
                )
              );
            ?>
        </nav>

<main role="main" class="container">

  <div class="starter-template-home">

    <div class="row home-page">
      <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
        ?>
              <div class="col-11">
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
