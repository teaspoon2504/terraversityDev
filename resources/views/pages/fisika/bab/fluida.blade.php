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

                <section class="full-page-coba" id="fluida">
                <div id="page-content-wrapper">
                  <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                          <br>
                          <br>
                            <h3 class="text-center">fluida</h3>

                            <div  id="fluidabab1">
                              <iframe width="420" height="315" src="https://www.youtube.com/embed/drj-P9TqE_g" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div  id="fluidabab2">
                              <iframe width="420" height="315" src="https://www.youtube.com/embed/8LBmsTc4DGs" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div  id="fluidabab3">
                              <iframe width="420" height="315" src="https://www.youtube.com/embed/5AvIWPF-gkU" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div  id="fluidabab4">
                              <iframe width="420" height="315" src="https://www.youtube.com/embed/v1unDUbckL0" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div  id="fluidabab5">
                              <iframe width="420" height="315" src="https://www.youtube.com/embed/dhmIFbx_xis" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div  id="fluidabab6">
                              <iframe width="420" height="315" src="https://www.youtube.com/embed/yU7lRWuPq1Y" frameborder="0" allowfullscreen></iframe>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bab">

                                <div class="isi-bab text-center">
                                <hr>
                                <a id="fluidatombolbab1" href="#">bab 1</a>
                                <a id="fluidatombolbab2" href="#">bab 2</a>
                                <a id="fluidatombolbab3" href="#">bab 3</a>
                                <a id="fluidatombolbab4" href="#">bab 4</a>
                                <a id="fluidatombolbab5" href="#">bab 5</a>
                                <a id="fluidatombolbab6" href="#">bab 6</a>

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
