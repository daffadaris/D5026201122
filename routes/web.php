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

Route::get('/', function () {
    return view('welcome');
});
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});
Route::get('tugas4',function(){
    return view('daffa_penugasan_konversi');
});
Route::get('praktikum2',function(){
    return view('praktikumdua');
});
Route::get('ets2021',"ViewController@showETS") ;
Route::get('greetings',"ViewController@showGreetings") ;
Route::post('sayhi',"ViewController@sayHi") ;
Route::get('PHP',"ViewController@showtugasPHP") ;
Route::post('isiann',"ViewController@isian") ;

