<!DOCTYPE html>

<html lang="fr">
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>Mathilde Faivre Website</title>
                <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
                <?php wp_head(); ?>
        </head>
      <body>



        <div class="nav-area">
          <div class="brand">
            <a class="brand" href="<?php echo get_site_url() ?>">
              <img id="logo_mf" src="<?php echo get_template_directory_uri() . '/logo_mf_2.png'; ?>">
            </a>
          </div>
          <input type="checkbox" class="hamburger-menu">
          <div class="nav-icon">
            <div></div>
          </div>
          <div class="main-menu">
            <div>
              <div class="col-3 fullscreen-menu-padding">
                 <?php
                    wp_nav_menu(
                    array(
                      'container'       => '',
                      'container_class' => '',
                      'container_id'    => '',
                      'menu_class'      => '',
                      'echo'            => true,
                      'fallback_cb'     => 'wp_page_menu',
                      'items_wrap'      => '<ul>%3$s</ul>',
                      'depth'           => 0,
                      'walker'          => ''
                    )
                  );
                ?>
              </div>
              <div class="col-3">
                <div class="menu-contact-title">
                  Contact
                </div>
                <div>
                  <a target="_blank" href="mailto:mathilde.faivre@gmail.com"> mathilde.faivre@gmail.com </a>
                </div>
                <div class="menu-contact-title social-title">
                  Social
                </div>
                <div>
                  Medium
                  &#8226;
                  Instagram
                  &#8226;
                  <a target="_blank" href="https://www.linkedin.com/in/mathilde-faivre-strategist">
                    LinkedIn
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
