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

Route::get('/test', 'WelcomeController@welcome');

// Route::get('tests_temp', function () {
//     return view('test', 
//         ["name"=> "Pala"]
//     );
// });

// Route::get('/math/{var}', function ($var) {
//     return view('test', ["num"=> $var * 2]);
// })->where('var', '[0-9]*');

Route::get('articles', 'ArticlesController@index');

