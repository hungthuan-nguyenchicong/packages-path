<?php
// wp/Categories/CategoryLoader.php
namespace Vendorpath\Wp\Categories;

use Corcel\Model\Taxonomy;

class CategoryLoader extends Taxonomy
{
    public function getCategory($slug) {
        return self::slug('uncategorized')
        ->first();
    }
}