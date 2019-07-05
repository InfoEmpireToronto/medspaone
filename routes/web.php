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

Route::POST('/rsvpSubmit', 'AjaxController@rsvpSubmit')->name('rsvpSubmit');
Route::get('/rsvp', function()
{
    return View::make('rsvp');
});


Route::get('/', 'HomeController@index')->name('home');
Route::get('/i/w{width}/{file}', 'HomeController@getImage')->where('file', '.*');

Route::get('/ba/{name}', 'ArticleController@viewArticle')->name('viewBeforeAfter');
Route::get('/video/{name}', 'ArticleController@viewArticle')->name('viewVideo');
Route::get('/article/{name}', 'ArticleController@viewArticle')->name('viewArticle');
Route::get('/event/{name}', 'ArticleController@viewEvent')->name('viewEvent');

Route::get('/articles', 'ArticleController@articles')->name('articles');
Route::get('/articles/{name}', 'ArticleController@articles')->name('articles');
Route::get('/events', 'ArticleController@events')->name('articles');
Route::get('/events/{name}', 'ArticleController@events')->name('articles');
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

Route::GET('/terms-of-service', 'HomeController@terms')->name('terms');
Route::GET('/privacy-policy', 'HomeController@privacy')->name('privacy');

Route::GET('/contact-us', 'HomeController@contactus')->name('contactus');
Route::GET('/ask-the-expert', 'HomeController@askExpert')->name('askExpert');
Route::POST('/contact-us-thanks', 'HomeController@submitContactus')->name('contactusThanks');
Route::POST('/login', 'HomeController@login')->name('Login');

Route::POST('/saveMembership', 'HomeController@saveMembership')->name('saveMembership');

Route::POST('/search', 'HomeController@search')->name('search');
Route::GET('/search', 'HomeController@search')->name('search');

Route::POST('/ajax/getHomepageItems', 'AjaxController@getHomepageItems')->name('getHomepageItems');
// Route::POST('/ajax/saveContact', 'AjaxController@saveContact')->name('saveContact');
Route::GET('/ajax/saveContact', 'AjaxController@saveContact')->name('saveContact');
Route::POST('/ajax/saveContactExpert', 'AjaxController@saveContactExpert')->name('saveContactExpert');


