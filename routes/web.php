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
Route::get('/hello', function () {
    echo'hello world';
});
Route::get('/name/{sugih}', function ($sugih) {
    return"hello " . $sugih;
})->where('sugih','[A-Za-z]+');

Route::get('/name/{nrp}/{name}', function ($nrp,$name) {
    return"hello " . $nrp . $name;
})