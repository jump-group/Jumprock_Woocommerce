<?php
/**
 * Plugin Name: WP Notice Handling
 * Description: A plugin to handle WP Notice
 * Version: 1.0.0
 * Author: Fabio Politi
 * 
 */

use function Roots\asset;

add_action('admin_notices', function () {
  if (env('WP_ENV') === 'staging') {
    $logo = asset('images/logo-jump.png')->uri();

    echo <<<EOT
      <div class="notice notice-error is-dismissible" style="padding-top: 1rem; padding-bottom: 1rem; display: flex; align-items: center;">
        <img src="$logo" style="width: 80px; margin: 8px 20px 8px 0;"/>
        <div style="display: flex; flex-direction: column; justify-content: center;">
          <span style="font-size: 1.2rem; font-weight: bold; margin-bottom: 0.3rem">ATTENZIONE AMBIENTE DI STAGING:</span> 
          <span>i contenuti inseriti in questo ambiente non verranno pubblicati automaticamente sul sito in produzione.</span>
        </div>
      </div>
    EOT;
  }
});