<?php
/*
Plugin Name:  Jump Memcached
Plugin URI:   https://jumpgroup.it
Description:  Extends the default WordPress object cache to use Memcached
Version:      1.0.0
Author:       Fabio Politi e Simone Mazzotti
License:      MIT License
*/

if (!defined('ABSPATH')) {
  exit;
}

// If class CacheInterface does not exist return
if (!class_exists('CacheInterface')) {
  return;
}

class WpDefaultCache implements CacheInterface {
  /** @var int */
  private $ttl = 60 * 5;

  public function __construct(){ 
    
  }

  public function get($key){
    return wp_cache_get($key, 'stream-wrapper') ?: null;
  }

  public function set($key, $value, $ttl = 0){
    wp_cache_set($key, $value, 'stream-wrapper', $ttl);
  }

  public function remove($key){
    wp_cache_delete($key, 'stream-wrapper');
  }
}

stream_context_set_option(stream_context_get_default(),'s3','cache', new WpDefaultCache());