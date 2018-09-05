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
    return view('fronend.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'superadmin', 'middleware'=>['auth','role:member|admin|superadmin']],
function(){
	Route::resource('jurusan','JurusanController');
Route::resource('kelas','KelasController');
Route::resource('siswa','SiswaController');
Route::resource('pertanyaan','PertanyaanController');
Route::resource('jawab','JawabController');
Route::resource('data_pegawai','DataPegawaiController');
Route::resource('datamember','DataMemberController');
});

