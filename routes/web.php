<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', 'App\Http\Controllers\MessagesController@index');

// Route::resource('messages', 'App\Http\Controllers\MessagesController');

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

// メッセージ個別詳細ページ表示
Route::post('messages.show/{id?}', 'App\Http\Controllers\MessagesController@show');

//メッセージの新規登録処理（新規登録画面は表示しない）
Route::post('messages', 'App\Http\Controllers\MessagesController@store');

// メッセージの更新処理（編集画面は表示しない）
Route::put('messages/{id}', 'MessagesController@update');

// メッセージの削除処理
Route::delete('messages/{id}', 'MessagesController@destroy');

//一覧画面表示
Route::get('/', 'App\Http\Controllers\MessagesController@index')->name('messages.index');

// 新規登録画面表示（フォーム）
Route::get('messages/create', 'App\Http\Controllers\MessagesController@create')->name('messages.create');

// 更新登録画面表示（フォーム）
Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');
