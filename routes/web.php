<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/f1', function () {
//     return view('front.f1');
// });
// Route::get('/f2', function () {
//     return view('front.f2');
// });
// Route::get('/f3', function () {
//     return view('front.f3');
// });

Route::get('/', function () {

    $data = [
        's1' => 'amy',
        's2' => 'cat',
        's3' => 'dog'
    ];
    return view('front.hall',['data123'=> $data]);
    // return view('front.hall')->with('data123', $data);
});


Route::get('/xxx1', function () {
    return view('front.f1');
})->name("helloF1");

Route::get('/隨便取f2', function () {
    return view('front.f2');
})->name("helloF2");

Route::get('/亂打f3', function () {
    return view('front.f3');
})->name("helloF3");


Route::get('/test123', function () {
    return view('front.f3');
})->name("abc");


Route::get('/calculate', function () {
    $option = ['+', '-', '*', '/'];
    $getOption = $option[rand(0, 3)];
    $data = [
        'num1' => 100,
        'num2' => 2000,
        'option' => $getOption
    ];
    return view('front.calculate')->with('data', $data);
})->name("calculate");


Route::get('/jerry111', function () {
    return view('front.f3');
})->name("abc");

Route::get('/tt', function () {
    return view('front.table');
});
