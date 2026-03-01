<?php

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('wp-view::index');
});

Route::view('/test','wp-view::test');

Route::get('/category/{slug}', [\Vendorpath\Wp\Categories\CategoryController::class, 'show']);

// esi
Route::prefix('esi')->group(function() {
    // sidebar
    Route::get('sidebar', function() {
        $html = Blade::render('<x-wp-compName::sidebar-component />');
        return response($html);
    });
});