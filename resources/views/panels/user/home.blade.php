@extends('layouts.main')

@section('head')

@stop

@section('content')

    <h2>Ordinary User Panel Home Page</h2>

<div>
 @if(!Auth::check())
        selamat datang
      @else 
 
       selamat datang {{Auth::user()->first_name}}
      @endif
</div>

@stop