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

Route::get('/linuxone', function () {
    return view('linuxone');
});

Route::get('/ibm_cloud', function () {
    return view('bluemix');
});

Route::get('/welcome_corda', function () {
    return view('welcome_corda');
});

Route::get('/corda', function () {
    return view('corda');
});
