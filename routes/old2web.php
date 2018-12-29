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

//クエリー文字列渡し
Route::get('hello', 'HelloController@index');

//連想配列渡し
//Route::get('hello/{id?}', 'HelloController@index');

//helloのview呼び出し
//Route::get('hello', function() {
//    return view('hello.index');
//});

/*リクエストとレスポンスの使い方
Route::get('hello','HelloController@index');
*/

