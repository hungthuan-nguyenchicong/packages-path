<?php
// wp/WpAggregateServiceProvider.php
namespace Vendorpath\Wp;

use Illuminate\Support\AggregateServiceProvider;

class WpAggregateServiceProvider extends AggregateServiceProvider
{
    protected $providers = [
        \Vendorpath\Wp\WpServiceProvider::class,
        \Corcel\Laravel\CorcelServiceProvider::class,
    ];
}