@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')

{{--@section('message', __($exception->getMessage() ?: 'Forbidden'))--}}
@section('message')
    не имеете прав доступа
{{--<a href="" >выйти из аккаунта ?</a>--}}
@endsection
