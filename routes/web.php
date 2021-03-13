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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/home','PlantController');

Route::get('/dashboard', 'PlantController@dashboard')->name('dashboard');
Route::get('/rawData', 'PlantController@url_rawdata')->name('url_rawdata');

// Route::get('/dashboard/light', 'PlantController@light')->name('/dashboard/light');
// Route::get('/dashboard/DHT', 'PlantController@DHT')->name('/dashboard/DHT');
// Route::get('/dashboard/EC', 'PlantController@EC')->name('/dashboard/EC');
// Route::get('/dashboard/Temp', 'PlantController@Temp')->name('/dashboard/Temp');

// Route::get('/pot', 'PlantController@potuser')->name('/light');

Route::get('/potconfig','PlantController@potuser')->name('/potconfig');
Route::get('/home', 'PlantController@index')->name('home');
Route::get('/regispot', 'PlantController@not')->name('regispot');
Route::get('/chart', 'PlantController@chart')->name('chart');


