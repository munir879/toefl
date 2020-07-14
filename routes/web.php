<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::livewire('/user/registration', 'user.registration')->name('user.registration');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');





Route::livewire('/user/login', 'user.login');
Route::livewire('/admin/login', 'admin.login');

// auth member
Route::middleware('auth:member')->group(function () {
    Route::livewire('/dasbord', 'home.index')->layout('layouts.dashboard')->name('user.login');
    Route::livewire('/member/test/{id}', 'member-test-questions.index')->layout('layouts.dashboard')->name('start.test');
    Route::livewire('/score/{id}', 'score.show')->layout('layouts.dashboard')->name('member.score');
    Route::livewire('/member/test', 'member.test')->layout('layouts.dashboard')->name('member.test');
    Route::livewire('/member/setting/account', 'user.account')->layout('layouts.dashboard')->name('member.account');
    Route::livewire('/score', 'score.index')->layout('layouts.dashboard');
});

Route::middleware('auth:member')->group(function () {
});

// auth admin
Route::middleware('auth:admin')->group(function () {
    Route::livewire('/questions', 'questions.index')->layout('layouts.dashboard');
    Route::livewire('/questions/create/{id}', 'questions.create')->layout('layouts.dashboard')->name('questions.create');
    Route::livewire('/articles/edit/{id}', 'article.update')->layout('layouts.dashboard')->name('articles.edit');
    Route::livewire('/questions/edit/{id}', 'questions.edit')->layout('layouts.dashboard')->name('questions.edit');
    Route::livewire('/articles/create/{id}', 'article.create')->layout('layouts.dashboard')->name('articles.create');
    Route::livewire('/articles', 'article.index')->layout('layouts.dashboard');
    Route::livewire('/questions/update', 'questions.update')->layout('layouts.dashboard');
    Route::livewire('/test', 'test.index')->layout('layouts.dashboard');
    Route::livewire('/test/segmen', 'test.segmen')->layout('layouts.dashboard');
    Route::livewire('/test/segmen/{id}', 'test.segmen')->layout('layouts.dashboard')->name('test.segmen');
    Route::livewire('/articles/segmen/{id}', 'article.index')->layout('layouts.dashboard')->name('articles.index');
    Route::livewire('/questions/segmen/{id}', 'questions.index')->layout('layouts.dashboard')->name('questions.index');
    Route::livewire('/setting/account', 'admin.account')->layout('layouts.dashboard')->name('admin.account');
});



/* Route::group(['middleware' => ['role:admin']], function () {
    route::prefix('pengeluaran')->group(function () {
        Route::get('/', 'pengeluaran@index');
        Route::get('/create', 'pengeluaran@create');
        Route::get('/{asrama}/edit', 'pengeluaran@edit');
    });
}); */
