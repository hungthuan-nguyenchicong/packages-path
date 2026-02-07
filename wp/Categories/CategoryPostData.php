<?php
// wp/Categories/CategoryPostData.php
namespace Vendorpath\Wp\Categories;

class CategoryPostData
{
    public function __construct(
        public readonly string $title,
        public readonly string $excerpt,
        public readonly string $slug,
        public readonly string $featured_image_src,
        public readonly string $featured_image_alt,
    ) {}

    public static function fromModel($post): self
    {
        return new self(
            title: (string) $post->title,
            excerpt: (string) $post->excerpt,
            slug: (string) $post->slug,
            featured_image_src: (string) $post->thumbnail?->attachment?->url ?: '/uploads/no-image.png',
            featured_image_alt: (string) $post->thumbnail?->attachment?->alt ?: (string) $post->title
        );
    }
}