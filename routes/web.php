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


Route::any('login', function() {
    if (request()->getMethod() == 'POST') {
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            echo '<p style="color: #ff0000;">Incorrect!</p>';
        } else {
            echo '<p style="color: #00ff30;">Matched :)</p>';
        }
    }

    $form = '<form method="post" action="captcha-test">';
    $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    $form .= '<p>' . captcha_img() . '</p>';
    $form .= '<p><input type="text" name="captcha"></p>';
    $form .= '<p><button type="submit" name="check">Check</button></p>';
    $form .= '</form>';
    return $form;
});


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::get('login','HomeController@myCaptcha')->name('myCaptcha');
Route::post('login','HomeController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha','HomeController@refreshCaptcha')->name('refresh_captcha');

Route::resource('kategori_artikel','KategoriArtikelController');
Route::get('kategori_artikel/trash', 'KategoriArtikelController@trash')->name('kategori_artikel.trash');

Route::resource('kategori_berita','KategoriBeritaController');
Route::get('kategori_berita/trash', 'KategoriBeritaController@trash')->name('kategori_berita.trash');

Route::resource('kategori_galeri','KategoriGaleriController');
Route::get('kategori_galeri/trash', 'KategoriGaleriController@trash')->name('kategori_galeri.trash');

Route::resource('kategori_pengumuman','KategoriPengumumanController');
Route::get('kategori_pengumuman/trash', 'KategoriPengumumanController@trash')->name('kategori_pengumuman.trash');

Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
Route::get('/artikel/create', 'ArtikelController@create')->name('artikel.create');
Route::post('/artikel', 'ArtikelController@store')->name('artikel.store');
Route::get('/artikel/{id}', 'ArtikelController@show')->name('artikel.show');
Route::get('/artikel/{id}/edit', 'ArtikelController@edit')->name('artikel.edit');
Route::patch('/artikel/{id}/', 'ArtikelController@update')->name('artikel.update');
Route::delete('/artikel/{id}/', 'ArtikelController@destroy')->name('artikel.destroy');

Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/berita/create', 'BeritaController@create')->name('berita.create');
Route::post('/berita', 'BeritaController@store')->name('berita.store');
Route::get('/berita/{id}', 'BeritaController@show')->name('berita.show');
Route::get('/berita/{id}/edit', 'BeritaController@edit')->name('berita.edit');
Route::patch('/berita/{id}/', 'BeritaController@update')->name('berita.update');
Route::delete('/berita/{id}/', 'BeritaController@destroy')->name('berita.destroy');

Route::get('/galeri', 'GaleriController@index')->name('galeri.index');
Route::get('/galeri/create', 'GaleriController@create')->name('galeri.create');
Route::post('/galeri', 'GaleriController@store')->name('galeri.store');
Route::get('/galeri/{id}', 'GaleriController@show')->name('galeri.show');
Route::get('/galeri/{id}/edit', 'GaleriController@edit')->name('galeri.edit');
Route::patch('/galeri/{id}/', 'GaleriController@update')->name('galeri.update');
Route::delete('/galeri/{id}/', 'GaleriController@destroy')->name('galeri.destroy');

Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create', 'PengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman', 'PengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}', 'PengumumanController@show')->name('pengumuman.show');
Route::get('/pengumuman/{id}/edit', 'PengumumanController@edit')->name('pengumuman.edit');
Route::patch('/pengumuman/{id}/', 'PengumumanController@update')->name('pengumuman.update');
Route::delete('/pengumuman/{id}/', 'PengumumanController@destroy')->name('pengumuman.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');