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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/main', function () {
//     return view('dashboard/index');
// });

// Route::get('/tes', function(){
//     return view('tes');
// } );

// Route::get('/reg_pemasang', function(){
//     return view('dashboard/pelanggan/register');
// });

Route::get('/data_pemasang', function(){
    return view('dashboard/pelanggan/user');
});

// Route::get('/data_penduduk', function(){
//     return view('dashboard/admin/penduduk');
// });



Route::get('/profil', function(){
    return view('dashboard/pelanggan/profile');
});

Route::get('/', 'PagesController@index');

Route::get('/penduduk', 'PendudukController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
