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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::get('/description/{vacancy}', 'HomeController@description')->name('description');
Route::get('/vacancy', 'HomeController@vacancy')->name('vacancy');
Route::post('/offer', 'HomeController@offer')->name('offer');

// Роуты для работы админа
Route::group([
    'prefix' => 'myCabinet21',
    'as' => 'admin.',
    'middleware' => ['auth', 'isAdmin'],
    'namespace' => 'Admin',
], function() {
    Route::get('/', 'AdminController@index')->name('index');
    Route::post('/edit', 'AdminController@editContent')->name('edit');

    Route::group([
        'prefix' => 'vacancy',
        'as' => 'vacancy.'
    ], function () {
        Route::get('/create', 'VacancyController@create')->name('create');
        Route::post('/store', 'VacancyController@store')->name('store');
        Route::get('/index', 'VacancyController@index')->name('index');
        Route::get('/edit/{vacancy}', 'VacancyController@edit')->name('edit');
        Route::post('/update/{vacancy}', 'VacancyController@update')->name('update');
        Route::get('/destroy/{vacancy}', 'VacancyController@destroy')->name('destroy');
        Route::get('/show/{vacancy}', 'VacancyController@show')->name('show');
    });

    Route::group([
        'prefix' => 'offer',
        'as' => 'offer.'
    ], function () {
        Route::get('/', 'OfferController@index')->name('index');
        Route::get('/uploadSummary/{offer}', 'OfferController@uploadSummary')->name('uploadSummary');
    });
});


// Авторизация
Route::group([
    'namespace' => 'Auth',
], function() {
    Route::get('myLogin21', 'LoginController@showLoginForm')->name('login');
    Route::post('myLogin21', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
});
