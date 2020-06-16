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

Route::get('/', function () {
    return view('welcome');
});


route::get('/dashboard', 'AdminController@dashboard');
route::get('/user', 'UserController@index');

Route::livewire('/dasbord', 'home.index')->layout('layouts.dashboard');

Route::livewire('/user/registration', 'user.registration');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::livewire('/questions', 'questions.index');
Route::livewire('/questions/create', 'questions.create');
Route::livewire('/questions/update', 'questions.update');

/* Route::group(['middleware' => ['role:admin']], function () {
    route::prefix('pengeluaran')->group(function () {
        Route::get('/', 'pengeluaran@index');
        Route::get('/create', 'pengeluaran@create');
        Route::get('/{asrama}/edit', 'pengeluaran@edit');
    });
}); */