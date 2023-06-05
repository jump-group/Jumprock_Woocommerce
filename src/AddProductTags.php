<?php

namespace JumpGroup\Woocommerce;

class AddProductTags
{
    public static function init()
    {
        add_action('acf/init', [self::class, 'createAcfOptionPage']);
        add_action('acf/init', [self::class, 'createAcfProductTagPage']);
        add_shortcode('jump_product_tags', [self::class, 'product_tags_shortcode']);
    }

    public static function product_tags_shortcode()
    {
        $tags = get_the_terms(get_the_ID(), 'product_tag');
        $tag_has_link = get_field('tag_has_link', 'option');

        $output = '<div class="TagWrapper">';
        if ($tags) {
            foreach ($tags as $tag) {
                $output .= '<a class="TagWrapper__Image" data-title="' . $tag->name . '" ';
                if ($tag_has_link === 'yes') {
                    $output .= ' href="' . get_tag_link($tag) . '"';
                }
                $output .= '>';

                if (!empty(get_field('img_tag', $tag->taxonomy . '_' . $tag->term_id))) {
                    $output .= '<img src="' . get_field('img_tag', $tag->taxonomy . '_' . $tag->term_id) . '"> ';
                }
                $output .= '</a>';
            }
        }
        $output .= '</div>';

        return $output;
    }

    public static function createAcfOptionPage()
    {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group(array(
                'key' => 'product_tags_parameters',
                'title' => 'Parametri di configurazione dei tag di prodotto',
                'fields' => array(
                    array(
                        'key' => 'tag_has_link',
                        'label' => 'Il tag deve linkare alla pagina di archivio del tag?',
                        'name' => 'tag_has_link',
                        'type' => 'radio',
                        'choices' => array(
                            'yes' => 'Yes',
                            'no' => 'No',
                        ),
                        'default_value' => 'yes',
                    ),
                    // Add other ACF fields to the 'fields' array as needed
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
        }
    }

    public static function createAcfProductTagPage(){
        if (function_exists('acf_add_local_field')) {
            acf_add_local_field(array(
                'key' => 'tag_image',
                'label' => 'Immagine del tag',
                'name' => 'tag_image',
                'type' => 'image',
                'instructions' => 'Seleziona un\'immagine per il tag',
                'required' => false,
                'parent' => 'term',
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url', // You can change the return format if needed
            ));
        }
    }
}