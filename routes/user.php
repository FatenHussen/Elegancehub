<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\CityController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\RatingController;
use App\Http\Controllers\User\ArticleController;
use App\Http\Controllers\User\CommentController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\ServiceController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\DepartmentController;
use App\Http\Controllers\User\AppointmentController;

Route::group(["middleware" => ['setLocale']], function () {

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/send_otp', [AuthController::class, 'send_otp']);
    Route::post('/verify_otp', [AuthController::class, 'verify_otp']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/send_password', [AuthController::class, 'send_password']);
    Route::post('/verify_password', [AuthController::class, 'verify_password']);

    Route::middleware(['auth.api:users'])->group(function () {
        Route::get('/delete_account', [ProfileController::class, 'delete_account']);
        Route::get('/logout', [AuthController::class, 'logout']);
        Route::prefix('/profile')->group(function () {
            Route::get('/', [ProfileController::class, 'get_profile']);
            Route::post('/update', [ProfileController::class, 'update_profile']);
            Route::post('/update_password', [ProfileController::class, 'update_password']);
        });
        Route::middleware(['auth:sanctum', 'abilities:reset-password'])->group(function () {
            Route::post('/reset_password', [AuthController::class, 'reset_password']);
        });

        // Comments Routes:
        Route::prefix('comments')->group(function () {
            Route::get('/index', [CommentController::class, 'index']);
            Route::get('/show/{id}', [CommentController::class, 'show']);
            Route::post('/store', [CommentController::class, 'store']);
            Route::post('/update/{id}', [CommentController::class, 'update']);
            Route::delete('/destroy/{id}', [CommentController::class, 'destroy']);
        });

        //Articles Routes:
        Route::prefix('articles')->group(function () {
            Route::get('/index', [ArticleController::class, 'index']);
            Route::get('/get_one/{id}', [ArticleController::class, 'get_one']);
            Route::get('/search', [ArticleController::class, 'search']);
        });

        // Categories Routes:
        Route::prefix('category')->group(function () {
            Route::get('/index', [CategoryController::class, 'index']);
            Route::get('/show/{id}', [CategoryController::class, 'show']);
            Route::post('/store', [CategoryController::class, 'store']);
            Route::post('/update/{id}', [CategoryController::class, 'update']);
            Route::delete('/destroy/{id}', [CategoryController::class, 'destroy']);
        });

        // Appointments Routes:
        Route::prefix('appointment')->group(function () {
            Route::get('/index', [AppointmentController::class, 'index']);
            Route::get('/show/{id}', [AppointmentController::class, 'show']);
            Route::post('/store', [AppointmentController::class, 'store']);
            Route::post('/update/{id}', [AppointmentController::class, 'update']);
            Route::delete('/destroy/{id}', [AppointmentController::class, 'destroy']);
        });
    });
    Route::prefix('/cities')->group(function () {
        Route::get('/', [CityController::class, 'all_cities']);
    });
});
