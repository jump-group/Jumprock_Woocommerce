<?php

namespace JumpGroup\Woocommerce;

use function Env\env;

class AddProductAvailability
{
    public static function init()
    {
        add_action('acf/init', [self::class, 'createAcf']);
        add_shortcode('jump_product_availability_box', [self::class, 'product_availability_box_shortcode']);
    }

    public static function product_availability_box_shortcode()
    {
        $box_availability_text = get_field('box_availability_text', 'option');

        // Build the WhatsApp button HTML code
        $box_availability = '';
        if ($box_availability_text) {
            $box_availability .= '<div class="BoxProductAvailability">';
            $box_availability .= '<div>';
            $box_availability .= '<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 36 37" fill="none"><path d="M7.5 26C7.5 26.7956 7.81607 27.5587 8.37868 28.1213C8.94129 28.6839 9.70435 29 10.5 29C11.2956 29 12.0587 28.6839 12.6213 28.1213C13.1839 27.5587 13.5 26.7956 13.5 26C13.5 25.2044 13.1839 24.4413 12.6213 23.8787C12.0587 23.3161 11.2956 23 10.5 23C9.70435 23 8.94129 23.3161 8.37868 23.8787C7.81607 24.4413 7.5 25.2044 7.5 26ZM22.5 26C22.5 26.7956 22.8161 27.5587 23.3787 28.1213C23.9413 28.6839 24.7044 29 25.5 29C26.2956 29 27.0587 28.6839 27.6213 28.1213C28.1839 27.5587 28.5 26.7956 28.5 26C28.5 25.2044 28.1839 24.4413 27.6213 23.8787C27.0587 23.3161 26.2956 23 25.5 23C24.7044 23 23.9413 23.3161 23.3787 23.8787C22.8161 24.4413 22.5 25.2044 22.5 26Z" stroke="#27292B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 26H4.5V20M3 8H19.5V26M13.5 26H22.5M28.5 26H31.5V17M31.5 17H19.5M31.5 17L27 9.5H19.5M4.5 14H10.5" stroke="#27292B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>';
            $box_availability .= '</div>';
            $box_availability .= '<div>';
            $box_availability .= '<p>' . $box_availability_text . '</p>';
            $box_availability .= '</div>';
            $box_availability .= '</div>';
        }
        return $box_availability;
    }

    public static function createAcf()
    {
        if (function_exists('acf_add_local_field_group')) :
            acf_add_local_field_group(array(
                'key' => 'availability_box',
                'title' => 'Box di disponibilità prodotto',
                'fields' => array(
                    array(
                        'key' => 'box_availability_text',
                        'label' => 'Testo del box di disponibilità',
                        'name' => 'text',
                        'type' => 'text',
                        'parent' => 'availability_box'
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'woocommerce-elements-config',
                        ),
                    ),
                ),
            ));
        endif;
    }
}

AddWhatsappButton::init();
