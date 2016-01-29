@extends('layouts.main')

@section('head')

@stop

@section('content')

<h2>Admin Panel Home Page</h2>

@if(!Auth::check())
       selamat datang {{Auth::user()->first_name}}
       <img src="{{Auth::user()->profile_picture}}">
@endif

@section('footer')


@stop
