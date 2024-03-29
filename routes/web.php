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

Route::get('/home', function () {
    return redirect()->route('backend.dashboard.index');
})->name('home');

Auth::routes();

Route::group(['namespace' => 'Backend', 'as' => 'backend.', 'prefix'=>'backend'], function (){
    Route::resource('dashboard', 'DashboardController')->except(['create','store', 'show', 'edit', 'update', 'destroy']);
    Route::resource('setting', 'SettingController')->except(['create','store', 'show', 'edit', 'update', 'destroy']);

});




