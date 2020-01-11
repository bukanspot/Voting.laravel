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

Route::get('/','MilihController@index');
Route::get('/kandidat/{id}','MilihController@kandidat');
Route::post('/vote/{id}','MilihController@vote');
Route::get('/livecount','MilihController@hasil');

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/pemilih/login', 'MilihController@login');

Route::get('/admin/home','AdminController@home')->name("admin.home");
Route::get('/admin/setting','AdminController@setting');
Route::get('/admin/chart','AdminController@chart');
Route::get('/admin/pemilihan','AdminController@pemilihan');
Route::get('/admin/setting/edit/{id}','AdminController@edit_setting');
Route::put('/admin/setting/{id}','AdminController@update_setting');

//login
Route::post('/login/admin','LoginController@login_admin');
Route::get('/logout/admin','LoginController@logout_admin');

Route::post('/login/pemilih','LoginController@login_pemilih');
Route::get('/logout/pemilih','LoginController@logout_pemilih');


Route::resource('admin/calon', 'CalonController');
Route::resource('admin/pemilih', 'PemilihController');