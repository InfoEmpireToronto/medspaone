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
Route::get('/article/{id}', 'ArticleController@viewArticle')->name('viewArticle');

Route::get('/articles', 'ArticleController@articles')->name('articles');
Route::get('/articles/{name}', 'ArticleController@articles')->name('articles');
Route::get('/find-physician', 'HomeController@findPhysician')->name('find-physician');
Route::get('/before-after', 'HomeController@beforeAfter')->name('before-after');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/profile/{id}', 'HomeController@profile')->name('profile');
Route::get('/videos', 'HomeController@videos')->name('videos');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/membership', 'HomeController@membership')->name('membership');
Route::get('/gift-rewards-program', 'HomeController@giftReward')->name('giftReward');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq', 'HomeController@faq')->name('faq');


Route::POST('/admin/location/save', 'AdminController@saveLocation')->name('saveLocation');
Route::GET('/admin/chat', 'AdminController@startChat')->name('startChat');
Route::GET('/chat', 'HomeController@startChat')->name('Chat');

Route::POST('/login', 'HomeController@login')->name('Chat');


