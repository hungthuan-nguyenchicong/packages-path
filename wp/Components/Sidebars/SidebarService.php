<?php
namespace Vendorpath\Wp\Components\Sidebars;

class SidebarService
{
    public function __construct(
        protected SidebarLoader $loader,
        protected ActionAddClass $actionAddClass,
    ){}
    
    public function getData()
    {
        \Fruitcake\LaravelDebugbar\Facades\Debugbar::startMeasure('render','Time for rendering');
        $data = $this->loader->loader();
        \Fruitcake\LaravelDebugbar\Facades\Debugbar::stopMeasure('render');

        return $this->actionAddClass->addClass($data);
    }
}