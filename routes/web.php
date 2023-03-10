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

    $data = [
        'name'=> 'roberto',
        'surname' => 'bozzo',
        'age' => '26'

    ];

    return view('home',compact('data'));
    
});

Route::get('/about-us',function(){

    return view ('about_us');

})->name('ciccio');

Route::get('/contatti',function(){

    $welcome = 'Benvenuto, questa è la tua pagina dei contatti';

    return view('/contatti', compact('welcome'));

})->name('contacts');