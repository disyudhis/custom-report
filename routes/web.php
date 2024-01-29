<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\LoginViewIndex;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Livewire\Pages\Admin\Dashboard\AdminDashboardIndex;

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

Route::get('/login', function () {
    return redirect(route('landing-page'));
});

Auth::routes([
    'register' => false,
    'login' => false,
    'verify' => true,
]);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', LoginViewIndex::class)->name('landing-page');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'verified'], function () {
        Route::group(['middleware' => 'admin'], function () {
            Route::get('/admin/dashboard', AdminDashboardIndex::class)->name('admin.dashboard.index');
        });

        Route::group(['middleware' => 'client'], function () {

        });

        Route::group(['middleware' => 'superadmin'], function(){

        });

    });
});
