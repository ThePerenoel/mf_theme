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
            $defaults = array(
              'theme_location'  => '',
              'menu'            => '',
              'container'       => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => '',
              'menu_class'      => 'menu',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul class="navbar-nav mr-auto">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '');
            wp_nav_menu($defaults);
          ?>
        </nav>
