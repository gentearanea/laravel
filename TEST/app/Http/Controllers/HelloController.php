<?php

# 名前空間
# 階層的にファイルを整理する仕組み
namespace App\Http\Controllers;

# use文
# Illuminate\Httpパッケージ内に用意されている「Request」を使える状態にしている。
use Illuminate\Http\Request;

# Controllerというクラスを継承して作成
# php artisan meke:controller HelloControllerで作成
class HelloController extends Controller
{
    public function index() {
        return 
            '<html><body>
                <h1>HELLO</h1>
                <p>This is sample page.</p>
                <@>HelloController@index() test page </p>
            </body></html>';
    }
}
