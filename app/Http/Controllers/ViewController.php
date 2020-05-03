<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function escape() {
        return view('view.escape', [
            'msg'=>'<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" /><p>WINGSへようこそ</p>'
        ]);
    }

    public function if() {
        return view('view.if', [
            'random'=>random_int(0, 100)
        ]);
    }

    public function isset() {
        return view('view.isset', [
            'msg'=>'hello world.'
        ]);
    }

    public function switch() {
        return view('view.switch', [
            'random'=>random_int(0, 5)
        ]);
    }

    public function while() {
        return view('view.while');
    }

    public function foreach_assoc() {
        return view('view.foreach_assoc', [
            'member'=> [
                'name'=>'YAMADA, Yoshihiro',
                'sex'=>'男',
                'birth'=>'1923-11-10'
            ]
        ]);
    }

    public function forelse() {
        return view('view.forelse', [
            'list'=>array()
        ]);
    }

    public function master() {
        return view('view.master', [
            'msg'=>'hello world.'
        ]);
    }

    public function comp() {
        return view('view.comp');
    }

    public function list() {
        return view('view.list', [
            'records'=>Book::all()
        ]);
    }
}
