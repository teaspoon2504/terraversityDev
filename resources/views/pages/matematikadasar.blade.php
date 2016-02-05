@extends('layouts.main')

@section('content')
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="fixed-position">
            <div class="button-tahun button-wrapper">
                <a href="#" class=""><i class="fa fa-youtube-play"></i></a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    Matematika
                </li>
                <li id="thn2000" id="2000-section">
                    <a href="">tahun 2000</a>
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

        <!-- Sidebar right-->
        <div id="sidebar-wrapper-right" class="fixed-position">
            <div class="button-tahun button-wrapper-right">
                <a href="#" class=""><i class="fa fa-youtube-play"></i></a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    Tahun Matematika
                </li>
                <li id="thn2000" id="2000-section">
                    <a href="">tahun 2000</a>
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
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row" id="konten2000">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">Now</div>
                            <div class="box-body">
                                <iframe width="560" height="315" frameborder="1" src="#" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                      

                    </div>
                    <!-- <div class="col-lg-4">
                        <div class="box">
                            <div class="box-header">Pelajaran Terkait</div>
                            <div class="box-body">
                                <iframe src="" frameborder="1"></iframe>
                                <iframe src="" frameborder="1"></iframe>
                                <iframe src="" frameborder="1"></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                    </div> -->
                </div>
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

        

</div>
    <!-- /#wrapper -->
    @stop
