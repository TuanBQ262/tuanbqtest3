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
    return redirect('top');
});
Route::get('top','Top@getList');
Route::view('/ganbaru', 'ganbaru');
Route::get('ganbaru','Ganbaru@getGanbaruPost');
Route::view('/report', 'report');
Route::view('/underconstruction', 'underconstruction');
Route::view('form_ipps_2021', 'form_ipps_2021');
Route::post('form_ipps_2021', 'FormIpps@FormValidator');