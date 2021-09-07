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
    return redirect(route('login'));
});

Route::name('personal:')->middleware(['auth'])->prefix('personal')->namespace('Portfolio')->group(function(){
    Route::get('cvpdf', 'PortfolioController@generateCvPdf')->name('portfolio.generateCvPdf');
    Route::post('mailcv', 'PortfolioController@mailCV')->name('portfolio.mailcv');
    Route::resource('portfolio', 'PortfolioController');
    Route::resource('role', 'RoleController')->middleware(['admin']);
    Route::resource('permission', 'PermissionController')->middleware(['admin']);
    Route::resource('user', 'UserController')->middleware(['admin']);
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('home', function(){
    return view('master');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';

// Route::get('testquery', function(){
//     return __DIR__;
// });

Route::get('testpage', function(){
    return view('library_mgmt.main-app');
});