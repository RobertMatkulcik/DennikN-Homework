<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Subscription;
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


Route::get('/', [UserController::class, 'list']);
Route::get('/subscribe/{id}', [SubscriptionController::class, 'create'])->name("subscribe");
Route::post('/subscribe/{id}', [SubscriptionController::class, 'store'])->name("subscribe");
//Route::post('/subscribe/{id}', [Subscription::class, 'store'])->name("subscribe");

Route::get('/register', [UserController::class, 'register']);
Route::post('register', [UserController::class, 'store']);

