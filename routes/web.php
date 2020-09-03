<?php

use Illuminate\Support\Facades\Route;

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

Route::match(['get', 'post'], '/', 'IndexController@execute')
    ->name('home');
Route::get('/page/{alias}', 'PageController@execute')
    ->name('page');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->middleware('auth')->group(function () {
    // admin
    Route::get('/', function () {

    });

    // admin/pages
    Route::prefix('pages', function () {

        // admin/pages
        Route::get('/', 'PageController@execute')
            ->name('pages');

        // admin/pages/add
        Route::match(['get', 'post'], '/add', 'PageAddController@execute')
            ->name('pagesAdd');

        // admin/pages/edit
        Route::match(['get', 'post', 'delete'], '/edit/{page}', 'PageEditController@execute')
            ->name('pagesEdit');
    });

    // admin/portfolios
    Route::prefix('portfolios', function () {

        // admin/portfolios
        Route::get('/', 'PortfolioController@execute')
            ->name('portfolios');

        // admin/portfolios/add
        Route::match(['get', 'post'], '/add', 'PortfolioAddController@execute')
            ->name('portfoliosAdd');

        // admin/portfolios/edit
        Route::match(['get', 'post', 'delete'], '/edit/{portfolio}', 'PortfolioEditController@execute')
            ->name('portfoliosEdit');
    });

    // admin/services
    Route::prefix('services', function () {

        // admin/services
        Route::get('/', 'ServiceController@execute')
            ->name('services');

        // admin/services/add
        Route::match(['get', 'post'], '/add', 'ServiceAddController@execute')
            ->name('servicesAdd');

        // admin/services/edit
        Route::match(['get', 'post', 'delete'], '/edit/{service}', 'ServiceEditController@execute')
            ->name('servicesEdit');
    });
});
