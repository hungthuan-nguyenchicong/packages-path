<?php
namespace Vendorpath\Wp\Posts\Loader;

use Corcel\Model\Post;
use Vendorpath\Wp\Posts\Interface\PostLoaderInterface;

class PostLoader extends Post implements PostLoaderInterface
{
    public function getPost(string $slug): array|object
    {
        $post = self::status('publish')
        ->where('post_name', $slug)
        ->firstOrFail();

        return $post;
    }
}