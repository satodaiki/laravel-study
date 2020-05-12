<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Middleware\LogMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@Index');
Route::get('hello/view', 'HelloController@view');
Route::get('hello/list', 'HelloController@list')
    ->name('list');

Route::get('view/escape', 'ViewController@escape');
Route::get('view/if', 'ViewController@if');
Route::get('view/isset', 'ViewController@isset');
Route::get('view/switch', 'ViewController@switch');
Route::get('view/while', 'ViewController@while');
Route::get('view/foreach_assoc', 'ViewController@foreach_assoc');
Route::get('view/forelse', 'ViewController@forelse');
Route::get('view/master', 'ViewController@master');
Route::get('view/comp', 'ViewController@comp');
Route::get('view/list', 'ViewController@list');

Route::get('route/param/{id?}', 'RouteController@param')
    ->where(['id'=>'[0-9]{2,3}']);
    // ->name('param');
Route::get('route/search/{keywd}', 'RouteController@search')
    ->where('keywd', '.*');
Route::prefix('members')->group(function() {
    Route::get('info', 'RouteController@info');
    Route::get('article', 'RouteController@article');
});
Route::namespace('Main')->group(function() {
    Route::get('route/ns', 'RouteController@ns');
});
Route::view('/route', 'route.view', ['name' => 'Laravel']);
Route::redirect('/hoge', '/', 301);

// Route::resource('articles', 'ArticleController')
//     ->except(['edit', 'update']);
Route::resources([
    'articles'=>'ArticleController'
]);

// Route::fallback(function() {
//     return view('route.error');
// });

Route::prefix('ctrl')->group(/** ['middleware' => [ 'debug' ]], */ function() {
    Route::get('plain', 'CtrlController@plain');
    Route::get('outJson', 'CtrlController@outJson');
    Route::get('outFile', 'CtrlController@outFile');
    Route::get('outImage', 'CtrlController@outImage');
    Route::get('redirectBasic', 'CtrlController@redirectBasic');
    Route::get('index', 'CtrlController@index');
    Route::get('form', 'CtrlController@form');
    Route::post('result', 'CtrlController@result');
    Route::get('upload', 'CtrlController@upload');
    Route::post('uploadfile', 'CtrlController@uploadfile');
    Route::get('middle', 'CtrlController@middle');
        // ->middleware(LogMiddleware::class);
});

Route::prefix('state')->group(function() {
    Route::get('recCookie', 'StateController@recCookie');
    Route::get('readCookie', 'StateController@readCookie');
    Route::get('session1', 'StateController@session1');
    Route::get('session2', 'StateController@session2');
});

Route::prefix('record')->group(function() {
    Route::get('find', 'RecordController@find');
    Route::get('where', 'RecordController@where');
    Route::get('hasmany', 'RecordController@hasmany');
});

Route::prefix('save')->group(function() {
    Route::get('create', 'SaveController@create');
    Route::post('store', 'SaveController@store');
    Route::get('{id}/edit', 'SaveController@edit');
    Route::patch('{id}', 'SaveController@update');
    Route::get('{id}', 'SaveController@show');
    Route::delete('{id}', 'SaveController@destroy');
});