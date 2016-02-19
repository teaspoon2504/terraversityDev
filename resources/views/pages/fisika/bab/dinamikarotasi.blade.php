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


        <section class="full-page-coba" id="dinamikarotasi">
        <div id="page-content-wrapper">
            <div class="container-fluid">

              <div class="row">
                  <div class="col-md-12">
                    <br>
                    <br>
                      <h3 class="text-center">dinamikarotasi</h3>
                      <div  id="dinamikarotasibab1">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/wq28CC448Xg" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab2">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/b5SCOTZ52JU" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab3">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/BjMalgw5Xfg" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab4">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/W-CmzO1Pib8" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab5">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/sOVFcsYauAg" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab6">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/udmNF77MpQM" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab7">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/_4EFu49V-A0" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab8">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/r4AZJtFbEoo" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab9">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/AgELhVO881o" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab10">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/dbW8nA-yzRc" frameborder="0" allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="bab">

                          <div class="isi-bab text-center">
                          <hr>
                          <a id="dinamikarotasitombolbab1" href="#">bab 1</a>
                          <a id="dinamikarotasitombolbab2" href="#">bab 2</a>
                          <a id="dinamikarotasitombolbab3" href="#">bab 3</a>
                          <a id="dinamikarotasitombolbab4" href="#">bab 4</a>
                          <a id="dinamikarotasitombolbab5" href="#">bab 5</a>
                          <a id="dinamikarotasitombolbab6" href="#">bab 6</a>
                          <a id="dinamikarotasitombolbab7" href="#">bab 7</a>
                          <a id="dinamikarotasitombolbab8" href="#">bab 8</a>
                          <a id="dinamikarotasitombolbab9" href="#">bab 9</a>
                          <a id="dinamikarotasitombolbab10" href="#">bab 10</a>
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
