<?php
// wp/Posts/PostLoader.php
namespace Vendorpath\Wp\Posts;

use Corcel\Model\Post;

class PostLoader extends Post
{
    /**
     * Khai báo các thuộc tính ảo muốn tự động xuất hiện khi toArray() hoặc debug.
     */
    /**
     * Khai báo các thuộc tính ảo muốn tự động xuất hiện khi toArray() hoặc debug.
     */
    protected $appends = [
        'seo_title',
        'seo_description'
    ];

    /**
     * Accessor cho seo_title.
     * Cách gọi: $post->seo_title
     */
    public function getSeoTitleAttribute()
    {
        // Sử dụng ma thuật của Corcel để lấy từ meta
        return $this->meta->rank_math_title ?? $this->post_title;
    }

    /**
     * Accessor cho seo_description.
     * Cách gọi: $post->seo_description
     */
    public function getSeoDescriptionAttribute()
    {
        return $this->meta->rank_math_description ?? $this->post_excerpt;
    }
    
    public function getPost($slug)
    {
        $post = self::status('publish')
        ->where('post_name', $slug)
        ->firstOrFail();
        return [
            // 'post' => $post->getAttributes()
            'post' => $post
        ];
    }
}