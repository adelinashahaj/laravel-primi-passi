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
    $data= [
        'listafrutta'=>[
            'mele',
            'pere',
        ],
        
        'listaverdura'=>[
            'cetrioli',
            'carote'
        ]
        
        ];




    return view('home',$data);
})->name('home');

Route::get('about', function () {

    return view('about', ['message' => 'Siamo la classe 87 e siamo arrivati a studiare laravel']);

})->name('about');

Route::get('dowload', function () {

    return view('dowload', ['message' => 'Dowload per saperne di piu']);

})->name('dowload');
