<?php

namespace JumpGroup\Woocommerce;

class AddProductTags
{
    public static function init()
    {
        add_shortcode('jump_product_tags', [self::class, 'product_tags_shortcode']);
    }

    public static function product_tags_shortcode()
    {
        $tags = get_the_terms(get_the_ID(), 'product_tag');
        $output = '<div class="Tag__Wrapper">';
        if ($tags) {
            foreach ($tags as $tag) {
                $output .= '<a data-title="' . $tag->name . '" class="Tag__Image">';
                if (!empty(get_field('img_tag', $tag->taxonomy . '_' . $tag->term_id))) {
                    $output .= '<img src="' . get_field('img_tag', $tag->taxonomy . '_' . $tag->term_id) . '"> ';
                }
                $output .= '</a>';
            }
        }
        $output .= '</div>';

        return $output;
    }
}

AddWhatsappButton::init();
