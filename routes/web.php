<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
|--------------------------------------------------------------------------
| Route Group Users
|--------------------------------------------------------------------------
*/

Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware' => [
        // registered middleware here
    ],
], function () {
    Route::group([
        'prefix' => ''
    ], function () {
        Route::get('/', [
            'as' => 'home.index',
            'uses' => 'HomeController@index',
        ]);
        Route::get('/{id}/{slug}.html', [
            'as' => 'home.view',
            'uses' => 'HomeController@view',
        ]);

    });
});

/*
|--------------------------------------------------------------------------
| Route Login Admin
|--------------------------------------------------------------------------
*/
Route::prefix('admin/login')->group( function (){
    Route::get('/',[App\Http\Controllers\Admin\LoginController::class,'index'])->name('login');
    Route::post('/',[App\Http\Controllers\Admin\LoginController::class,'postLogin']);
});
/*
|--------------------------------------------------------------------------
| Route Cart
|--------------------------------------------------------------------------
*/
Route::post('/add-cart',[App\Http\Controllers\CartController::class,'index']);
Route::get('/carts',[App\Http\Controllers\CartController::class,'show']);
Route::post('/update-cart',[App\Http\Controllers\CartController::class,'update']);
Route::get('/carts/delete/{id}',[App\Http\Controllers\CartController::class,'remove']);

/*
|--------------------------------------------------------------------------
| Route Group Admin
|--------------------------------------------------------------------------
*/
Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'prefix' => '/',

], function () {
    // Route pre-fix admin
    Route::group([
        'prefix' => 'admin',
        'middleware' => [
        'auth',
    ]
    ], function () {
        Route::get('/', [
            'as' => 'admin.dashboard.index',
            'uses' => 'DashboardController@index',
            // registered permission here
        ]);
        Route::get('/logout', [
            'as' => 'admin.logout',
            'uses' => 'LoginController@logout',
        ]);

        /*---------------------
        | Route Admin Product |
        ----------------------*/
        Route::group([
            'prefix' => '/product',
        ], function () {
            // Crud routes
            Route::get('/', [
                'as' => 'admin.product.index',
                'uses' => 'ProductController@index'
            ]);

            Route::get('create', [
                'as' => 'admin.product.create',
                'uses' => 'ProductController@create'
            ]);

            Route::post('store', [
                'as' => 'admin.product.store',
                'uses' => 'ProductController@store'
            ]);

            Route::get('edit/{id}', [
                'as' => 'admin.product.edit',
                'uses' => 'ProductController@edit'
            ]);

            Route::put('update/{id}', [
                'as' => 'admin.product.update',
                'uses' => 'ProductController@update'
            ]);

            Route::delete('destroy/{id}', [
                'as' => 'admin.product.destroy',
                'uses' => 'ProductController@destroy'
            ]);
        });

        /*---------------------
        | Route Admin Category |
        ----------------------*/
        Route::group([
            'prefix' => '/category',

        ], function () {
            // Crud routes
            Route::get('/', [
                'as' => 'admin.category.index',
                'uses' => 'CategoryController@index'
            ]);

            Route::get('create', [
                'as' => 'admin.category.create',
                'uses' => 'CategoryController@create'
            ]);

            Route::post('store', [
                'as' => 'admin.category.store',
                'uses' => 'CategoryController@store'
            ]);

            Route::get('edit/{id}', [
                'as' => 'admin.category.edit',
                'uses' => 'CategoryController@edit'
            ]);

            Route::put('update/{id}', [
                'as' => 'admin.category.update',
                'uses' => 'CategoryController@update'
            ]);
            Route::delete('destroy/{id}', [
                'as' => 'admin.category.destroy',
                'uses' => 'CategoryController@destroy'
            ]);
        });

    });

});



