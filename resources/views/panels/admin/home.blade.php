@extends('layouts.main')

@section('head')

@stop

@section('content')

<h2>Admin Panel Home Page</h2>

<div>
 @if(Auth::user()->subscribed == 1)
       subscribed == 1
              <img src="{{Auth::user()->profile_picture}}">

              @foreach ($kupons as $kupon)
				{{ $kupon->kode }} <br>
			@endforeach
			<a href="/admin/kupon/buat">buat kupon</a>

      @elseif (Auth::user()->email == 'eduterrajogja@gmail.com')
 
        	eduterrajogja
       
       @else 


        selamat datang {{Auth::user()->first_name}}
      @endif
</div>

@stop