@extends('layouts.main')

@section('head')

@stop

@section('content')

@if(!Auth::check())
 
       selamat datang {{Auth::user()->first_name}}
       <img src="{{Auth::user()->profile_picture}}">
@endif


@if (!Auth::user()->subscribed == 1)
 Konten super rahasia

@elseif ($user->email == 'eduterrajogja@gmail.com')
	@foreach ($kupons as $kupon)
		{{ $kupon->kode }} <br>
	@endforeach
	<a href="/admin/kupon/buat">buat kupon</a>
	
@else
<p>gak boleh lia</p>
	<form action="kupon/subscribe" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="kode">
		<input type="submit">
	</form>

@endif

@stop