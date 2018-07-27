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

/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'TestController@index');
*/
/*
 * Rutas protegidas por el middleware Auth
 */
Auth::routes();
Route::view('/','survey.home')->name('home');

Route::get('/survey', 'SurveyController@index')->name('survey');
Route::get('/statistics', 'StatisticsController@index')->name('statistics');
Route::get('/dashboard', 'DashBoardController@index')->name('dashboard');


