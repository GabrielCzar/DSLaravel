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

// Defaults
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
//Route::get('/contact', 'PagesController@contact');

// Forms
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');

// Tickets Values
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit','TicketsController@edit');
Route::post('/ticket/{slug?}/edit','TicketsController@update');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy');

// Email
Route::get('sendemail', function () {

    $data = array(
        'name' => "Learning Laravel",
    );

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('thelegend@gmail.com', 'Learning Laravel');

        $message->to('gabrielcesar.a.l@gmail.com')->subject('Learning Laravel test email');

    });

    return "Your email has been sent successfully";

});

// Posts
Route::post('/comment', 'CommentsController@newComment');

// Register
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');

