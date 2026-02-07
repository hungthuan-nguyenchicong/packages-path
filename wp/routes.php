<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('wp-view::index');
});

Route::get('/category/{slug}', [\Vendorpath\Wp\Categories\CategoryController::class, 'show']);
// posts
Route::get('/{slug}', [\Vendorpath\Wp\Posts\PostController:: class, 'show']);