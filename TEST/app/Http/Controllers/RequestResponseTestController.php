<?php

# リクエスト・レスポンス　オブジェクトテスト
namespace App\Http\Controllers;

# vender > laravel > framework > src > Illuminate
# illuminate\Http名前空間に用意されている「Request」,「Response」というクラス
# として用意されている
# Illuminate\Http\RequestインスタンスはSymfony\Component\HttpFoundation\Requestクラスを拡張してる？
# https://readouble.com/laravel/5.5/ja/requests.html
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class RequestResponseTestController extends Controller
{
    # メソッドインジェクションについて
    public function index(Request $request, Response $response) {
    
    #ヒアドキュメント
$html = <<<EOF
    <html>
    <head>
    <title>Hello/Index</title>
    <style>
    body {font-size:16pt; color:#999; }
    h1 { font-size:120pt; text-align:right; color:#fafafa;
        margin:-50px 0px -120px 0px; }
    </style>
    </head>
    <body>
        <h1>Hello</h1>
        <h3>Request</h3>
        <pre>{$request}</pre>
        <h3>Response</h3>
        <pre>{$response}</pre>
    </body>
    </html>
EOF;
# 識別子はインデントしてはいけない、終端IDがある行では;以外を入れてはいけない
# この規則が破られて終端 ID が "clean" でない場合、 終端 ID と認識されず、
# PHP はさらに終端 ID を探し続ける。 適当な終了 ID がみつからない場合、 スクリプトの最終行でパースエラーが発生。
            $response->setContent($html);
            return $response;
    }
}
?>