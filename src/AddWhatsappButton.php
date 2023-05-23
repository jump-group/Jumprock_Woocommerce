<?php

namespace JumpGroup\Woocommerce;

class AddWhatsappButton
{
    public static function init()
    {
        add_action('acf/init', [self::class, 'createAcf']);
        add_shortcode('jump_whatsapp_button', [self::class, 'whatsapp_button_shortcode']);
    }

    public static function whatsapp_button_shortcode()
    {
        global $post;
        $wts_phone = get_field('wts_phone', 'option');
        $wts_link_text = get_field('wts_link_text', 'option');
        $wts_btn_text = get_field('wts_btn_text', 'option');
        $wts_image = get_field('wts_image', 'option');

        // Build the WhatsApp button HTML code
        $whatsapp_button = '';
        if ($wts_phone && $wts_image && $post->post_title) {
            $whatsapp_button .= '<div class="Whatsapp">';
            $whatsapp_button .= '<div class="Whatsapp__Avatar"><img src="' . $wts_image . '"></div>';
            $whatsapp_button .= '<a class="Whatsapp__Btn" target="_blank" href="https://api.whatsapp.com/send?phone=' . $wts_phone . '&text=' . $wts_link_text . ' ' . $post->post_title . '" id="whatsapp_button">' . $wts_btn_text . '</a>';
            $whatsapp_button .= '</div>';
        }
        return $whatsapp_button;
    }

    public static function createAcf()
    {
        if (function_exists('acf_add_local_field_group')) :
            acf_add_local_field_group(array(
                'key' => 'whatsapp_button',
                'title' => 'Pulsante Whatsapp',
                'fields' => array(
                    array(
                        'key' => 'wts_phone',
                        'label' => 'Numero di telefono',
                        'name' => 'phone',
                        'type' => 'number',
                        'parent' => 'whatsapp_button'
                    ),
                    array(
                        'key' => 'wts_link_text',
                        'label' => 'Testo link',
                        'name' => 'link_text',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'wts_btn_text',
                        'label' => 'Testo bottone',
                        'name' => 'btn_text',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'wts_image',
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
}

AddWhatsappButton::init();
