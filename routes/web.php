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


Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('/leave-application', 'FrontendController@leaveApplication')->name('frontend.application');
Route::get('/about-forum', 'FrontendController@aboutForum')->name('frontend.about-form');
Route::get('/become-partners', 'FrontendController@aboutPartners')->name('frontend.become-partners');
Route::post('/leave-application/create', 'FrontendController@createApplication')->name('frontend.application-create');
Route::post('/become-partners-submit', 'FrontendController@becomePartners')->name('frontend.become-partners-submit');

Route::get('/refresh-captcha', function (){
    return captcha_img('flat');
})->name('captcha-refresh');



Route::group(['prefix' => 'admin'], function(){

    Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
    Auth::routes();
});




Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

