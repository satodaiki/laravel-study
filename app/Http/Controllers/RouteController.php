<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{

    public function param(int $id = 1) {
        return 'id値 : ' . $id;
    }

    public function search(int $keywd) {
        return '検索文字列 : ' . $keywd;
    }
}
