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

/*
URLパラメーターの受け渡し
Route::get('hello/{msg?}', function ($msg = 'no massage') {
$html = <<<EOF
<html>
<body>
    {$msg}
</body>
</html>
EOF;
    return $html;
});
*/
/*
コントローラーでルートパラメーターを扱う
Route::get('hello/{id?}/{pass?}', 'HelloController@index');
*/
/*アクションを複数
Route::get('hello', 'HelloController@index');
Route::get('hello/other', 'HelloController@other');
 * 
 */
Route::get('hello','HelloController@index');
