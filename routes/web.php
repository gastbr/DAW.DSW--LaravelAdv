<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('conferences', App\Http\Controllers\ConferenceController::class)->only('index', 'show');

Route::resource('venues', App\Http\Controllers\VenueController::class)->only('index', 'show');

Route::resource('speakers', App\Http\Controllers\SpeakerController::class)->only('index', 'show');

Route::resource('talks', App\Http\Controllers\TalkController::class)->only('index', 'show');
