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
              <div>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Portfolio</a></li>
                  <li><a href="#">Strategy</a></li>
                  <li><a href="#">About</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
