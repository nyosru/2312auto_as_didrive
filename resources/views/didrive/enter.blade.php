@extends('didrive.layouts.app')

@section('content')

    @guest
       вход вход
{{--       <livewire:forms.login-form/>--}}
       <div class="w-[450px] mx-auto">
        @include('livewire.pages.auth.login')
       </div>

    @endguest

    @auth
        <livewire:didrive.shop.v1.order/>
    @endauth

@endsection



