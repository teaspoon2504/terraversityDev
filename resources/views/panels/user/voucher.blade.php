@extends('layouts.main')

@section('head')

@stop

@section('content')

  <div class="container text-center center-block">

    @if (!Auth::user()->subscribed == 0)
     Terimakasih Anda Telah Menjadi Member Premium

     Untuk melihat materi <a href="/user/materi">disini </a>

    @else
    <div class="row">
      <div class="col-md-6">
        <h1>Masukan Kode Voucher</h1>
        <br><br>
        <form action="kupon/subscribe" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
          <div class="form-group">
            <input type="text" class="form-control" name="kode">
          </div>
          <div class="form-group">
            <input type="submit" value="input voucher" class="btn btn-primary"> 
          </div>
             
          
          
        </form>
      </div>
      <div class="col-md-6">
          <h1>Cara Beli Voucher</h1>
          <div class="cara-beli">
            <div class="number-voucher bg-primary">1</div>
            <div class="content-voucher">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
          </div>
          <div class="cara-beli">
            <div class="number-voucher bg-primary">2</div>
            <div class="content-voucher">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
          </div>
          <div class="cara-beli">
            <div class="number-voucher bg-primary">3</div>
            <div class="content-voucher">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            </div>
          </div>
          <div class="cara-beli">
            <div class="number-voucher bg-primary">4</div>
            <div class="content-voucher">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            </div>
          </div>
          

      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        
        <h1 class="text-center">Beli DVD</h1>
        <hr/>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <a href="#">
          <img src="{!!asset('assets/images/content/logo_bukalapak.png')!!}" class="hover-grayscale img-responsive center-block">  
        </a>
        
      </div>
      <div class="col-md-6">
        <a href="#">
          <img src="{!!asset('assets/images/content/logo_tokopedia.png')!!}" class="hover-grayscale img-responsive center-block">  
        </a>
        
      </div>
    </div>
    
    @endif

  </div>


@stop
