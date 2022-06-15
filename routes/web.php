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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/berita/{slug}', 'BeritaController@show')->name('berita.show');
Route::get('/photo-video', 'PhotoVideoController@index')->name('photo-video.index');
Route::get('/photo-video/{album}', 'PhotoVideoController@show')->name('photo-video.show');
Route::get('/competition-venue', 'Competition\VenueController@index')->name('competition.venue.index');
Route::get('/competition-schedule', 'Competition\ScheduleController@index')->name('competition.schedule.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
