<?php
// wp/WpServiceProvider.php
namespace Vendorpath\Wp;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class WpServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'wp-view');
        Blade::anonymousComponentPath(__DIR__ . '/views/components', 'wp-comp');
    }
}