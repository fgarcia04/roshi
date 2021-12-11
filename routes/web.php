<?php

use App\Http\Livewire\Admin\Home;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Logout;
use App\Http\Livewire\Auth\PasswordForgot;
use App\Http\Livewire\Auth\PasswordReset;
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

Route::redirect('/', '/login');


Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/password-forgot', PasswordForgot::class)->name('password.forgot');
    Route::get('/password-reset/{token}/{email}', PasswordReset::class)->name('password.reset');
});

Route::post('/logout', Logout::class)->name('logout')->middleware('auth');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', Home::class)->name('admin.home');
    Route::get('/users', Home::class)->name('admin.users');
    Route::get('/users/add', Home::class)->name('admin.users.add');
    Route::get('/users/list', Home::class)->name('admin.users.list');
});
