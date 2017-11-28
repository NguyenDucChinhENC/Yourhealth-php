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

Route::get('/', 'HomeController@index');

//Route::get("/register", 'RegisterController@create');
//
//Route::post("register", 'RegisterController@store');
//
//Route::get("/login", 'SessionsController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'InfoUserController@get');
Route::get('/user/edit', 'UpdateUserController@edit')->name('editUser');
Route::post('user/edit', ['uses' =>'UpdateUserController@postedit']);
Route::get('program/{id}', 'ProgramController@show');
Route::post('/search', 'SearchController@result') -> name('search');
Route::get('/search', 'SearchController@result') -> name('search');
Route::get('/coach/{id}', 'CoachController@show');
Route::post('/registration', 'RegistrationController@create') -> name('registration');
Route::get('/registration', 'RegistrationController@index');
Route::get('/tutorial', 'TutorialController@getInfo');
Route::post('/tutorial', 'TutorialController@index') -> name('tutorial');