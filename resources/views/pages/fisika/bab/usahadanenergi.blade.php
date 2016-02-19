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

                <section class="full-page-coba" id="usahadanenergi">
                <div id="page-content-wrapper">
                  <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                          <br>
                          <br>
                            <h3 class="text-center">usahadanenergi</h3>
                            <h2>Silahkan <a href="{{ route('auth.login') }}">Log In</a> untuk melihat Video Tutorial ini</h2>
                            <div  id="usahadanenergibab1">
                              <iframe width="420" height="315" src="https://www.youtube.com/embed/e-_LQhyiiI8" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div  id="usahadanenergibab2">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/4JK4BXfnC5c" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div  id="usahadanenergibab3">
                              <iframe width="420" height="315" src="https://www.youtube.com/embed/5AvIWPF-gkU" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div  id="usahadanenergibab4">
                              <iframe width="420" height="315" src="https://www.youtube.com/embed/xGJ5yOltLBg" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div  id="usahadanenergibab5">
                              <iframe width="420" height="315" src="https://www.youtube.com/embed/JM5bpzAtB5c" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div  id="usahadanenergibab6">
                              <iframe width="420" height="315" src="https://www.youtube.com/embed/DAha3_7CXA4" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bab">

                                <div class="isi-bab text-center">
                                <hr>
                                <a id="usahadanenergitombolbab1" href="#">bab 1</a>
                                <a id="usahadanenergitombolbab2" href="#">bab 2</a>
                                <a id="usahadanenergitombolbab3" href="#">bab 3</a>
                                <a id="usahadanenergitombolbab4" href="#">bab 4</a>
                                <a id="usahadanenergitombolbab5" href="#">bab 5</a>
                                <a id="usahadanenergitombolbab6" href="#">bab 6</a>

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
