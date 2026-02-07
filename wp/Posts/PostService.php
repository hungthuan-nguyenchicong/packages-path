<?php
// wp/Posts/PostService.php
namespace Vendorpath\Wp\Posts;
 class PostService
 {
    public function service($slug)
    {
        $postModel = app(PostLoader::class)->getPost($slug);
        return [
            'post' => PostData::fromModel($postModel['post']),
            'data' => $postModel
        ];
    }
 }