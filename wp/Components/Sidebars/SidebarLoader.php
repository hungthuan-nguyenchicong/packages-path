<?php
namespace Vendorpath\Wp\Components\Sidebars;

class SidebarLoader
{
    public function loader()
    {
        return $this->fakeData();
    }

    private function fakeData()
    {
        return '<a href="">Category</a>';
    }
}