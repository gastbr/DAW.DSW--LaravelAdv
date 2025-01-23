<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $githubUser = Socialite::driver('github')->user();
    $user = User::UpdateOrCreate(
        ['github_id' => $githubUser->id],
        [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'github_id' => $githubUser->id,
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
        ]
    );

    Auth::login($user);

    return redirect('/dashboard');
});



Route::resource('conferences', App\Http\Controllers\ConferenceController::class)->only('index', 'show');

Route::resource('venues', App\Http\Controllers\VenueController::class)->only('index', 'show');

Route::resource('speakers', App\Http\Controllers\SpeakerController::class)->only('index', 'show');

Route::resource('talks', App\Http\Controllers\TalkController::class)->only('index', 'show');
