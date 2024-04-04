<?php

use App\Http\Controllers\Didrive\AuthController as AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::view('/', 'welcome');
//
//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');
//
//Route::view('profile', 'profile')
//    ->middleware(['auth'])
//    ->name('profile');

//Route::get('/enter-vk/callback2',
//    function (Request $request) {
//        dd($request->all());
//    });


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SocialiteController;




//Route::get('/login/vkontakte', [SocialiteController::class, 'redirectToVkProvider'])->name('vkontakte.login');
//Route::get('/enter-vk/callback', [SocialiteController::class, 'redirectToVkProvider'])->name('vkontakte.login');
//Route::get('/login/vkontakte/callback', [SocialiteController::class, 'handleVkCallback']);
//Route::get('/enter-vk/callback', [SocialiteController::class, 'handleVkCallback']);


Route::get('/enter-vk/enter', [ AuthController::class, 'vkEnter' ] )->name('vk_enter');
Route::get('/enter-vk/callback', [ AuthController::class, 'vkCallback' ] );

Route::get('/logout', [\App\Livewire\Actions\Logout::class, '__invoke'])
    ->name('logout')
//    ->middleware('auth')
;

require __DIR__ . '/auth.php';

require __DIR__ . '/web.auto_didrive.php';
