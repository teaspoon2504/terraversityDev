
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

    {!! HTML::style('/assets/css/custom.css') !!}
    {!! HTML::style('/assets/css/drop.css') !!}
    {!! HTML::style('/assets/css/konten.css') !!}
    {!! HTML::style('/assets/css/simple-sidebar.css') !!}
    {!! HTML::style('/assets/css/navbar-static-top.css') !!}
    {!! HTML::style('/assets/css/font-awesome.min.css') !!}
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') !!}
    {!! HTML::style('/assets/plugins/bootstrap/css/bootstrap.min.css') !!}


    @yield('head')

</head>

<body>


<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container navmenutop">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('public.home')  }}"><span class="terra">Terraversity</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            @if(!Auth::check())
                <li><a href="{{ route('public.home')  }}"><span class="terra" >Home</span></a></li>

                <li class="dropdown mega-dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" ><span class="terra">SBMPTN </span><span class="caret"></span></a>
                      <ul class="dropdown-menu mega-dropdown-menu">
                        <div class="megamenunav">

                                    <li class="col-sm-3 col-md-4">
                                       <ul>
                                        <li><a href="" id="matematikaDasar"> Matematika Dasar</a></li>
                                        <li><a href="" id="matematikaIpa"> Matematika IPA</a></li>
                                        <li><a href="" id="fisika">Fisika</a></li>
                                        <li><a href="" id="kimia">Kimia</a></li>
                                        <li><a href="" id="biologi">Biologi</a></li>
                                        <li><a href="" id="inggris">Bahasa Inggris</a></li>
                                        <li><a href="" id="indo">Bahasa Indonesia</a></li>
                                        <li><a href="" id="tpa">TPA</a></li>
                                        <li class="divider"></li>
                                        </ul>
                                    </li>

                                    <li class="col-sm-3 col-md-4">
                                        <ul class="tahunmatematikaDasar" >
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="{{ route('public.matematikadasar') }}">matematika tahun 2000</a></li>
                                          <li><a href="{{ route('public.matematikadasar') }}">tahun 2001</a></li>
                                          <li><a href="{{ route('public.matematikadasar') }}">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahunmatematikaIpa" >
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="{{ route('public.matematikaipa') }}">matematika tahun 2000</a></li>
                                          <li><a href="{{ route('public.matematikaipa') }}">tahun 2001</a></li>
                                          <li><a href="{{ route('public.matematikaipa') }}">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahunfisika" >
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">ipa tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahunkimia" >
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">ipa tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahunbiologi" >
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">ipa tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahuninggris">
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">english tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahunindo">
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">indonesia tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahuntpa">
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">indonesia tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                    </li>

                                    <li class="col-sm-3 col-md-4">

                                              <ul class="tahunmatematikaDasar" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.matematikadasar') }}">matematika Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahunmatematikaIpa" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.matematikaipa') }}">matematika Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahunfisika" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">ipa Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahunkimia" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">ipa Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahunbiologi" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">ipa Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahuninggris">
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">english Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahunindo">
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">indonesia Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahuntpa">
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">indonesia Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </li>
                            </div>
                        </ul>
                    </li>
            @elseif(Auth::user()->email == 'eduterrajogja@terraversity.com')
                <li><a href="{{ route('public.home')  }}"  >Home</a></li>
                <li><a href="/admin/home"  >Admin Area</a></li>
            @else
                <li><a   href="{{ route('public.home')  }}" >Home</a></li>
                <li class="dropdown mega-dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"  >SBMPTN <span class="caret"></span></a>
                      <ul class="dropdown-menu mega-dropdown-menu">
                        <div class="container megamenunav">

                                    <li class="col-sm-3 col-md-4">
                                       <ul>
                                        <li><a href="" id="matematikaDasar"> Matematika Dasar</a></li>
                                        <li><a href="" id="matematikaIpa"> Matematika IPA</a></li>
                                        <li><a href="" id="fisika">Fisika</a></li>
                                        <li><a href="" id="kimia">Kimia</a></li>
                                        <li><a href="" id="biologi">Biologi</a></li>
                                        <li><a href="" id="inggris">Bahasa Inggris</a></li>
                                        <li><a href="" id="indo">Bahasa Indonesia</a></li>
                                        <li><a href="" id="tpa">TPA</a></li>
                                        <li class="divider"></li>
                                        </ul>
                                    </li>

                                    <li class="col-sm-3 col-md-4">
                                        <ul class="tahunmatematikaDasar" >
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="{{ route('public.materi') }}">matematika tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahunmatematikaIpa" >
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="{{ route('public.materi') }}">matematika tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahunfisika" >
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">ipa tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahunkimia" >
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">ipa tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahunbiologi" >
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">ipa tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahuninggris">
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">english tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahunindo">
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">indonesia tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                        <ul class="tahuntpa">
                                          <li >Berdasarkan Tahun</li>
                                          <li class="divider"></li>
                                          <li><a href="#">indonesia tahun 2000</a></li>
                                          <li><a href="#">tahun 2001</a></li>
                                          <li><a href="#">tahun 2002</a></li>
                                        </ul>
                                    </li>

                                    <li class="col-sm-3 col-md-4">

                                              <ul class="tahunmatematikaDasar" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.materi') }}">matematika Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahunmatematikaIpa" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.materi') }}">matematika Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahunfisika" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">ipa Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahunkimia" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">ipa Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahunbiologi" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">ipa Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahuninggris">
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">english Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahunindo">
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">indonesia Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              <ul class="tahuntpa">
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">indonesia Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </li>
                            </div>
                        </ul>
                    </li>

            @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(!Auth::check())
                  <li><a href="{{ route('auth.login') }}"  >Voucher &nbsp;<span class="label label-warning" style="font-size: 9px">Promo</span></a></li>
                <li><a   href="{{ route('auth.login') }}">Masuk</a></li>
                <li><a   href="{{ route('auth.register') }}">Daftar</a></li>
                @else
                  <li><a   href="/user/voucher">Voucher</a></li>
                <li><img src="{{Auth::user()->profile_picture}}" class="tetap"></li>
                <li><a   href="#">{{ Auth::user()->first_name }}</a></li>
                <li><a   href="{{ route('authenticated.logout') }}">Logout</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="pluz">

    @yield('content')

</div>



{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js') !!}
{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js') !!}
{!! HTML::script('/assets/plugins/bootstrap/js/bootstrap.min.js') !!}
{!! HTML::script('/assets/js/sidebar_menu.js') !!}
{!! HTML::script('/assets/js/skrip.js') !!}
{!! HTML::script('/assets/js/drop.js') !!}

{!! HTML::script('/assets/js/ie10-viewport-bug-workaround.js') !!}

@yield('footer')

</body>
</html>
