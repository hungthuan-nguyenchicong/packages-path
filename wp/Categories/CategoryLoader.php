<?php
// wp/Categories/CategoryLoader.php
namespace Vendorpath\Wp\Categories;

use Corcel\Model\Taxonomy;

class CategoryLoader extends Taxonomy
{
    public function getCategory($slug) {
        $category = self::slug($slug)
        ->firstOrFail();

        $paginate = $category->posts()
        ->status('publish')
        ->with(['thumbnail'])
        ->paginate(2);

        return [
            'category' => $category,
            'paginate' => $paginate
        ];
    }
}