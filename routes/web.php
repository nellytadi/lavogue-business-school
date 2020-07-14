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

Route::get('/','NavigationController@index')->name('home');

Route::get('/about_us','NavigationController@about')->name('about');

Route::get('/certificate_courses','NavigationController@courses')->name('courses');

Route::get('/contact_us','NavigationController@contactUs')->name('contact_us');

Route::get('/affiliate_programs','NavigationController@affiliates')->name('affiliates');

Route::get('/register','NavigationController@register')->name('register');

Route::get('/news_&_events','NavigationController@events')->name('events');

Route::get('/news_&_events/{id}','NavigationController@viewEvent')->name('view_event');

Route::get('/private/business/admin/events/delete/{id}','NavigationController@deleteEvent')->name('delete_event');

Route::get('/private/business/admin/events','NavigationController@adminEvents')->name('admin_events');

Route::post('/register/submit','NavigationController@submitReg');

Route::post('/private/business/admin/event/submit','NavigationController@submitEvent');

Route::post('/contact','ContactController@store')->name('contact');
