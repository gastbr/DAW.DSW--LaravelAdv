<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/queries', [AuthorController::class, 'index']);


Route::resource('videos', App\Http\Controllers\VideoController::class)->only('index', 'show');

Route::resource('comments', App\Http\Controllers\CommentController::class)->only('create', 'store');

Route::resource('watches', App\Http\Controllers\Api\WatchController::class)->only('store');
