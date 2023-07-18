<?php

namespace App\View\Components;

use Illuminate\View\Component;
use function Roots\bundle;
use function Roots\asset;

class TestLitComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // add_action('admin_enqueue_scripts', function () {
        //     // 
        //     wp_enqueue_script('jmp-slider-wrapper-admin', asset('/'.bundle('jmp-slider-wrapper')->js()->first())->uri(), null, null, false);
        //     wp_enqueue_style('jmp-slider-wrapper-admin', asset('/'.bundle('jmp-slider-wrapper')->css()->first())->uri(), null, null);
        // });
        // wp_enqueue_script('jmp-slider-wrapper', asset('/'.bundle('jmp-slider-wrapper')->js()->first())->uri(), ['app/0'], null, false);
        // wp_enqueue_style('jmp-slider-wrapper', asset('/'.bundle('jmp-slider-wrapper')->css()->first())->uri(), null, null);
        return view('components.test-lit-component.test-lit-component');
    }
}
