<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
//bladeの使い方
    public function index() {
//        $data = [
//            //'msg'=>'お名前を入力してください',
//            'msg'=>'',
//        ];
        $data = ['one','two','three','four','five'];
        //return view('hello.index', $data);
        return view('hello.index', ['data'=>$data]);
    }
    
    public function post(Request $request) {
        $msg = $request->msg;
        $data = [
            //'msg'=>'こんにちは、' . $msg .'さん！',
            'msg'=>$msg,
        ];
        return view('hello.index', $data);
    }
}
