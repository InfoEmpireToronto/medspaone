<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/article/{name}', 'ArticleController@viewArticle')->name('viewArticle');
Route::get('/articles', 'ArticleController@articles')->name('articles');
Route::get('/articles/{name}', 'ArticleController@articles')->name('articles');
Route::get('/videos', 'ArticleController@videos')->name('videos');
Route::get('/videos/{name}', 'ArticleController@videos')->name('videos');
Route::get('/before-after', 'ArticleController@beforeAfter')->name('before-after');
Route::get('/before-after/{name}', 'ArticleController@beforeAfter')->name('before-after');

Route::get('/find-expert', 'HomeController@findPhysician')->name('find-physician');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/profile/{name}', 'HomeController@profile')->name('profile');
Route::get('/membership', 'HomeController@membership')->name('membership');
Route::get('/gift-rewards-program', 'HomeController@giftReward')->name('giftReward');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq', 'HomeController@faq')->name('faq');


Route::POST('/admin/location/save', 'AdminController@saveLocation')->name('saveLocation');
Route::GET('/admin/chat', 'AdminController@startChat')->name('startChat');
Route::GET('/phys/chat', 'HomeController@physChat')->name('Phys-Chat');
Route::GET('/chat', 'HomeController@startChat')->name('Chat');

Route::GET('/login', 'HomeController@login')->name('login');
Route::POST('/login', 'HomeController@login')->name('Login');

Route::POST('/ajax/getHomepageItems', 'AjaxController@getHomepageItems')->name('getHomepageItems');
// Route::POST('/ajax/saveContact', 'AjaxController@saveContact')->name('saveContact');
Route::GET('/ajax/saveContact', 'AjaxController@saveContact')->name('saveContact');


