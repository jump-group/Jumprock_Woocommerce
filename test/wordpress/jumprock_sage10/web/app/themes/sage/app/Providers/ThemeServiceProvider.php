<?php

namespace App\Providers;

use Roots\Acorn\Sage\SageServiceProvider;
use Illuminate\Support\Facades\Blade;

class ThemeServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        
        Blade::directive('ray', function ($variable) {
            return "<?php ray($variable); ?>";
        });
        
        Blade::directive('i18n', function ($string) {
            $trim_string = trim($string, "'");
            $string_group = get_field('string_translation', 'option');
            
            if (empty($string_group)) {
                return 'No string group found';
            }
            if (empty($string_group[$trim_string])) {
                return 'Translation not found found';
            }

            return $string_group[$trim_string];
        });
    }
}
