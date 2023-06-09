<?php

    /**
    * Plugin Name: Jmp Uploads Mime
    * Description: Aggiunge e Rimuove Mime Types al Media Uploader.
    * Author: Simone Mazzotti
    *
    * Version: 1.0.0
    * 
    * 
    */

    add_filter('upload_mimes', function($mimes){
        $mimes['svg'] = 'image/svg+xml';
        $mimes['ttf'] = 'font/ttf';
        $mimes['otf'] = 'font/otf';
        $mimes['woff'] = 'font/woff';
        $mimes['woff2'] = 'font/woff2';
        return $mimes;
    });

?>