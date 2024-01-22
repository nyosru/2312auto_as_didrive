<span style="float:right;" class="mr-5 pt-5">
    @auth
        @if (Route::has('logout'))

            {{ Auth::user()->name }}
            <img src="{{ Auth::user()->avatar }}" style="max-width: 75px;"/>
            <A href="{{ route('logout') }}">выйти</A>

        @endif
    @endauth

    @guest
{{--        @if (Route::has('login'))--}}
{{--            <A href="{{ route('login') }}">войти</A>--}}
{{--        @endif--}}

        {{--    <a href="{{ $enter_link }}">войти в вк</a>--}}
            @if (Route::has('vk_enter'))
        <a href="{{ route('vk_enter') }}">войти в вк</a>
            @endif
    @endguest
        </span>

<a href="/" class="p-3 m-0 block text-center"><h1 style="font-size: 3rem;">
        <img src="/phpcat/cat.png" style="display:inline-block; max-height: 5rem;"/>
        аренда сервис</h1></a>

{{--<a href="{{ route('login.vkontakte') }}">Войти через ВКонтакте</a>--}}

