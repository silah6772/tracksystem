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
    return view('welcome');
});
Route::resource('publishers','PublishersController');
Route::resource('roles','RolesController');
Route::resource('academiclevel','AcademiclevelsController');
Route::resource('students','StudentsController');
Route::resource('books','BooksController');
Route::resource('shelf','ShelvesController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
