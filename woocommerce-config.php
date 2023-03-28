<?php
/*
Plugin Name:  Mandatory plugins
Plugin URI:   https://jumpgroup.it/
Description:  Adds Configs for Image Handling
Version:      1.1.0
Author:       Jump Group
License:      MIT License
*/

namespace JumpGroup\Woocommerce;
use function Env\env;
use JumpGroup\Woocommerce\InvertCheckout;

if ( ! defined( 'WPINC' ) ) {
	die;
}

class Init{

  protected static $instance;

    public static function get_instance(){
      if( null == self::$instance ){
        self::$instance = new self();
      }
      return self::$instance;
    }

    protected function __construct(){
      InvertCheckout::init();
    }
}

$instance = Init::get_instance();