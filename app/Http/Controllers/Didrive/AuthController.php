<?php

namespace App\Http\Controllers\Didrive;

use App\Http\Controllers\Controller;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use mysql_xdevapi\Exception;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public static $token = '';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public static function vkEnter()
    {
        return Redirect::to(self::createLinkEnter());
    }

    public static function enterUser(array $data, array $userData): RedirectResponse
    {

//        dd([$data , $userData]);
//        return Redirect::to(self::createLinkEnter());

//        if (!$user) {
        // Если пользователя нет, создайте нового
        $user = User::updateOrCreate(
            ['email' => $data['user_id'] . '.vk@php-cat.com'],
            [
                'name' => $userData['first_name'] . ' ' . $userData['last_name'],
                'avatar' => $userData['photo_200'],
                'opis' => json_encode($userData),
                'password' => 11
            ]);
//        }

        // Авторизация пользователя
        Auth::login($user);
//dd( $user);
//        return Redirect::to('/');
        return Redirect::to('/di');
    }

    public static function vkCallback(Request $request)
    {

        $qq = [];
//    client_id (обязательный) — идентификатор вашего приложения.
        $qq['client_id'] = env('VKONTAKTE_CLIENT_ID');
//    client_secret (обязательный) — защищенный ключ вашего приложения (указан в настройках приложения).
        $qq['client_secret'] = env('VKONTAKTE_CLIENT_SECRET');
//    redirect_uri (обязательный) — URL, который использовался при получении code на первом этапе авторизации. Должен быть аналогичен переданному при авторизации.
        $qq['redirect_uri'] = env('VKONTAKTE_REDIRECT_URI');
//    code (обязательный) — временный код, полученный после прохождения авторизации.
        $qq['code'] = $request->code ?? '';
//
//        Пример запроса:
//https://oauth.vk.com/access_token?client_id=1&client_secret=H2Pk8htyFD8024mZaPHm&redirect_uri=http://mysite.ru&code=7a6fa4dff77a228eeda56603b8f53806c883f011c40b72630bb50df056f6479e52a
////
//

//        $e = file_get_contents('https://oauth.vk.com/access_token?' . http_build_query($qq));
        $uri = 'https://oauth.vk.com/access_token?' . http_build_query($qq);


        $client = new Client();

        // Замените URL назначения на тот, на который вы хотите отправить GET-запрос
        $url = $uri;

        try {
            $response = $client->request('GET', $url);

            // Получение тела ответа
            $body = $response->getBody()->getContents();

            // Обработка полученных данных
            // ...

//            dd(json_decode($body));
            $res1 = json_decode($body);
//            dd($body);

            AuthController::$token = $res1->access_token;
            $user = AuthController::getUserInfo();
//            $user = $e
//            dd([$user, $res1]);
//            return [$res1, $user];

            return self::enterUser((array)$res1, $user);

            // Возвращение ответа или дальнейшая обработка
//            return $body;
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Обработка ошибок
            return $e->getMessage();
        }

//        dd($e);

    }

    public static function showForm()
    {
        $in = [];
        $in['enter_link'] = self::createLinkEnter();

        return view('didrive.enter', $in);
    }

    /**
     * Show the form for creating a new resource.
     */
    public static function createLinkEnter()
    {

//    client_id (обязательный) — идентификатор вашего приложения.
//    redirect_uri (обязательный) — адрес, на который будет передан code (домен указанного адреса должен соответствовать основному домену в настройках приложения и перечисленным значениям в списке доверенных redirect uri, адреса сравниваются вплоть до path-части).
//    display — указывает тип отображения страницы авторизации. Поддерживаются следующие варианты:
//        page — форма авторизации в отдельном окне;
//        popup — всплывающее окно;
//        mobile — авторизация для мобильных устройств (без использования Javascript) Если пользователь авторизуется с мобильного устройства, будет использован тип mobile.
//    scope – битовая маска настроек доступа приложения, которые необходимо проверить при авторизации пользователя и запросить отсутствующие.
//    response_type — тип ответа, который вы хотите получить (укажите code).
//    state — произвольная строка, которая будет возвращена вместе с результатом авторизации.

        $q = [
//    client_id (обязательный) — идентификатор вашего приложения.
            'client_id' => env('VKONTAKTE_CLIENT_ID'),
//    redirect_uri (обязательный) — адрес, на который будет передан code (домен указанного адреса должен соответствовать основному домену в настройках приложения и перечисленным значениям в списке доверенных redirect uri, адреса сравниваются вплоть до path-части).
            'redirect_uri' => env('VKONTAKTE_REDIRECT_URI'),
//    display — указывает тип отображения страницы авторизации. Поддерживаются следующие варианты:
//        page — форма авторизации в отдельном окне;
//        popup — всплывающее окно;
//        mobile — авторизация для мобильных устройств (без использования Javascript) Если пользователь авторизуется с мобильного устройства, будет использован тип mobile.
            'display' => 'page',
//    scope – битовая маска настроек доступа приложения, которые необходимо проверить при авторизации пользователя и запросить отсутствующие.
//            'scope' => '0,2,1,22,28',
            'scope' => 'email,notify',
//    response_type — тип ответа, который вы хотите получить (укажите code).
            'response_type' => 'code',
//    state — произвольная строка, которая будет возвращена вместе с результатом авторизации.
            'state' => 'yahho!' . rand(1, 99)
        ];

//        https://oauth.vk.com/authorize?client_id=1&display=page&redirect_uri=http://example.com/callback&scope=friends&response_type=code&v=5.131

        return 'https://oauth.vk.com/authorize?' . http_build_query($q);

    }


    public static function getUserInfo($fields = 'city,photo_200,bdate,about')
    {

        $client = new Client();

        // Замените URL назначения на тот, на который вы хотите отправить GET-запрос
        $url = 'https://api.vk.com/method/account.getProfileInfo?' . http_build_query(['access_token' => self::$token, 'v' => '5.199']);

        try {
            $response = $client->request('GET', $url);

            // Получение тела ответа
            $body = $response->getBody()->getContents();

            // Обработка полученных данных
            // ...

//            dd(json_decode($body));
            $res = json_decode($body, true)['response'];
            if (!empty($res))
                return $res;

            // Возвращение ответа или дальнейшая обработка
//            return $body;

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Обработка ошибок
            return $e->getMessage();
        }

        return false;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
