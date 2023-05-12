<?php
/*
Plugin Name:  Woocommerce plugins
Plugin URI:   https://jumpgroup.it/
Description:  Adds Woocommerce plugins and improvements
Version:      1.1.0
Author:       Jump Group
License:      MIT License
*/

namespace JumpGroup\Woocommerce;
use function Env\env;
use JumpGroup\Woocommerce\AddOptionPage;
use JumpGroup\Woocommerce\AddWhatsappButton;
use JumpGroup\Woocommerce\InvertCheckoutBilling;

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
      AddOptionPage::init();
      AddWhatsappButton::init();
      InvertCheckoutBilling::init();
    }
}

$instance = Init::get_instance();