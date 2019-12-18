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



// Route::get('/data_pemasang', function(){
//     return view('dashboard/pelanggan/user');
// });

// Route::get('/data_penduduk', function(){
//     return view('dashboard/admin/penduduk');
// });



// Route::get('/profil', function(){
//     return view('dashboard/pelanggan/profile');
// });

// Route::get('/', 'PagesController@index');

// Route::get('/penduduk', 'PendudukController@index');
// Route::get('/penduduk/{Penduduk}', 'PendudukController@show');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/',function(){
    return view('welcome');
});


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

// Auth::routes();

Route::group(['middleware' => ['auth','checkRole:admin']],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/penduduk','PendudukController@index');
    Route::get('/penduduk/create','PendudukController@create');
    Route::get('/penduduk/{penduduk}','PendudukController@show');
    Route::get('/penduduk/{Penduduk}/edit','PendudukController@edit');
    Route::get('/penduduk/{Penduduk}/update','PendudukController@update');
    Route::get('/penduduk/{Penduduk}/delete','PendudukController@delete');
    Route::get('/penduduk/{Penduduk}/profile','PendudukController@profile');
});

Route::group(['middleware' => ['auth','checkRole:admin,pengurus']],function(){
    Route::get('/dashboard','DashboardController@index');
});

// Route::get('/home', 'HomeController@index')->name('home');
