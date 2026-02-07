<?php
// wp/Posts/PostLoader.php
namespace Vendorpath\Wp\Posts;

use Corcel\Model\Post;

class PostLoader extends Post
{
    public function getPost($slug)
    {
        $post = self::status('publish')
        ->where('post_name', $slug)
        ->firstOrFail();
        return [
            // 'post' => $post->getAttributes()
            'post' => $post->toArray()
        ];
    }
}