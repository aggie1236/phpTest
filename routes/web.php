<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
 
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

Route::get('/a/{number}', function (Request $request,$number) {
    $fib = new \App\Fib($number);
    return view('welcome', [
        'num' => $fib->cal(),
    ]);
});

Route::get('/c', function (Request $request) {
    $query = $request->query('a');
    echo $query;

    $value = $request->header('test');
    echo $value;
    return response()->json(['query' => $query, 'header' => $value]);
});

Route::post('/b',function(Request $request){
    $uri = $request->path();
    echo $uri;
    // $bodyContent = $request->getContent();
    // return $bodyContent;
    return response()->json(['name' => 'Abigail', 'state' => 'CA']);
});



