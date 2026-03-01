<?php
namespace Vendorpath\Wp\Posts\Interface;

interface PostLoaderInterface
{
    public function getPost(string $slug): array|object;
}