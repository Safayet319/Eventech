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

Route::get('/','HomeController@index');
Route::get('/speakers','SpeakerController@index');
Route::get('/schedule','ScheduleController@index');
Route::get('/about','AboutController@index');
Route::get('/venue','VenueController@index');
Route::get('/faq','FaqController@index');
Route::get('/sponsor','SportsPartnerController@index');
Route::get('/gallery','GalleryController@index');
Route::get('/blog','BlogController@index');
Route::get('/blog-details','BlogController@singleBlog');
Route::get('/contact','ContactController@index');
Route::get('/tickets','TicketsController@index');
Route::post('/message','ContactController@store');