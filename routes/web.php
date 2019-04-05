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
    return view('book.index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('book.contact');
});

/*Route::get('/login', function () {
    return view('book.login');
});*/
Route::auth();

Route::post('/contact_process', function () {
    return view('book.contact_process');
});


Route::post('/send-email','authController@send');
Route::get('/contact-us','authController@index');


Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);


Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
