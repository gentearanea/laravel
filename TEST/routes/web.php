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

Route::get('hello1',function() {
    return 
    '<html><body>
        <h1>HELLO</h1>
        <p>This is sample page.</p>
    </body></html>';
});

# コントローラー名@アクション名
# localhost:8000/HELLOのときの処理
# app/Http/Contollers/HelloControllerクラスのindexメソッドを呼び出している
Route::get('HELLO','HelloController@index');

# RequestとResponce用
# /RequestResponceにアクセス
Route::get('RequestResponce','RequestResponseTestController@index');

# hello.index → /hello/index.php
// # viewが返すのは「Response」
// Route::get('hello', function() {
//     return view('hello.index');
// });

# Route::getでviewするか、Route::getで呼び出されたアクションメソッド内でviewするかの違い
Route::get('hello/{id?}', 'HelloController@index');

# POST時のRoute setting
Route::get('hello','HelloController@post');
