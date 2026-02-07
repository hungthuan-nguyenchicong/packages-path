<?php
// wp/Posts/PostCategory.php
namespace Vendorpath\Wp\Posts;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function show($slug, PostService $service)
    {
        $data = $service->service($slug);
        return view('wp-view::post', $data);
    }
}