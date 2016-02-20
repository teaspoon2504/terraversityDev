@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="/assets/css/konten/fullpage.css" media="screen" title="no title" charset="utf-8">
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
                      <h3 class="text-center">Besaran dan Satuan</h3>
                      <div class="bab">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/Y_68DpUqcqU" frameborder="0" allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
              <!-- <div class="row">
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
              </div> -->

            </div>
        </div>
        </section>




        <div class="row" id="konten2001">
            <div class="col-lg-12">
                        <h2>Silahkan <a href="{{ route('auth.login') }}">Log In</a> untuk melihat Video Tutorial ini</h2>
            </div>
        </div>
        <div class="row" id="konten2002">
            <div class="col-lg-12" style="margin: 50px 0 0 75px">
              <iframe width="560" height="355" src="#" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>



</div>
@section('footer')
  <script type="text/javascript" src="/assets/js/konten/fullpage.js"></script>
@stop

    @stop
