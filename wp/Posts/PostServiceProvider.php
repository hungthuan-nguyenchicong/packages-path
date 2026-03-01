<?php
namespace Vendorpath\Wp\Posts;

use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    public $singletons = [
        Interface\PostLoaderInterface::class => Loader\PostLoader::class
    ];
}