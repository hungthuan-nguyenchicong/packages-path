<?php
namespace Vendorpath\Wp\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class SidebarComponent extends Component
{
    public function __construct(
        protected Sidebars\SidebarService $service
    ){}
    public function render(): View
    {
        $data = $this->service->getData();
        return view('wp-view::esi.sidebar', compact('data'));
    }
}