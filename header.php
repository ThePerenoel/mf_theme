<!DOCTYPE html>

<html lang="fr">
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>Mathilde Faivre Website</title>
                <?php wp_head(); ?>
        </head>
      <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
          <a class="navbar-brand" href="https://getbootstrap.com/docs/4.1/examples/starter-template/#">Mathilde Faivre</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php
            wp_nav_menu(
              array(
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'menu_class'      => 'menu',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'items_wrap'      => '<ul class="navbar-nav ml-auto">%3$s</ul>',
                'depth'           => 0,
                'walker'          => new Mf_theme_nav_menu_walker
              )
            );
          ?>
        </nav>
