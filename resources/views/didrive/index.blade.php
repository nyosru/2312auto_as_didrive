@extends('didrive.layouts.app')

@section('content')
{{--    @guest--}}
{{--        гость--}}
{{--   @endguest--}}
{{--111--}}
{{--status_show: {{$status_show}}--}}
    @auth
        <livewire:didrive.shop.v1.order :status_show="$status_show"/>
    @endauth

@endsection



