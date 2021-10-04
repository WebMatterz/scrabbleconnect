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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'MainController@index')->name('home');
Route::get('/home', 'MainController@index')->name('home');
Route::get('/index', 'MainController@index')->name('home');
Route::get('/aboutus', 'MainController@aboutus')->name('aboutus');
Route::get('/news', 'MainController@news')->name('news');
Route::get('/resources', 'MainController@resources')->name('resources');
Route::get('/contact', 'MainController@contact')->name('contact');
Route::get('/findplayer', 'UserDashboardController@findplayer')->name('findplayer');
Route::post('/contactus', 'MainController@contactus')->name('contactus');

//User Area
Route::get('/user/dashboard', 'UserDashboardController@index')->name('user.dashboard');
Route::get('/user/settings', 'UserDashboardController@settings')->name('user.settings');
Route::post('/user/settingsupdate', 'UserDashboardController@settingsupdate')->name('user.settingsupdate');
Route::get('/user/findplayer', 'UserPlayerController@index')->name('user.findplayer');
Route::post('/user/searchplayer', 'UserPlayerController@find')->name('user.searchplayer');
Route::post('/user/addfriend', 'UserPlayerController@addfriend')->name('user.addfriend');
Route::post('/user/cancelrequest', 'UserPlayerController@cancelrequest')->name('user.cancelrequest');
Route::post('/user/declinerequest', 'UserPlayerController@declinerequest')->name('user.declinerequest');
Route::post('/user/acceptrequest', 'UserPlayerController@acceptrequest')->name('user.acceptrequest');
Route::post('/user/unfriend', 'UserPlayerController@unfriend')->name('user.unfriend');

Route::get('/user/friendrequest', 'UserPlayerController@friendrequest')->name('user.friendrequest');
Route::get('/user/friends', 'UserPlayerController@friends')->name('user.friends');
Route::post('/user/getfriends', 'UserPlayerController@getfriends')->name('user.getfriends');
Route::post('/user/sendmessage', 'UserPlayerController@sendmessage')->name('user.sendmessage');
Route::post('/user/fetchmessages', 'UserPlayerController@fetchmessages')->name('user.fetchmessages');




Route::group(['prefix'=>'admin'], function() {

// Login Routes...
Route::get('login', ['as' => 'admin.login', 'uses' => 'AdminAuth\LoginController@showLoginForm']);

 Route::post('login', ['uses' => 'AdminAuth\LoginController@login']);

 Route::post('logout', ['as' => 'admin.logout', 'uses' => 'AdminAuth\LoginController@logout']);


// Password Reset Routes...
Route::get('password/reset', ['as' => 'admin.password.request', 'uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);


Route::post('password/email', ['as' => 'admin.password.email', 'uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);


Route::get('password/reset/{token}', ['as' => 'admin.password.reset', 'uses' => 'AdminAuth\ResetPasswordController@showResetForm']);


Route::post('password/reset', ['uses' => 'AdminAuth\ResetPasswordController@reset']);



//Dashboard
Route::get('dashboard', ['as' => 'admin.dashboard', 'uses' => 'AdminDashboardController@index']);
Route::get('resetpassword', ['as' => 'admin.resetpassword', 'uses' => 'AdminDashboardController@resetpassword']);
Route::post('passwordreset', ['as' => 'admin.passwordreset', 'uses' => 'AdminDashboardController@passwordreset']);

Route::get('players', ['as' => 'admin.players', 'uses' => 'AdminDashboardController@players']);

//News

	Route::get('news', ['as' => 'admin.news', 'uses' => 'NewsController@index']);
	Route::get('createnews', ['as' => 'admin.createnews', 'uses' => 'NewsController@createnews']);
	Route::post('postnews', ['as' => 'admin.postnews', 'uses' => 'NewsController@postnews']);
	Route::post('deletenews', ['as' => 'admin.deletenews', 'uses' => 'NewsController@deletenews']);
	Route::get('editnews/{id}', ['as' => 'admin.editnews', 'uses' => 'NewsController@editnews']);
	Route::post('updatenews', ['as' => 'admin.updatenews', 'uses' => 'NewsController@updatenews']);
	Route::get('viewnews/{id}', ['as' => 'admin.viewnews', 'uses' => 'NewsController@viewnews']);



});














//Admin
