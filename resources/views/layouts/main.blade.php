
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Laravel Social and Email Authentication</title>

    <!-- Bootstrap core CSS -->
    {!! HTML::style('/assets/plugins/bootstrap/css/bootstrap.min.css') !!}

    <!-- Custom styles for this template -->
    {!! HTML::style('/assets/css/navbar-static-top.css') !!}
    {!! HTML::style('/assets/css/custom.css') !!}
    {!! HTML::style('/assets/css/simple_sidebar.css') !!}
    {!! HTML::style('/assets/css/font-awesome.min.css') !!}
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') !!}

    @yield('head')

</head>

<body>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container navmenutop">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('public.home')  }}" style="color: #3e4095">Terraversity</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            @if(!Auth::check())
                <li><a href="{{ route('public.home')  }}">Home</a></li>
                <li><a href="{{ route('public.materi') }}">Materi</a></li>

                  <li class="dropdown mega-dropdown">
                      <a href="" class="dropdown-toggle" data-toggle="dropdown">Men <span class="caret"></span></a>

                      <ul class="dropdown-menu mega-dropdown-menu">
                        <div class="container megamenunav">

                                    <li class="col-sm-3 col-md-4">
                                       <ul>
                                        <li class="dropdown-header">Men Collection</li>
                                        <li><a href="" id="matematika"> matapelajaran</a></li>
                                        <li><a href="" id="ipa"> matapelajaran</a></li>
                                        <li><a href="" id="inggris"> matapelajaran</a></li>
                                        <li><a href="" id="indo"> matapelajaran</a></li>
                                        <li class="divider"></li>
                                        </ul>
                                    </li>

<!-- pertahun -->
                                    <li class="col-sm-3 col-md-4">
                                        <ul class="tahunmtk" >
                                          <li class="dropdown-header">Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">matematika tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahunipa" >
                                          <li class="dropdown-header">Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">ipa tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahuninggris">
                                          <li class="dropdown-header">Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">english tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahunindo">
                                          <li class="dropdown-header">Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">indonesia tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                    </li>
<!-- perbab -->
                                    <li class="col-sm-3 col-md-4">
                                          <ul class="tahunmtk" >
                                            <li class="dropdown-header">Berdasarkan Bab</li>
                                            <li class="divider"></li>
                                            <li><a href="#">Matematika Bab 1</a></li>
                                            <li><a href="#">Matematika Bab 2</a></li>
                                            <li><a href="#">Matematika Bab 3</a></li>
                                          </ul>
                                          <ul class="tahunipa" >
                                            <li class="dropdown-header">Berdasarkan Bab</li>
                                            <li class="divider"></li>
                                            <li><a href="#">IPA Bab 1</a></li>
                                            <li><a href="#">IPA Bab 2</a></li>
                                            <li><a href="#">IPA Bab 3</a></li>
                                          </ul>
                                          <ul class="tahuninggris">
                                            <li class="dropdown-header">Berdasarkan Bab</li>
                                            <li class="divider"></li>
                                            <li><a href="#">English Bab 1</a></li>
                                            <li><a href="#">English Bab 2</a></li>
                                            <li><a href="#">English Bab 3</a></li>
                                          </ul>
                                          <ul class="tahunindo">
                                            <li class="dropdown-header">Berdasarkan Bab</li>
                                            <li class="divider"></li>
                                            <li><a href="#">Indonesia Bab 1</a></li>
                                            <li><a href="#">Indonesia Bab 2</a></li>
                                            <li><a href="#">Indonesia Bab 3</a></li>
                                          </ul>
                                    </li>
                            </div>
                        </ul>
                    </li>

                <li><a href="{{ route('auth.login') }}">Voucher</a></li>
            @elseif(Auth::user()->email == 'eduterrajogja@terraversity.com')
                <li><a href="{{ route('public.home')  }}">Home</a></li>
                <li><a href="/admin/home">Admin Area</a></li>
            @else
                <li><a href="{{ route('public.home')  }}">Home</a></li>
                <li><a href="/user/materi">Materi</a></li>
                <li><a href="/user/voucher">Voucher</a></li>
            @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(!Auth::check())
                <li><a href="{{ route('auth.login') }}">Masuk</a></li>
                <li><a href="{{ route('auth.register') }}">Daftar</a></li>
                @else
                <li><img src="{{Auth::user()->profile_picture}}" class="tetap"></li>
                <li><a href="#">{{ Auth::user()->first_name }}</a></li>
                <li><a href="{{ route('authenticated.logout') }}">Logout</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<div >

    @yield('content')

</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js') !!}
{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js') !!}
{!! HTML::script('/assets/plugins/bootstrap/js/bootstrap.min.js') !!}
{!! HTML::script('/assets/js/sidebar_menu.js') !!}
{!! HTML::script('/assets/js/skrip.js') !!}
{!! HTML::script('/assets/js/drop.js') !!}
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{!! HTML::script('/assets/js/ie10-viewport-bug-workaround.js') !!}

@yield('footer')

</body>
</html>
