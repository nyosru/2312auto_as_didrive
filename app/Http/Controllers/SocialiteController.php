<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class SocialiteController extends Controller
{
    public function redirectToVkProvider()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function handleVkCallback(Request $request)
    {
        $user = Socialite::driver('vkontakte')->user();

        // Далее обрабатываем данные пользователя

        return redirect()->to('/');
//        return redirect()->route('home');
    }
}
