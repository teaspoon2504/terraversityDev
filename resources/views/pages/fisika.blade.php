@extends('layouts.main')

@section('content')
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
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
                <li id="thn2002">
                    <a href="#">tahun 2002</a>
                </li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row" id="konten2000">
                    <div class="col-lg-12">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/QSiNWEsZGRI" frameborder="0" allowfullscreen></iframe>

                    </div>
                </div>
                <div class="row" id="konten2001">
                    <div class="col-lg-12">
                                <h2>Silahkan <a href="{{ route('auth.login') }}">Log In</a> untuk melihat Video Tutorial ini</h2>
                    </div>
                </div>
                <div class="row" id="konten2002">
                    <div class="col-lg-12" style="margin: 50px 0 0 75px">
                      <iframe width="560" height="355" src="https://www.youtube.com/embed/7iX8p_a-eFA" frameborder="0" allowfullscreen></iframe>

                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    @stop
