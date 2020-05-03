<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        return 'hello world.';
    }

    public function view() {

        $data = [
            'msg' => 'hello world.'
        ];

        return view('hello.view', $data);
    }

    public function list() {
        
        $data = [
            'records'=>Book::all()
        ];

        return view('hello.list', $data);
    }
}
