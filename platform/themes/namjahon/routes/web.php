<?php

// Custom routes
// You can delete this route group if you don't need to add your custom routes.
Route::group(['namespace' => 'Theme\Chorsuname\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        // Add your custom route here
        // Ex: Route::get('hello', 'ChorsunameController@getHello');
        Route::get('ajax/search', 'ChorsunameController@getSearch')->name('public.ajax.search');
    });
});

Theme::routes();

Route::group(['namespace' => 'Theme\Chorsuname\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/', 'ChorsunameController@getIndex')
            ->name('public.index');

        Route::get('sitemap.xml', 'ChorsunameController@getSiteMap')
            ->name('public.sitemap');

        Route::get('{slug?}' . config('core.base.general.public_single_ending_url'), 'ChorsunameController@getView')
            ->name('public.single');

    });
});
