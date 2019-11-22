@extends('layouts.app')

@section('content')
    <register
        route-login="{{route('login')}}"
        route-register="{{route('register')}}"
    ></register>
@endsection
