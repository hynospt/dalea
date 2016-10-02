<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/my-session', 'Auth\AuthController@check_login');
//
Route::get('/', 'HomeController@index');
Route::get('/product/detail/{id}', 'ProductController@show');
Route::post('/emailpost', 'HomeController@emailPost');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    // return what you want
});

Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    // return what you want
});

Route::get('/config-clear', function() {
    Artisan::call('config:clear');
    // return what you want
});

Route::get('/appEnv', function() {
	echo App::environment();
});

//Route::get('/dashboard','DashboardController@index');
//Route::get('/publicPath','CommonController@index');
Route::group(['middleware'=>['auth']], function(){
Route::get('/about/index','AboutController@index');
Route::get('/about/edit/{id}', 'AboutController@edit');
Route::get('/about/create', 'AboutController@create');
Route::get('/about/delete/{id}', 'AboutController@destroy');
Route::post('/about', 'AboutController@store');
Route::post('/about/update', 'AboutController@update');

Route::get('/slider/index', 'SliderController@index');
Route::get('/slider/create', 'SliderController@create');
Route::get('/slider/edit/{id}', 'SliderController@edit');
Route::get('/slider/delete/{id}', 'SliderController@destroy');
Route::post('/slider/update', 'SliderController@update');
Route::post('/slider/store', 'SliderController@store');

Route::get('/product/index', 'ProductController@index');
Route::get('/product/create', 'ProductController@create');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::get('/product/editDetail/{id}', 'ProductController@editDetails');
Route::get('/product/remove/{id}', 'ProductController@remove');
Route::get('/product/publish/{id}', 'ProductController@publish');
Route::get('/product/delete/{id}', 'ProductController@destroy');

Route::post('/product/update', 'ProductController@update');
Route::post('/product/store', 'ProductController@store');

Route::get('/news/index', 'NewsController@index');
Route::get('/news/create', 'NewsController@create');
Route::get('/news/edit/{id}', 'NewsController@edit');
Route::get('/news/delete/{id}', 'NewsController@destroy');
Route::post('/news/store', 'NewsController@store');
Route::post('/news/update', 'NewsController@update');

Route::get('/career/index', 'CareerController@index');
Route::get('/career/create', 'CareerController@create');
Route::get('/career/edit/{id}','CareerController@edit');
Route::post('/career/update','CareerController@update');
Route::get('/career/delete/{id}','CareerController@destroy');
Route::post('/career', 'CareerController@store');

Route::get('/configurations/footer/index/{id}' , 'ConfigurationController@footer_index');
Route::get('/configurations/email/index' , 'ConfigurationController@email_index');
Route::get('/configurations/social/index' , 'ConfigurationController@social_index');
Route::get('/configurations/social/edit/{id}' , 'ConfigurationController@social_edit');
Route::post('/configurations/social' , 'ConfigurationController@social_update');
Route::post('/configurations/footer', 'ConfigurationController@footer_update');


Route::get('/inbox', 'InboxController@index');
Route::get('/inbox/view/{id}', 'InboxController@show');

Route::get('/profile/edit/{id}', 'ProfileController@edit');
Route::post('/profile/update', 'ProfileController@update');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);