<?php
/**
 * Plugin Name: Ray Handing
 * Description: A plugin to handle Ray
 * Version: 1.0.0
 * Author: Fabio Politi
 * 
 */

add_action('plugins_loaded', function () {
  if (!function_exists('ray')) {
    function ray() {
      return ;
    }

    if (env('WP_ENV') === 'development') {
      add_action('admin_notices', function () {
        echo '<div class="notice notice-warning"><p>Ray is not active or installed. Please install and activate the <a href="https://myray.app/">Ray app</a> to use the @ray blade directive.</p></div>';
      });
    }
  }
});

