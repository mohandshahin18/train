<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        Blade::directive('hello', function ($expression) {
            return "<br /> Hello {$expression} , have a nice day ! <br />";

        });


        Blade::directive('routeis', function ($expression) {
            return "<?php if(fnmatch($expression, Route::currentRouteName())): ?>";
        });

        Blade::directive('endrouteis', function ($expression) {
            return "<?php endif; ?>";
        });
    }
}
