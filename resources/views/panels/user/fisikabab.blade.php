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
                <li id="thn2000">
                    <a href="#pendahuluan">tahun 2000</a>
                </li>
                <li id="thn2001">
                    <a href="#">tahun 2001</a>
                </li>
                <?php
                for ($i=0; $i < 100; $i++) {
                ?>
                <li id="thn2002">
                    <a href="#">tahun 2002</a>
                </li>
                <?php
                 } ?>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <section class="full-page-coba">
            <div class="row">
                <div class="col-md-8">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/QSiNWEsZGRI" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <div class="bab">
                        
                        <div class="isi-bab">
                        <h3 class="text-center">BAB</h3>
                        <hr>
                            <p><a class="fisika" href="#">bab 1</a></p>
                            <p><a class="fisika" href="#">bab 1</a></p>
                            <p><a class="fisika" href="#">bab 1</a></p>
                            <p><a class="fisika" href="#">bab 1</a></p>
                        </div>
                    </div>
                </div>
            </div> 
            
        </section>

        <section id="pendahuluan">
        <div id="page-content-wrapper" >
            <div class="container-fluid">

                      <!-- <section id="">
                        <div class="box full-page">
                            <div class="box-header">Pendahuluan</div>
                            <div class="box-body">
                              <div class="cus-center">
                                
                              </div>
                            </div>
                            <div class="box-footer"></div>
                        </div>
                      </section>-->
                      

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
        </div>
        <!-- /#page-content-wrapper -->
        </section>



</div>
@section('footer')
  <script type="text/javascript" src="/assets/js/konten/fullpage.js"></script>
@stop

    @stop
