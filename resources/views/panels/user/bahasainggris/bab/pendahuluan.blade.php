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

        <section class="full-page-coba" id="dinamikageraklurus">
        <div id="page-content-wrapper">
            <div class="container-fluid">

              <div class="row">
                  <div class="col-md-12">
                    <br>
                    <br>
                      <h3 class="text-center">dinamikageraklurus</h3>
                      <div  id="dinamikageraklurusbab1">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/VMFGXVoSpBs" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab2">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/PfSYbNkDfjs" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab3">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/KBX6eKiY4ro" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab4">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/R5sHLj7gSf4" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab5">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/L4M8sYdmLXg" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab6">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/bssHbdzUTnI" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab7">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/DAha3_7CXA4" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab8">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/lWzWbGd0KrU" frameborder="0" allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="bab">

                          <div class="isi-bab text-center">
                          <hr>
                              <a id="dinamikageraklurustombolbab1" href="#">bab 1</a>
                              <a id="dinamikageraklurustombolbab2" href="#">bab 2</a>
                              <a id="dinamikageraklurustombolbab3" href="#">bab 3</a>
                              <a id="dinamikageraklurustombolbab4" href="#">bab 4</a>
                              <a id="dinamikageraklurustombolbab5" href="#">bab 5</a>
                              <a id="dinamikageraklurustombolbab6" href="#">bab 6</a>
                              <a id="dinamikageraklurustombolbab7" href="#">bab 7</a>
                              <a id="dinamikageraklurustombolbab8" href="#">bab 8</a>

                          </div>
                      </div>
                  </div>
              </div>

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
