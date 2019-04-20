<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('akademik');
});

Route::get('/akademik', 'AkademikController@index');

Route::get('/akademik/frs', 'AkademikController@getFrs');
Route::post('/akademik/frs/ambil', 'AkademikController@AkademikFrs')->name('ambil.matkul');
Route::delete('/akademik/frs', 'AkademikController@destroyFrs');
Route::put('/akademik/frs', 'AkademikController@accFrs');

Route::get('akademik/nilai', 'AkademikController@getMatkul'); 
Route::get('akademik/nilai/{id}', 'AkademikController@show');

Route::get('akademik/nilai/{id}/edit', 'AkademikController@editMatkul');
Route::post('akademik/nilai/{id}', 'AkademikController@updateMatkul');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::prefix('akademik')->middleware(['has_verified'])->group(function () {

// });