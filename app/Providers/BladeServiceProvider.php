<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        // Define a custom Blade directive for marking sections
        Blade::directive('markSection', function ($expression) {
            return "<?php echo '<div data-section=\"' . {$expression} . '\">'; ?>";
        });

        // Define a custom Blade directive to end a marked section
        Blade::directive('endMarkSection', function () {
            return '<?php echo \'</div>\'; ?>';
        });
    }
}
