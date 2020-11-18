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

Auth::routes();

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->where('provider', 'github');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->where('provider', 'github');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'bookmarkController@index');
    Route::resource('bookmarks', 'BookmarkController');
    Route::resource('tags', 'TagController');
});