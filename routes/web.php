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

Route::get('/','IndexController@home');
Route::get('index','IndexController@home');
Route::get('aboutus','IndexController@aboutus');
Route::get('product-cat/{name}/{id}','IndexController@productCat');
Route::get('product-cat/{name}/product-list/{catid}/{subname}/{subcatid}','IndexController@productSubCat');
Route::get('product-cat/{name}/product-list/{catid}/{subname}/product-detail/{proname}/{proid}/{subcatid}','IndexController@productDetail');
Route::get('contact-us','IndexController@contactUs');
Route::post('contact-us','ContactController@store');
Route::get('contact-us/{name}/{id}','IndexController@contactUss');

//Admin Panel
// Route::get('admin-site/setting','IndexController@siteSetting');
// Route::get('admin-site/slider','IndexController@slider');
// Route::get('admin-site/category','IndexController@category');
// Route::get('admin-site/sub-category','IndexController@subCategory');
// Route::get('admin-site/service','IndexController@service');
// Route::get('admin-site/team','IndexController@team');
// Route::get('admin-site/client','IndexController@client');
// Route::get('admin-site/product','IndexController@product');
// Route::get('admin-site/product-list','IndexController@productList');
// Route::get('admin-site/payment','IndexController@payment');
Auth::routes();
// Route::get('/admin-site', 'IndexController@login')->name('login');
Route::get('/login', 'IndexController@login')->name('login');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin-site/login', 'IndexController@login');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('/admin-site/user', 'IndexController@user');
    Route::post('/admin-site/user/update', 'IndexController@updateUserInfo');
    //Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/admin-site/setting', 'SiteSettingController@index');
    Route::post('/admin-site/setting/save', 'SiteSettingController@create');
    Route::post('/admin-site/setting/modify/{id}', 'SiteSettingController@update');
    Route::get('/admin-site/setting/edit/{id}', 'SiteSettingController@show');

    Route::get('/admin-site/slider', 'SliderController@index');
    Route::post('/admin-site/slider/save', 'SliderController@create');
    Route::post('/admin-site/slider/modify/{id}', 'SliderController@update');
    Route::get('/admin-site/slider/edit/{id}', 'SliderController@show');
    Route::get('/admin-site/slider/delete/{id}', 'SliderController@destroy');

    Route::get('/admin-site/service', 'ServiceController@index');
    Route::post('/admin-site/service/save', 'ServiceController@create');
    Route::post('/admin-site/service/modify/{id}', 'ServiceController@update');
    Route::get('/admin-site/service/edit/{id}', 'ServiceController@show');
    Route::get('/admin-site/service/delete/{id}', 'ServiceController@destroy');

    Route::get('/admin-site/team', 'TeamController@index');
    Route::post('/admin-site/team/save', 'TeamController@create');
    Route::post('/admin-site/team/modify/{id}', 'TeamController@update');
    Route::get('/admin-site/team/edit/{id}', 'TeamController@show');
    Route::get('/admin-site/team/delete/{id}', 'TeamController@destroy');

    Route::get('/admin-site/category', 'CategoryController@index');
    Route::post('/admin-site/category/save', 'CategoryController@create');
    Route::post('/admin-site/category/modify/{id}', 'CategoryController@update');
    Route::get('/admin-site/category/edit/{id}', 'CategoryController@show');
    Route::get('/admin-site/category/delete/{id}', 'CategoryController@destroy');

    Route::get('/admin-site/sub-category', 'SubCategoryController@index');
    Route::post('/admin-site/sub-category/save', 'SubCategoryController@create');
    Route::post('/admin-site/sub-category/modify/{id}', 'SubCategoryController@update');
    Route::get('/admin-site/sub-category/edit/{id}', 'SubCategoryController@show');
    Route::get('/admin-site/sub-category/delete/{id}', 'SubCategoryController@destroy');

    Route::get('/admin-site/payment', 'PaymentController@index');
    Route::post('/admin-site/payment/save', 'PaymentController@create');
    Route::post('/admin-site/payment/modify/{id}', 'PaymentController@update');
    Route::get('/admin-site/payment/edit/{id}', 'PaymentController@show');
    Route::get('/admin-site/payment/delete/{id}', 'PaymentController@destroy');

    Route::get('/admin-site/product', 'ProductController@index');
    Route::post('/admin-site/product/save', 'ProductController@create');
    Route::post('/admin-site/product/modify/{id}', 'ProductController@update');
    Route::get('/admin-site/product/edit/{id}', 'ProductController@show');
    Route::get('/admin-site/product/delete/{id}', 'ProductController@destroy');
    Route::post('/admin-site/ajax/subCatData', 'ProductController@subCatData');
    Route::get('/admin-site/product-list', 'ProductController@productList');

    Route::get('/admin-site/client', 'ClientController@index');
    Route::post('/admin-site/client/save', 'ClientController@create');
    Route::post('/admin-site/client/modify/{id}', 'ClientController@update');
    Route::get('/admin-site/client/edit/{id}', 'ClientController@show');
    Route::get('/admin-site/client/delete/{id}', 'ClientController@destroy');
});