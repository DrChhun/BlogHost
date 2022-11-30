<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, "home"]);
Route::get('/content/{id}', [UserController::class, "detail"]);
Route::post('/store', [CollectController::class, "message"]);
Route::get('/cate/vehicle', [ContentController::class, "auto"]);
Route::get('/cate/mobile', [ContentController::class, "mobile"]);
Route::get('/cate/tips', [ContentController::class, "tips"]);
Route::get('/cate/tech', [ContentController::class, "tech"]);

Route::get('/dashboard', [DashboardController::class, "index"]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, "track"])->name('dashboard');
    Route::get('/post', [DashboardController::class, "post"]);
    Route::post('/posting', [ContentController::class, "posting"]);
    Route::get('/edit', [DashboardController::class, "editpage"]);
    Route::get('/delete/{id}', [DashboardController::class, "destroy"]);
    Route::get('/edit/content/{id}', [DashboardController::class, "edit"]);
    Route::patch('/editing/{id}', [DashboardController::class, "update"]);
    Route::get('/message', [DashboardController::class, "message"]);
    Route::get('/delete/message/{id}', [DashboardController::class, "deleteMessage"]);
});
