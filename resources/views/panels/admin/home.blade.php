@extends('layouts.main')

@section('head')

@stop

@section('content')

<h2>Admin Panel Home Page</h2>

@if(!Auth::check())
selamat datang {{Auth::user()->first_name}}
<img src="{{Auth::user()->profile_picture}}">
@endif


@if (Auth::user()->email == 'eduterrajogja@terraversity.com')
  <div class="col-md-6">
    <h3>Kupon Butuh Persetujuan</h3>
    <table class="col-md-12">
      <thead>
        <tr>
          <td>No.</td>
          <td>Pengguna</td>
          <td>Kode</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($pending_kupons as $key => $kupon)
        <tr>
          <td>
            {{ $key + 1 }}
          </td>
          <td>
            {{ $kupon->user->first_name . ' ' . $kupon->user->last_name }} <br>
          </td>
          <td>
            {{ $kupon->kode }} <br>
          </td>
          <td>
            <a href="/admin/kupon/approve/{{ $kupon->kode }}" class="btn btn-primary">Setujui</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="col-md-6">
    <h3>Kupon Telah Disetujui</h3>
    <table class="col-md-12">
      <thead>
        <tr>
          <td>No.</td>
          <td>Pengguna</td>
          <td>Kode</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($approved_kupons as $key => $kupon)
        <tr>
          <td>
            {{ $key + 1 }}
          </td>
          <td>
            {{ $kupon->user->first_name . ' ' . $kupon->user->last_name }} <br>
          </td>
          <td>
            {{ $kupon->kode }} <br>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@else
  <p>gak boleh lia</p>
  <form action="kupon/subscribe" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="kode">
    <input type="submit">
  </form>
@endif
@stop
