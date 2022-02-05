<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\ClanakController;
use App\Http\Controllers\UserClanakController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $req) {
    return $req->user();
});
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::resource('users.clanaks', UserClanakController::class)->only(['index']);

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $req) {
        return auth()->user($req);
    });

    Route::resource('clanaks', ClanakController::class)->only(['update', 'store', 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::resource('clanak', ClanakController::class)->only(['index']);
