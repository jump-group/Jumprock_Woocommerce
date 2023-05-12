<?php

namespace JumpGroup\Woocommerce;

use function Env\env;

class AddWhatsappButton
{

    public static function init()
    {
        add_action('init', function () {
            // Create ACF for buttons data
            add_action('acf/init', 'createAcf');
            // Definizione shortcode per il pulsante di whatsapp
            add_shortcode('jump_whatsapp_button', [self::class, 'whatsapp_button_shortcode']);
        });
    }

    public static function whatsapp_button_shortcode()
    {
        global $post;
        $btn_whatsapp = get_field('whatsapp_button', 'options');

        // Build the WhatsApp button HTML code
        $whatsapp_button = '';
        if ($btn_whatsapp['phone'] && $btn_whatsapp['img']) {
            $whatsapp_button .= '<div class="Whatsapp">';
            $whatsapp_button .= '<div class="Whatsapp__Avatar"><img src="' . $btn_whatsapp['img'] . '"></div>';
            $whatsapp_button .= '<a target="_blank" href="https://api.whatsapp.com/send?phone=' . $btn_whatsapp['phone'] . '&text=' . $btn_whatsapp['link_text'] . ' ' . $post->post_title . '" id="whatsapp_button" class="Whatsapp__Btn">' . $btn_whatsapp['btn_text'] . '</a>';
            $whatsapp_button .= '</div>';
        }

        return $whatsapp_button;
    }
}

function createAcf()
{
    if (function_exists('acf_add_local_field_group')) :
        acf_add_local_field_group(array(
            'key' => 'whatsapp_button',
            'title' => 'Pulsante Whatsapp',
            'fields' => array(
                array(
                    'key' => 'field_phone',
                    'label' => 'Numero di telefono',
                    'name' => 'phone',
                    'type' => 'number',
                ),
                array(
                    'key' => 'field_link_text',
                    'label' => 'Testo link',
                    'name' => 'link_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_btn_text',
                    'label' => 'Testo bottone',
                    'name' => 'btn_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_image',
                    'label' => 'Immagine',
                    'name' => 'img',
                    'type' => 'image',
                    'return_format' => 'url',
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
