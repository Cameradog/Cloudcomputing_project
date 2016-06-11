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
Route::get('/', 'ToeicWords@welcome');
Route::get('all', 'ToeicWords@index');
Route::get('aa', 'ToeicWords@aa');
Route::get('ar', 'ToeicWords@ar');
Route::get('as', 'ToeicWords@astro');
Route::get('be', 'ToeicWords@be');
Route::get('ge', 'ToeicWords@ge');
Route::get('sc', 'ToeicWords@sc');
Route::get('ss', 'ToeicWords@ss');
