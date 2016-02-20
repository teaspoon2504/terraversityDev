@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="/assets/css/konten/fullpage.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="/assets/css/konten/fisikabab.css" media="screen" title="no title" charset="utf-8">
@stop

@section('content')
<div id="wrapper">

        <!-- Sidebar Left-->
        <div id="sidebar-wrapper" class="fixed-position">
            <div class="button-tahun button-wrapper">
                <a href="#" class=""><i class="fa fa-youtube-play"></i></a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    FISIKA
                </li>
                <li>
                    <a href="#pendahuluan">Pendahuluan</a>
                </li>
                <li><a href="#dinamikageraklurus">Dinamika Gerak Lurus</a></li>
                <li><a href="#dinamikarotasi">Dinamika Rotasi</a></li>
                <li><a href="#fisikamodern">Fisika Modern</a></li>
                <li><a href="#fluida">Fluida</a></li>
                <li><a href="#getarangelombangbunyi">Getaran,Gelombang dan Bunyi</a></li>
                <li><a href="#induksimagnetikdanarusteganganbolakbalik">Induksi Magnetik Dan Arus Tegangan Bolak-Balik</a></li>
                <li><a href="#kinematikageraklurus">Kinematika Gerak Lurus</a></li>
                <li><a href="#listrik">Listrik</a></li>
                <li><a href="#momentumdanimpuls">Momentum Dan Impuls</a></li>
                <li><a href="#optik">Optik</a></li>
                <li><a href="#suhudankalor">Suhu Dan Kalor</a></li>
                <li><a href="#usahadanenergi">Usaha Dan Energi</a></li>


            </ul>
        </div>
        <section class="full-page-coba" id="pendahuluan">
        <div id="page-content-wrapper konten-nav">
            <div class="container-fluid">

              <div class="row">
                  <div class="col-md-12">
                    <br>
                    <br>
                      <h3 class="text-center">Pendahuluan</h3>
                      <iframe class="video-materi center-block" width="560" height="315" src="https://www.youtube.com/embed/QSiNWEsZGRI" frameborder="0" allowfullscreen></iframe>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="bab">

                          <div class="isi-bab text-center">
                          <hr>
                              <a class="tombolbab" href="#">bab 1</a>
                              <a class="tombolbab" href="#">bab 1</a>
                              <a class="tombolbab" href="#">bab 1</a>
                              <a class="tombolbab" href="#">bab 1</a>
                          </div>
                      </div>
                  </div>
              </div>

            </div>
        </div>
        </section>

</div>
@section('footer')
  <script type="text/javascript" src="/assets/js/konten/fullpage.js"></script>
@stop

    @stop
