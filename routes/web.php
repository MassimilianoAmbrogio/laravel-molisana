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

Route::get('/', function () {

    @require_once __DIR__ . './../data.php';


    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach($data as $card) {
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

    // dd($data);
    return view('home', [ 'lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime ]);
});

Route::get('/products', function () {
    // + blade.php
    
    return view('products');
});

Route::get('/news', function () {
    
    return view('news');
});