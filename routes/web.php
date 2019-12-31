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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'AuthController@login')->name('login');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:sudo']],function(){
    Route::resource('user','UserController');
});

Route::group(['middleware' => ['auth','checkRole:sudo,admin']],function(){
    Route::resource('dashboard','DashboardController'); 
    Route::get('/api/penduduk','APIController@penduduk');
    Route::resource('pengurus','AdminController');
    Route::resource('penduduk','PendudukController');
    Route::get('/penduduk/{id}/profile', 'PendudukController@profile');

});

Route::get('getdatapenduduk',[
    'uses' => 'PendudukController@getdatapenduduk',
    'as' => 'ajax.get.data.penduduk',
]);

Route::get('getdatauser',[
    'uses' => 'UserController@getdatauser',
    'as' => 'ajax.get.data.user',
]);


