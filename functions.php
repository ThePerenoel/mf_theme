<?php

  function mf_theme_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri().'/css/mf_theme.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '1.0.0', 'all');

    wp_enqueue_script('customjs', get_template_directory_uri().'/js/mf_theme.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '1.0.0', true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array(), '1.0.0', true);
  }

  add_action('wp_enqueue_scripts', 'mf_theme_script_enqueue');

 ?>
