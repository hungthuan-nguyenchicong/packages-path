<?php
// wp/Categories/CategoryService.php
namespace Vendorpath\Wp\Categories;

class CategoryService
{
    public function service($slug) {
        $data = app(CategoryLoader::class)->getCategory($slug);
        $cat = CategoryData::fromModel($data['category']);
        $paginate = $data['paginate'];
        $paginate->getCollection()->transform(fn($post) => CategoryPostData::fromModel($post));

        return [
            'cat' => $cat,
            'posts' => $paginate
        ];
    }
}