<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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




Route::post('/login', [UserController::class, 'login']);
Route::middleware(['middleware' => 'checkAuth'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('welcome');
});
