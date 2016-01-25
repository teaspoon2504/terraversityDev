@extends('layouts.main')

@section('head')

@stop

@section('content')

  <div class="container text-center center-block">

    @if (!Auth::user()->subscribed == 0)
     Terimakasih Anda Telah Menjadi Member Premium

     Untuk melihat materi <a href="/user/materi">disini </a>

    @else
    <p>Masukan Kode Voucher</p>
    	<form action="kupon/subscribe" method="POST">
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
    		<input type="text" name="kode">
    		<input type="submit" value="masuk">
    	</form>
    @endif

  </div>


@stop
