<?php

use Illuminate\Support\Facades\Route;

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

// Home Page
Route::get('/', function () {

    $data = config('data');

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach($data as $key => $card) {

        $card['id'] = $key;

        if($card['tipo'] == 'lunga') {
            $lunghe[] = $card;
        }
        elseif($card['tipo'] == 'corta') {
            $corte[] = $card;
        }
        elseif($card['tipo'] == 'cortissima') {
            $cortissime[] = $card;  
        }
    }

    // dd($lunghe, $corte, $cortissime);

    // return view('home', [ 'lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime ]);

    return view('home', compact('lunghe', 'corte', 'cortissime'));
})->name('home');

// Product detail
Route::get('/product/{id}', function ($id) {
    // + blade.php
    // dump($id);

    $data = config('data');

    $product = $data[$id];
    $lenght = count($data) - 1;
    
    return view('product', compact('product', 'lenght', 'id'));
})->name('product');

// News Page
Route::get('/news', function () {
    
    return view('news');
})->name('news');
