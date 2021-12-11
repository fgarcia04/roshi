<?php

use App\Http\Livewire\Admin\Home;
use App\Http\Livewire\Admin\Users\Main as UsersMain;
use App\Http\Livewire\Admin\Customers\Main as CustomersMain;
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

Route::group(['middleware' => ['auth', 'customer'], 'prefix' => 'customer'], function () {
    Route::get('/home', Home::class)->name('customer.home');
    Route::get('/users', UsersMain::class)->name('customer.users');
    Route::get('/customers', CustomersMain::class)->name('customer.customers');
});

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/home', Home::class)->name('admin.home');
    Route::get('/users', UsersMain::class)->name('admin.users');
    Route::get('/customers', CustomersMain::class)->name('admin.customers');
});
