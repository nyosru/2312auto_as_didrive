@extends('didrive.layouts.app')

@section('content')

    @guest
        {{--       вход вход--}}
        {{--       <livewire:forms.login-form/>--}}
        {{--       <div class="w-[450px] mx-auto">--}}
        {{--        @include('livewire.pages.auth.login')--}}
        {{--       </div>--}}
    @endguest
    {{--7777enter--}}
    @auth
        {{--        <livewire:didrive.shop.v1.order/>--}}
        @if (Route::has('autoas.didrive.index'))
            <center>
                <br/>
                <br/>
                <br/>
            <A href="{{ route('autoas.didrive.index') }}" >перейти к самому самому</A>
            </center>
        @endif
    @endauth

@endsection



