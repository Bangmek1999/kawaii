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
Route::resource('/admin','PlantController');
Route::get('/dashboard', 'PlantController@dashboard')->name('dashboard');
Route::get('/rawData', 'PlantController@url_rawdata')->name('url_rawdata');
Route::get('/potconfig','PlantController@potuser')->name('/potconfig');
Route::get('/home', 'PlantController@index')->name('home');
Route::get('/regispot', 'PlantController@not')->name('regispot');
Route::get('/chart', 'PlantController@chart')->name('chart');
Route::get('/admin', 'PlantController@admin')->name('admin');
Route::put('/admin/{admin}','PlantController@update')->name('admin.update');

Route::get('/avata','PlantController@avata')->name('/avata');
Route::get('/date_avata','PlantController@date_avata')->name('/date_avata');
Route::get('/user_pot','PlantController@user_pot')->name('/user_pot');

Route::get('/User_name','PlantController@User_name')->name('/User_name');


// Route::get('/admin/admin', 'PlantController@admin')->name('admin');

// Route::resource('/ad','adminController');    

Route::get('/roles', 'PotController@Permission');
Route::get('/Payment', 'PlantController@Payment')->name('Payment');
Route::get('/rank', 'PlantController@rank')->name('rank');


Route::view('/file-upload', 'Payment');
Route::post('/file-upload', 'PhotoController@store');
Route::get('/viewpay', 'PhotoController@viewUploads')->name('viewpay');

// Route::view('/form', 'rank');
Route::post('/submit', 'RankController@save');
Route::get('/ranks', 'RankController@index')->name('ranks');

// Route::post('edit/{id}','RankController@edit');

Route::resource('/rank','RankController');
Route::get('/rank', 'RankController@pot_user');
Route::post('/submitrank/{id}', 'RankController@update');

// Route::put('/rank/{rank}  ','RankController@update')->name('rank.update');




