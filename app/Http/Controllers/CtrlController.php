<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CtrlController extends Controller
{
    public function __constract() {
        $this->middleware(function($request, $next) {
            return $next($request);
        })
        ->only(['basic', 'basic2']);
    }

    public function plain() {
        return response('hello world.', 200)
            ->header('Content-Type', 'text/plain');
    }

    public function outJson() {
        return response()
            ->json([
                'name'=>'Yoshihiro, YAMADA',
                'sex'=>'male',
                'age'=>18,
            ])
            ->withCallback('callback');
    }

    public function outFile() {
        return response()
            ->streamDownload(function() {
                print(
                    "1,2019/10/1,123\n".
                    "2,2019/10/2,456\n".
                    "3,2019/10/3,789\n".
                    "4,2019/10/4,101\n".
                    "5,2019/10/5,102\n"
                );
            }, 'download.csv', ['content-type'=>'text/csv']);
    }

    // public function outImage() {
    //     $pathToFile = Storage::url('wings.jpg');
    //     return response()
    //         ->file($pathToFile, ['Content-Type'=>'image/jpg']);
    // }

    public function redirectBasic() {
        // return redirect('hello/list');
        // return redirect()->route('list');
        // return redirect()->route('param', ['id' => 108]);
        // return redirect()->action('RouteController@param', ['id' => 108]);
        return redirect()->away('https://google.com');
    }

    public function index(Request $req) {
        return 'リクエストパス:' . $req->path();
        // return 'リクエストパス:' . request()->path();
    }

    public function form() {
        return view('ctrl.form', ['result' => '']);
    }

    public function result(Request $req) {
        
        $name = $req->input('name', '名無し');

        return view('ctrl.form', [
            'result'=>'こんにちは、'.$name.'さん！'
        ]);
    }

    public function upload() {
        return view('ctrl.upload', ['result' => '']);
    }

    public function uploadfile(Request $req) {
        if(!$req->hasFile('upfile')) {
            return 'ファイルを指定してください。';
        }

        $file = $req->upfile;

        if (!$file->isValid()) {
            return 'アップロードに失敗しました。';
        }

        $name = $file->getClientOriginalName();

        $file->storeAs('files', $name);

        return view('ctrl.upload', [
            'result'=>$name.'をアップロードしました。'
        ]);
    }

    public function middle() {
        return 'log is recorded';
    }
}
