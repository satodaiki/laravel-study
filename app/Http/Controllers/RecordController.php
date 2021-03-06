<?php

namespace App\Http\Controllers;

use DB;
use App\Book;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function find() {
        return Book::find(1)->title;
    }

    public function where() {

        // $result = Book::where('price', '<', 3000)->get();
        
        // $result = Book::where('title', 'LIKE', '%Java%')->get();
        
        // $result = Book::whereIn('publisher', ['日経BP', '翔泳社', 'インプレス'])->get();
        
        // $result = Book::whereBetween('price', [1000, 3000])->get();
        
        // $result = Book::whereNotNull('publisher')->get();
        
        // $result = Book::whereYear('published', '2019')->get();
        
        // $result = Book::whereYear('published', '<', '2019')->get();
        
        // $result = Book::where('publisher', '翔泳社')
        //     ->where('price', '<', 3000)
        //     ->get();
        
        // $result = Book::where('publisher', '翔泳社')
        //     ->orWhere('price', '<', 2500)
        //     ->get();
        
        // $result = Book::whereRaw('publisher = ? AND price < ?', ['翔泳社', 3000])->get();
        
        // $result = Book::orderBy('price', 'desc')->orderBy('published', 'asc')->get();

        // $result = Book::orderBy('published', 'desc')
        //     ->offset(2)
        //     ->limit(3)
        //     ->get();

        // $result = Book::select('title', 'publisher')->get();

        // $result = Book::groupBy('publisher')
        //     ->having('price_avg', '<', 2500)
        //     ->selectRaw('publisher, AVG(price) AS price_avg')
        //     ->get();

        // $result = Book::where('publisher', '翔泳社')->max('price');

        $result = DB::select('SELECT * FROM books');

        return view('hello.list', ['records'=>$result]);
    }

    public function hasmany() {
        return view('record.hasmany', [
            'book'=>Book::find(1)
        ]);
    }
}
