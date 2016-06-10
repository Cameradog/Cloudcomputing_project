<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route for all category
Route::get('/', function () {
    return view('content.index');
});
Route::get('aa', function () {
    return view('content.aa');
});
Route::get('ar', function () {
    return view('content.ar');
});
Route::get('as', function () {
    return view('content.as');
});
Route::get('be', function () {
    return view('content.be');
});
Route::get('ge', function () {
    return view('content.ge');
});
Route::get('sc', function () {
    return view('content.sc');
});
Route::get('ss', function () {
    return view('content.ss');
});
