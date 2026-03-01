<?php
namespace Vendorpath\Wp\Components\Sidebars;

class ActionAddClass
{
    public function addClass(?string $data): string
    {
        // Regex tìm thẻ <a> và thêm class
        // $1 đại diện cho phần nội dung đứng trước dấu > của thẻ mở <a>
        $pattern = '/<a(.*?)>/i';
        $replacement = '<a$1 class="list-group-item list-group-item-action list-group-item-light" >';        $dataWithClass = preg_replace($pattern,$replacement,$data);
        return $dataWithClass;
    }
}