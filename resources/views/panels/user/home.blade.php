@extends('layouts.main')

@section('head')

@stop

@section('content')

    <h2>Ordinary User Panel Home Page</h2>

@if(!Auth::check())

       selamat datang {{Auth::user()->first_name}}
       <img src="{{Auth::user()->profile_picture}}">
@endif


@if (!Auth::user()->subscribed == 0)
 <p style="color: #3e4095">BOLEH LIAT</p>
 Konten super rahasia

<iframe width="560" height="315" src="https://www.youtube.com/embed/PLLQK9la6Go" frameborder="0" allowfullscreen></iframe>


@else
<p>gak boleh liat VIDEO</p>
@endif



@stop
