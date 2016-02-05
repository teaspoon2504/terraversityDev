
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



<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
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

                                    <li class="col-md-offset-2 col-sm-3 col-md-2">
                                       <ul class="cus-menu">
                                        <li class="cus-sub-menu">
                                        <a class="line-mtk-dasar" href="" id="matematikaDasar" > Matematika Dasar</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-mtk-ipa" href="" id="matematikaIpa"> Matematika IPA</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-fisika" href="" id="fisika">Fisika</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-kimia" href="" id="kimia">Kimia</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-biologi" href="" id="biologi">Biologi</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-inggris" href="" id="inggris">Bahasa Inggris</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-indo" href="" id="indo">Bahasa Indonesia</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-tpa" href="" id="tpa">TPA</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="divider"></li>
                                        </ul>
                                    </li>
                              
                                      <div class="menu-block-right bg-menu-right tahunmatematikaDasar ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahunmatematikaDasar" >
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="{{ route('public.matematikadasar') }}">matematika tahun 2000</a></li>
                                                  <li><a href="{{ route('public.matematikadasar') }}">tahun 2001</a></li>
                                                  <li><a href="{{ route('public.matematikadasar') }}">tahun 2002</a></li>
                                                </ul>
                                                
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahunmatematikaDasar" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.matematikadasarbab') }}">matematika Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahunmatematikaDasar"></div>

                                      <div class="menu-block-right bg-menu-right tahunmatematikaIpa ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                                <ul class="tahunmatematikaIpa" >
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="{{ route('public.matematikaipabab') }}">matematika IPA tahun 2000</a></li>
                                                  <li><a href="{{ route('public.matematikaipabab') }}">tahun 2001</a></li>
                                                  <li><a href="{{ route('public.matematikaipabab') }}">tahun 2002</a></li>
                                                </ul>
                                                
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahunmatematikaIpa" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.matematikaipabab') }}">matematika Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahunmatematikaIpa"></div>

                                      <div class="menu-block-right bg-menu-right tahunfisika ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahunfisika" >
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">ipa tahun 2000</a></li>
                                                  <li><a href="#">tahun 2001</a></li>
                                                  <li><a href="#">tahun 2002</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahunfisika" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.fisikabab') }}">FISIKA Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahunfisika"></div>

                                      <div class="menu-block-right bg-menu-right tahunkimia ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahunkimia" >
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">Kimia tahun 2000</a></li>
                                                  <li><a href="#">tahun 2001</a></li>
                                                  <li><a href="#">tahun 2002</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahunkimia" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">ipa Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahunkimia"></div>

                                      <div class="menu-block-right bg-menu-right tahunbiologi ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahunbiologi" >
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">Biologi tahun 2000</a></li>
                                                  <li><a href="#">tahun 2001</a></li>
                                                  <li><a href="#">tahun 2002</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahunbiologi" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">ipa Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahunbiologi"></div>

                                      <div class="menu-block-right bg-menu-right tahuninggris ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahuninggris">
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">english tahun 2000</a></li>
                                                  <li><a href="#">tahun 2001</a></li>
                                                  <li><a href="#">tahun 2002</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahuninggris">
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">english Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahuninggris"></div>

                                      <div class="menu-block-right bg-menu-right tahunindo ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahunindo">
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">indonesia tahun 2000</a></li>
                                                  <li><a href="#">tahun 2001</a></li>
                                                  <li><a href="#">tahun 2002</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahunindo">
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">indonesia Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahunindo"></div>

                                      <div class="menu-block-right bg-menu-right tahuntpa ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahuntpa">
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">TPA tahun 2000</a></li>
                                                  <li><a href="#">tahun 2001</a></li>
                                                  <li><a href="#">tahun 2002</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahuntpa">
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">indonesia Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahuntpa"></div>  
                        </div>  
                      </ul>
                    </li>
            @elseif(Auth::user()->email == 'eduterrajogja@terraversity.com')
                <li><a href="{{ route('public.home')  }}"  >Home</a></li>
                <li><a href="/admin/home"  >Admin Area</a></li>
            @else
                <li><a   href="{{ route('public.home')  }}" >Home</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Messages <b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Inbox</a></li>
                        <li><a href="#">Drafts</a></li>
                        <li><a href="#">Sent Items</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Trash</a></li>
                    </ul>
                </li>
                <li class="dropdown mega-dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"  >SBMPTN <span class="caret"></span></a>
                      <ul class="dropdown-menu mega-dropdown-menu">

                        <div class="megamenunav">

                                    <li class="col-md-offset-2 col-sm-3 col-md-2">
                                       <ul class="cus-menu">
                                        <li class="cus-sub-menu">
                                        <a class="line-mtk-dasar" href="" id="matematikaDasar" > Matematika Dasar</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-mtk-ipa" href="" id="matematikaIpa"> Matematika IPA</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-fisika" href="" id="fisika">Fisika</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-kimia" href="" id="kimia">Kimia</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-biologi" href="" id="biologi">Biologi</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-inggris" href="" id="inggris">Bahasa Inggris</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-indo" href="" id="indo">Bahasa Indonesia</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="cus-sub-menu"><a class="line-tpa" href="" id="tpa">TPA</a>
                                          <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="divider"></li>
                                        </ul>
                                    </li>
                              
                                      <div class="menu-block-right bg-menu-right tahunmatematikaDasar ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahunmatematikaDasar" >
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="{{ route('public.matematikadasarbab') }}">matematika tahun 2000</a></li>
                                                  <li><a href="{{ route('public.matematikadasarbab') }}">tahun 2001</a></li>
                                                  <li><a href="{{ route('public.matematikadasarbab') }}">tahun 2002</a></li>
                                                </ul>
                                                
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahunmatematikaDasar" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.matematikadasarbab') }}">matematika Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                              
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahunmatematikaDasar"></div>

                                      <div class="menu-block-right bg-menu-right tahunmatematikaIpa ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                                <ul class="tahunmatematikaIpa" >
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="{{ route('public.matematikaipabab') }}">matematika IPA tahun 2000</a></li>
                                                  <li><a href="{{ route('public.matematikaipabab') }}">tahun 2001</a></li>
                                                  <li><a href="{{ route('public.matematikaipabab') }}">tahun 2002</a></li>
                                                </ul>
                                                
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahunmatematikaIpa" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.matematikaipabab') }}">matematika Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahunmatematikaIpa"></div>

                                      <div class="menu-block-right bg-menu-right tahunfisika ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahunfisika" >
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="{{ route('public.fisikabab') }}">ipa tahun 2000</a></li>
                                                  <li><a href="{{ route('public.fisikabab') }}">tahun 2001</a></li>
                                                  <li><a href="{{ route('public.fisikabab') }}">tahun 2002</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahunfisika" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.fisikabab') }}">ipa Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahunfisika"></div>

                                      <div class="menu-block-right bg-menu-right tahunkimia ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahunkimia" >
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">Kimia tahun 2000</a></li>
                                                  <li><a href="#">tahun 2001</a></li>
                                                  <li><a href="#">tahun 2002</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahunkimia" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">ipa Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahunkimia"></div>

                                      <div class="menu-block-right bg-menu-right tahunbiologi ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahunbiologi" >
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">Biologi tahun 2000</a></li>
                                                  <li><a href="#">tahun 2001</a></li>
                                                  <li><a href="#">tahun 2002</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahunbiologi" >
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">ipa Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahunbiologi"></div>

                                      <div class="menu-block-right bg-menu-right tahuninggris ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahuninggris">
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">english tahun 2000</a></li>
                                                  <li><a href="#">tahun 2001</a></li>
                                                  <li><a href="#">tahun 2002</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahuninggris">
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">english Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahuninggris"></div>

                                      <div class="menu-block-right bg-menu-right tahunindo ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahunindo">
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">indonesia tahun 2000</a></li>
                                                  <li><a href="#">tahun 2001</a></li>
                                                  <li><a href="#">tahun 2002</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahunindo">
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">indonesia Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahunindo"></div>

                                      <div class="menu-block-right bg-menu-right tahuntpa ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tahuntpa">
                                                  <li >Berdasarkan Tahun</li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">TPA tahun 2000</a></li>
                                                  <li><a href="#">tahun 2001</a></li>
                                                  <li><a href="#">tahun 2002</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6"> 
                                              <ul class="tahuntpa">
                                                <li >Berdasarkan Bab</li>
                                                <li class="divider"></li>
                                                <li><a href="#">indonesia Bab 1</a></li>
                                                <li><a href="#">Bab 2</a></li>
                                                <li><a href="#">Bab 3</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="bg-block-menu-right tahuntpa"></div>
                                        
                                   
                                      
                                    
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
