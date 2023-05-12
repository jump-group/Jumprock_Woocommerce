<?php

namespace JumpGroup\Woocommerce;

use function Env\env;

class AddOptionPage
{
    public static function init()
    {
        // Add Option Page
        if (function_exists('acf_add_options_page')) {
            acf_add_options_page(array(
                'page_title'    => 'Configurazioni elementi Woocommerce',
                'menu_title'    => 'Configurazioni elementi Woocommerce',
                'menu_slug'     => 'woocommerce-elements-config',
                'capability'    => 'edit_posts',
                'redirect'      => false
            ));
        }
    }
}