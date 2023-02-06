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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'chat', 'middleware' => 'auth'], function () {
    Route::get('/', 'ChatController@index')->name('chat.index');
    Route::get('/conversations', 'ChatController@getConversations')->name('chat.conversations');
    Route::get('/messages', 'ChatController@getMessages')->name('chat.messages');
    Route::post('/message', 'ChatController@createMessage')->name('chat.create_message');
});

Route::group(['prefix' => 'chat-pusher', 'name' => 'chat_pusher.', 'middleware' => 'auth'], function () {
    Route::get('/', 'ChatPusherController@index')->name('index');
    Route::get('/conversations', 'ChatController@getConversations')->name('conversations');
    Route::get('/messages', 'ChatController@getMessages')->name('messages');
    Route::post('/message', 'ChatController@createMessage')->name('create_message');
});

Route::group(['prefix' => 'export-data', 'middleware' => 'auth'], function () {
    Route::get('/', 'ExportController@index')->name('export.index');
    Route::get('/conversations', 'ExportController@getConversations')->name('export.conversations');
});
