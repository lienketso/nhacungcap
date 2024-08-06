<?php

Route::group(['namespace' => 'Botble\Ecommerce\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {
        Route::group(['prefix' => 'shipments', 'as' => 'ecommerce.shipments.'], function () {

            Route::match(['GET', 'POST'], '/', [
                'as'         => 'index',
                'uses'       => 'ShipmentController@index',
                'permission' => 'orders.edit',
            ]);

            Route::get('edit/{id}', [
                'as'         => 'edit',
                'uses'       => 'ShipmentController@edit',
                'permission' => 'orders.edit',
            ]);

            Route::put('edit/{id}', [
                'as'         => 'edit',
                'uses'       => 'ShipmentController@update',
                'permission' => 'orders.edit',
            ]);

            Route::post('update-status/{id}', [
                'as'         => 'update-status',
                'uses'       => 'ShipmentController@postUpdateStatus',
                'permission' => 'orders.edit',
            ]);

            Route::post('update-cod-status/{id}', [
                'as'         => 'update-cod-status',
                'uses'       => 'ShipmentController@postUpdateCodStatus',
                'permission' => 'orders.edit',
            ]);
        });
    });
});
