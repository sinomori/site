<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

/*複数アクション時にOther生成に必要
global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:left; color:#eee;
    margin:-40px 0px -50px 0px;}
</style>
EOF;
$body = '</head><body>';
$end = '</body></head>';

function tag($tag, $txt){
    return "<{$tag}>" . $txt . "</{$tag}>";
}
*/

class HelloController extends Controller
{
    public function index(Request $request, Response $response){
        $html = <<<EOF
        <html>
            <head>
                <title>Hello/Index</title>
                <style>
                body {font-size:16pt; color:#999;}
                h1 {font-size:120pt; text-align:right; color:#fafafa;
                margin:-50px 0px -120px 0px;}
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
            $response->setContent($html);
            return $response;
        }
    }
    /*シングルアクション
    public function __invoke(){
        return <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:30pt; text-align:right; color:#eee;
        margin:-15px 0px 0px 0px;}
</style>
</head>
<body>
        <h1>Single Action</h1>
        <p>これはシングルアクションコントローラのアクション</p>
</body>
</html>
EOF;
    }
    /*複数アクションの使い方
    public function index() {
        global $head, $style, $body, $end;
        
        $html = $head . tag('title', 'Hello/Index') . $style . $body
                . tag('h1','Index') . tag('p','this is Index page')
                . '<a href="/hello/other">go to Other page</a>'
                . $end;
        return $html;
    }

    public function other(){
        global $head, $style, $body, $end;
        
        $html = $head . tag('title','Hello/Other') . $style . $body
                . tag('h1','Other') . tag('p','this is Other page')
                . $end;
        return $html;
    }
 */
    /*コントローラーからルートパラメーターを使う方法
        public function index($id='noname', $pass='unknown') {
            return <<<EOF
<html>
<head>
<title>Hello/Index</title>
</head>
<body>
    <h1>Index</h1>
    <p>これは、Helloコントローラのindexアクションです。</p>
    <ul>
        <li>ID: {$id}</li>
        <li>PASS: {$pass}</li>
    <ul>
</body>
</html>
EOF;
        }
*/    
}
