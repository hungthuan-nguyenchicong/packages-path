<?php
// wp/Categories/CategoryService.php
namespace Vendorpath\Wp\Categories;

class CategoryService
{
    public function service($slug) {
        $data = app(CategoryLoader::class)->getCategory($slug);
        return [
            'cat' => $data
        ];
    }
}