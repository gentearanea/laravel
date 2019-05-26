<?php

# 名前空間
# 階層的にファイルを整理する仕組み?
namespace App\Http\Controllers;

# use文
# Illuminate\Httpパッケージ内に用意されている「Request」を使える状態にしている。
use Illuminate\Http\Request;

# Controllerクラスを継承して作成
# php artisan meke:controller HelloControllerで作成
class HelloController extends Controller
{
    # アクションメソッド
    public function index() {
        $data = [
            'msg' => '名前を入力してください',
        ];
        return view('hello.index', $data);
    }

    public function post(Request $request){
        console.log($request);
        $msg = $request->msg;

        $data = [
            'msg'=>'こんにちは、' . $msg . 'さん！',
        ];

        # view/hello/indexを返してるだけ
        return view('hello.index', $data);
    }
}
