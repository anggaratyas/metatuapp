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

Route::get('/',function(){
    return view('auths.login');
});

    Auth::routes();

    Route::get('/home', 'AuthController@login')->name('login');
    Route::get('/login', 'AuthController@login')->name('login');
    Route::post('/postlogin', 'AuthController@postlogin');
    Route::get('/logout', 'AuthController@logout');


Route::group(['middleware' => ['auth','checkRole:sudo']],function(){
    Route::resource('user','UserController');
    
    Route::get('getdatauser',[
        'uses' => 'UserController@getdatauser',
        'as' => 'ajax.get.data.user',
    ]);
});

Route::group(['middleware' => ['auth','checkRole:sudo,admin']],function(){
    Route::resource('dashboard','DashboardController'); 
    Route::resource('penduduk','PendudukController');
    Route::resource('pengurus','AdminController');

    Route::get('getdatapenduduk',[
        'uses' => 'PendudukController@getdatapenduduk',
        'as' => 'ajax.get.data.penduduk',
    ]);
    
    Route::get('getdatapengurus',[
        'uses' => 'AdminController@getdatapengurus',
        'as' => 'ajax.get.data.pengurus',
    ]);

    Route::get('getdatakaryawan',[
        'uses' => 'KaryawanController@getdatakaryawan',
        'as' => 'ajax.get.data.karyawan',
    ]);

    Route::get('getdatapelanggan',[
        'uses' => 'PelangganController@getdatapelanggan',
        'as' => 'ajax.get.data.pelanggan',
    ]);

});

