<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('category', 'CategoryCrudController');
    Route::crud('menu-category', 'MenuCategoryCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('attribute', 'AttributeCrudController');
    Route::crud('attribute-product', 'AttributeProductCrudController');
    Route::crud('address', 'AddressCrudController');
    Route::crud('circle', 'CircleCrudController');
    Route::crud('contact', 'ContactCrudController');
    Route::crud('password-reset', 'PasswordResetCrudController');
    Route::crud('purchased-product', 'PurchasedProductCrudController');
    Route::crud('shop-comment', 'ShopCommentCrudController');
    Route::crud('shopping-cart', 'ShoppingCartCrudController');
    Route::crud('top-product', 'TopProductCrudController');
    Route::crud('random-product', 'RandomProductCrudController');
}); // this should be the absolute last line of this file