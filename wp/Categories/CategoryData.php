<?php
// wp/Categories/CategoryData.php
namespace Vendorpath\Wp\Categories;

class CategoryData
{
    public function __construct(
        public readonly string $name,
        public readonly string $description
    ) {}

    public static function fromModel($cat): self
    {
        return new self(
            name: (string) $cat?->term?->name ?: '',
            description: (string) $cat->description
        );
    }
}