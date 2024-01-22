@extends('didrive.layouts.app')

@section('content')
{{--    @guest--}}
{{--        гость--}}
{{--   @endguest--}}
{{--111--}}
    @auth
        <livewire:didrive.shop.v1.order/>
    @endauth

@endsection



