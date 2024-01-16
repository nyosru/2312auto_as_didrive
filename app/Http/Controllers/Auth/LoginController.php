<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
use Exception;

class LoginController extends Controller
{
    public function redirectToVkontakte()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function handleVkontakteCallback()
    {
        try {
            $user = Socialite::driver('vkontakte')->user();
        } catch (Exception $e) {
            return redirect('/login')->withErrors('Ошибка аутентификации: ' . $e->getMessage());
        }

        // Здесь вы можете использовать данные пользователя $user для входа в систему

        return redirect('/home'); // Редирект после успешного входа
    }
}
