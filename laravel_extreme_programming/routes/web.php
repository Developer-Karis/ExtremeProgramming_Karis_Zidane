<?php

use App\Http\Controllers\AvatarController;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [AvatarController::class, 'index']);
Route::get('/show-user/{id}', [AvatarController::class, 'show']);
Route::get('/edit-user/{id}', [AvatarController::class, 'edit']);
Route::post('/update-user/{id}', [AvatarController::class, 'update']);
Route::get('/delete-avatar/{id}', [AvatarController::class, 'destroy']);
Route::get('/avatars', [AvatarController::class, 'create']);

Route::get('/delete-user/{id}', [AvatarController::class, 'destroyUser']);

Route::get('/create-avatar', [AvatarController::class, 'createAvatar']);
Route::post('/add-avatar', [AvatarController::class, 'addAvatar']);
