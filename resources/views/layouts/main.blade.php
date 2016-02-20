
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

    <title>Terraversity</title>

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
            <a class="navbar-brand" href="{{ route('public.home')  }}">
              <span class="terra">
                <img src="/assets/images/logo.png" alt="Terraversity" style="width: 100px; height: 30px" />
              </span>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            @if(!Auth::check())
              <li><a   href="{{ route('public.home')  }}" >Home</a></li>
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
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunmatematikaDasar" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.matdas09') }}">2009</a></li>
                                                <li><a href="{{ route('public.matdas10') }}">2010</a></li>
                                                <li><a href="{{ route('public.matdas11') }}">2011</a></li>
                                                <li><a href="{{ route('public.matdas12') }}">2012</a></li>
                                                <li><a href="{{ route('public.matdas13') }}">2013</a></li>
                                                <li><a href="{{ route('public.matdas14') }}">2014</a></li>
                                                <li><a href="{{ route('public.matdas15') }}">2015</a></li>

                                              </ul>

                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunmatematikaDasar" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Eksponen dan Logaritma</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Persamaan Kuadrat</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Fungsi Kuadrat</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Pertidaksamaan</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">SPL dan Program Linear</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Logika</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Fungsi</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Turunan</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Persamaan Garis</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Trigonometri</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Peluang</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Bidang Datar</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Matriks</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Barisan dan Deret</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Dimensi tiga</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Statistika</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Materi Dasar</a></li>
                                            </ul>

                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunmatematikaDasar"></div>

                                    <div class="menu-block-right bg-menu-right tahunmatematikaIpa ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">

                                              <ul class="tahunmatematikaIpa" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.matematikaipatahun') }}">MATIPA 2009 378</a></li>
                                                <li><a href="{{ route('public.matematikaipatahun') }}">MATIPA 2010 526</a></li>
                                                <li><a href="{{ route('public.matematikaipatahun') }}">MATIPA 2011 523</a></li>
                                                <li><a href="{{ route('public.matematikaipatahun') }}">MATIPA 2012 132</a></li>
                                                <li><a href="{{ route('public.matematikaipatahun') }}">MATIPA 2012 633</a></li>
                                                <li><a href="{{ route('public.matematikaipatahun') }}">MATIPA 2013 131</a></li>
                                                <li><a href="{{ route('public.matematikaipatahun') }}">MATIPA 2013 134</a></li>
                                                <li><a href="{{ route('public.matematikaipatahun') }}">MATIPA 2014 512</a></li>
                                                <li><a href="{{ route('public.matematikaipatahun') }}">MATIPA 2014 523</a></li>
                                                <li><a href="{{ route('public.matematikaipatahun') }}">MATIPA 2015 519</a></li>
                                                <li><a href="{{ route('public.matematikaipatahun') }}">MATIPA 2015 538</a></li>
                                              </ul>

                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunmatematikaIpa" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Pertidaksamaan</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Vektor</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Dimensi Tiga</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Integral</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Barisan dan Deret</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Turunan</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Fungsi</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Bangun Datar</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Trigonometri</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Suku Banyak</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Matematika IPA</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Limit</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Lingkaran</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Peluang</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Transformasi</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Persamaan Kuadrat</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Fungsi Kuadrat</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Eksponen dan Logaritma</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Matriks</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunmatematikaIpa"></div>

                                    <div class="menu-block-right bg-menu-right tahunfisika ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunfisika" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.fisikatahun') }}">tahun 2000</a></li>
                                                <li><a href="{{ route('public.fisikatahun') }}">tahun 2001</a></li>
                                                <li><a href="{{ route('public.fisikatahun') }}">tahun 2002</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunfisika" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.fisikabab') }}">Pendahuluan</a></li>
                                              <li><a href="{{ route('public.fisikabab') }}">Dinamika Gerak Lurus</a></li>
                                              <li><a href="{{ route('public.fisikabab') }}">Dinamika Rotasi</a></li>
                                              <li><a href="{{ route('public.fisikabab') }}">Fisika Modern</a></li>
                                              <li><a href="{{ route('public.fisikabab') }}">Fluida</a></li>
                                              <li><a href="{{ route('public.fisikabab') }}">Getaran,Gelombang dan Bunyi</a></li>
                                              <li><a href="{{ route('public.fisikabab') }}">Induksi Magnetik Dan Arus Tegangan Bolak-Balik</a></li>
                                              <li><a href="{{ route('public.fisikabab') }}">Kinematika Gerak Lurus</a></li>
                                              <li><a href="{{ route('public.fisikabab') }}">Listrik</a></li>
                                              <li><a href="{{ route('public.fisikabab') }}">Momentum Dan Impuls</a></li>
                                              <li><a href="{{ route('public.fisikabab') }}">Optik</a></li>
                                              <li><a href="{{ route('public.fisikabab') }}">Suhu Dan Kalor</a></li>
                                              <li><a href="{{ route('public.fisikabab') }}">Usaha Dan Energi</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunfisika"></div>

                                    <div class="menu-block-right bg-menu-right tahunkimia ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunkimia scroll-menu" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.kimiatahun') }}">tahun 2000</a></li>
                                                <li><a href="{{ route('public.kimiatahun') }}">tahun 2001</a></li>
                                                <li><a href="{{ route('public.kimiatahun') }}">tahun 2002</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunkimia" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.kimiabab') }}">Bab 1</a></li>

                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunkimia"></div>

                                    <div class="menu-block-right bg-menu-right tahunbiologi ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunbiologi" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.biologitahun') }}">BIOLOGI SBM 2005 480</a></li>
                                                <li><a href="{{ route('public.biologitahun') }}">BIOLOGI SBM 2006 420</a></li>
                                                <li><a href="{{ route('public.biologitahun') }}">BIOLOGI SBM 2007 350</a></li>
                                                <li><a href="{{ route('public.biologitahun') }}">BIOLOGI SBM 2008 102</a></li>
                                                <li><a href="{{ route('public.biologitahun') }}">BIOLOGI SBM 2009 378</a></li>
                                                <li><a href="{{ route('public.biologitahun') }}">BIOLOGI SBM 2010 350</a></li>
                                                <li><a href="{{ route('public.biologitahun') }}">BIOLOGI SBM 2013 131</a></li>

                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunbiologi" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.biologibab') }}">Sel</a></li>
                                              <li><a href="{{ route('public.biologibab') }}">Struktur Tumbuhan</a></li>
                                              <li><a href="{{ route('public.biologibab') }}">Reproduksi Sel</a></li>
                                              <li><a href="{{ route('public.biologibab') }}">Struktur serta Fungsi Tubuh Hewan dan Manusia</a></li>
                                              <li><a href="{{ route('public.biologibab') }}">Genetika dan Evolusi</a></li>
                                              <li><a href="{{ route('public.biologibab') }}">Biologi dan Lingkungan</a></li>
                                              <li><a href="{{ route('public.biologibab') }}">Metabolisme</a></li>
                                              <li><a href="{{ route('public.biologibab') }}">Bioteknologi</a></li>
                                              <li><a href="{{ route('public.biologibab') }}">Invertebrata</a></li>
                                              <li><a href="{{ route('public.biologibab') }}">Klasifikasi Mahluk Hidup</a></li>


                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunbiologi"></div>

                                    <div class="menu-block-right bg-menu-right tahuninggris ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahuninggris scroll-menu">
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.inggristahun') }}">tahun 2000</a></li>
                                                <li><a href="{{ route('public.inggristahun') }}">tahun 2001</a></li>
                                                <li><a href="{{ route('public.inggristahun') }}">tahun 2002</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahuninggris">
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.inggrisbab') }}">Bab 1</a></li>
                                              <li><a href="{{ route('public.inggrisbab') }}">Bab 2</a></li>
                                              <li><a href="{{ route('public.inggrisbab') }}">Bab 3</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahuninggris"></div>

                                    <div class="menu-block-right bg-menu-right tahunindo ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunindo">
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.indonesiatahun') }}">tahun 2000</a></li>
                                                <li><a href="{{ route('public.indonesiatahun') }}">tahun 2001</a></li>
                                                <li><a href="{{ route('public.indonesiatahun') }}">tahun 2002</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunindo">
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.indonesiabab') }}">Bab 1</a></li>
                                              <li><a href="{{ route('public.indonesiabab') }}">Bab 2</a></li>
                                              <li><a href="{{ route('public.indonesiabab') }}">Bab 3</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunindo"></div>

                                    <div class="menu-block-right bg-menu-right tahuntpa ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahuntpa">
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('public.tpatahun') }}">tahun 2000</a></li>
                                                <li><a href="{{ route('public.tpatahun') }}">tahun 2001</a></li>
                                                <li><a href="{{ route('public.tpatahun') }}">tahun 2002</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahuntpa">
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.tpabab') }}">Bab 1</a></li>
                                              <li><a href="{{ route('public.tpabab') }}">Bab 2</a></li>
                                              <li><a href="{{ route('public.tpabab') }}">Bab 3</a></li>
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
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunmatematikaDasar" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <div class="row">
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2000</a></li>
                                                    <li><a href="#">tahun 2001</a></li>
                                                    <li><a href="#">tahun 2002</a></li>
                                                    <li><a href="#">tahun 2003</a></li>
                                                    <li><a href="#">tahun 2004</a></li>
                                                    <li><a href="#">tahun 2005</a></li>
                                                    <li><a href="#">tahun 2006</a></li>
                                                    <li><a href="#">tahun 2007</a></li>
                                                  </div>
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2008</a></li>
                                                    <li><a href="#">tahun 2009</a></li>
                                                    <li><a href="#">tahun 2010</a></li>
                                                    <li><a href="#">tahun 2011</a></li>
                                                    <li><a href="#">tahun 2012</a></li>
                                                    <li><a href="#">tahun 2013</a></li>
                                                    <li><a href="#">tahun 2014</a></li>
                                                    <li><a href="#">tahun 2015</a></li>
                                                  </div>
                                                </div>
                                              </ul>

                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunmatematikaDasar" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">matematika Bab 1</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Bab 2</a></li>
                                              <li><a href="{{ route('public.matematikadasarbab') }}">Bab 3</a></li>
                                            </ul>

                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunmatematikaDasar"></div>

                                    <div class="menu-block-right bg-menu-right tahunmatematikaIpa ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">

                                              <ul class="tahunmatematikaIpa" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <div class="row">
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2000</a></li>
                                                    <li><a href="#">tahun 2001</a></li>
                                                    <li><a href="#">tahun 2002</a></li>
                                                    <li><a href="#">tahun 2003</a></li>
                                                    <li><a href="#">tahun 2004</a></li>
                                                    <li><a href="#">tahun 2005</a></li>
                                                    <li><a href="#">tahun 2006</a></li>
                                                    <li><a href="#">tahun 2007</a></li>
                                                  </div>
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2008</a></li>
                                                    <li><a href="#">tahun 2009</a></li>
                                                    <li><a href="#">tahun 2010</a></li>
                                                    <li><a href="#">tahun 2011</a></li>
                                                    <li><a href="#">tahun 2012</a></li>
                                                    <li><a href="#">tahun 2013</a></li>
                                                    <li><a href="#">tahun 2014</a></li>
                                                    <li><a href="#">tahun 2015</a></li>
                                                  </div>
                                                </div>
                                              </ul>

                                          </div>
                                          <div class=" col-md-6 scroll-menu">
                                            <ul class="tahunmatematikaIpa" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">matematika Bab 1</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Bab 2</a></li>
                                              <li><a href="{{ route('public.matematikaipabab') }}">Bab 3</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunmatematikaIpa"></div>

                                    <div class="menu-block-right bg-menu-right tahunfisika ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunfisika" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <div class="row">
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2000</a></li>
                                                    <li><a href="#">tahun 2001</a></li>
                                                    <li><a href="#">tahun 2002</a></li>
                                                    <li><a href="#">tahun 2003</a></li>
                                                    <li><a href="#">tahun 2004</a></li>
                                                    <li><a href="#">tahun 2005</a></li>
                                                    <li><a href="#">tahun 2006</a></li>
                                                    <li><a href="#">tahun 2007</a></li>
                                                  </div>
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2008</a></li>
                                                    <li><a href="#">tahun 2009</a></li>
                                                    <li><a href="#">tahun 2010</a></li>
                                                    <li><a href="#">tahun 2011</a></li>
                                                    <li><a href="#">tahun 2012</a></li>
                                                    <li><a href="#">tahun 2013</a></li>
                                                    <li><a href="#">tahun 2014</a></li>
                                                    <li><a href="#">tahun 2015</a></li>
                                                  </div>
                                                </div>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunfisika" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <div class="row">
                                                <div class="col-xs-6">
                                                  <li><a href="/user/fisika-bab#pendahuluan">Pendahuluan</a></li>
                                                  <li><a href="/user/fisika-bab#dinamikageraklurus">Dinamika Gerak Lurus</a></li>
                                                  <li><a href="/user/fisika-bab#dinamikarotasi">Dinamika Rotasi</a></li>
                                                  <li><a href="/user/fisika-bab#fisikamodern">Fisika Modern</a></li>
                                                  <li><a href="/user/fisika-bab#fluida">Fluida</a></li>
                                                  <li><a href="/user/fisika-bab#getarangelombangdanbunyi">Getaran,Gelombang dan Bunyi</a></li>
                                                  <li><a href="/user/fisika-bab#induksimagnetik">Induksi Magnetik Dan Arus Tegangan Bolak-Balik</a></li>
                                                  <li><a href="/user/fisika-bab#kinematikageraklurus">Kinematika Gerak Lurus</a></li>
                                                </div>
                                                <div class="col-xs-6">
                                                  <li><a href="/user/fisika-bab#listrik">Listrik</a></li>
                                                  <li><a href="/user/fisika-bab#momentumdanimpuls">Momentum Dan Impuls</a></li>
                                                  <li><a href="/user/fisika-bab#optik">Optik</a></li>
                                                  <li><a href="/user/fisika-bab#suhudankalor">Suhu Dan Kalor</a></li>
                                                  <li><a href="/user/fisika-bab#usahadanenergi">Usaha Dan Energi</a></li>
                                                </div>
                                              </div>


                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunfisika"></div>

                                    <div class="menu-block-right bg-menu-right tahunkimia ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunkimia" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <div class="row">
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2000</a></li>
                                                    <li><a href="#">tahun 2001</a></li>
                                                    <li><a href="#">tahun 2002</a></li>
                                                    <li><a href="#">tahun 2003</a></li>
                                                    <li><a href="#">tahun 2004</a></li>
                                                    <li><a href="#">tahun 2005</a></li>
                                                    <li><a href="#">tahun 2006</a></li>
                                                    <li><a href="#">tahun 2007</a></li>
                                                  </div>
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2008</a></li>
                                                    <li><a href="#">tahun 2009</a></li>
                                                    <li><a href="#">tahun 2010</a></li>
                                                    <li><a href="#">tahun 2011</a></li>
                                                    <li><a href="#">tahun 2012</a></li>
                                                    <li><a href="#">tahun 2013</a></li>
                                                    <li><a href="#">tahun 2014</a></li>
                                                    <li><a href="#">tahun 2015</a></li>
                                                  </div>
                                                </div>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunkimia" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.kimiabab') }}">ipa Bab 1</a></li>
                                              <li><a href="{{ route('public.kimiabab') }}">Bab 2</a></li>
                                              <li><a href="{{ route('public.kimiabab') }}">Bab 3</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunkimia"></div>

                                    <div class="menu-block-right bg-menu-right tahunbiologi ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunbiologi" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <div class="row">
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2000</a></li>
                                                    <li><a href="#">tahun 2001</a></li>
                                                    <li><a href="#">tahun 2002</a></li>
                                                    <li><a href="#">tahun 2003</a></li>
                                                    <li><a href="#">tahun 2004</a></li>
                                                    <li><a href="#">tahun 2005</a></li>
                                                    <li><a href="#">tahun 2006</a></li>
                                                    <li><a href="#">tahun 2007</a></li>
                                                  </div>
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2008</a></li>
                                                    <li><a href="#">tahun 2009</a></li>
                                                    <li><a href="#">tahun 2010</a></li>
                                                    <li><a href="#">tahun 2011</a></li>
                                                    <li><a href="#">tahun 2012</a></li>
                                                    <li><a href="#">tahun 2013</a></li>
                                                    <li><a href="#">tahun 2014</a></li>
                                                    <li><a href="#">tahun 2015</a></li>
                                                  </div>
                                                </div>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunbiologi" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.biologibab') }}">ipa Bab 1</a></li>
                                              <li><a href="{{ route('public.biologibab') }}">Bab 2</a></li>
                                              <li><a href="{{ route('public.biologibab') }}">Bab 3</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunbiologi"></div>

                                    <div class="menu-block-right bg-menu-right tahuninggris ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahuninggris">
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <div class="row">
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2000</a></li>
                                                    <li><a href="#">tahun 2001</a></li>
                                                    <li><a href="#">tahun 2002</a></li>
                                                    <li><a href="#">tahun 2003</a></li>
                                                    <li><a href="#">tahun 2004</a></li>
                                                    <li><a href="#">tahun 2005</a></li>
                                                    <li><a href="#">tahun 2006</a></li>
                                                    <li><a href="#">tahun 2007</a></li>
                                                  </div>
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2008</a></li>
                                                    <li><a href="#">tahun 2009</a></li>
                                                    <li><a href="#">tahun 2010</a></li>
                                                    <li><a href="#">tahun 2011</a></li>
                                                    <li><a href="#">tahun 2012</a></li>
                                                    <li><a href="#">tahun 2013</a></li>
                                                    <li><a href="#">tahun 2014</a></li>
                                                    <li><a href="#">tahun 2015</a></li>
                                                  </div>
                                                </div>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahuninggris">
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.inggrisbab') }}">english Bab 1</a></li>
                                              <li><a href="{{ route('public.inggrisbab') }}">Bab 2</a></li>
                                              <li><a href="{{ route('public.inggrisbab') }}">Bab 3</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahuninggris"></div>

                                    <div class="menu-block-right bg-menu-right tahunindo ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunindo">
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <div class="row">
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2000</a></li>
                                                    <li><a href="#">tahun 2001</a></li>
                                                    <li><a href="#">tahun 2002</a></li>
                                                    <li><a href="#">tahun 2003</a></li>
                                                    <li><a href="#">tahun 2004</a></li>
                                                    <li><a href="#">tahun 2005</a></li>
                                                    <li><a href="#">tahun 2006</a></li>
                                                    <li><a href="#">tahun 2007</a></li>
                                                  </div>
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2008</a></li>
                                                    <li><a href="#">tahun 2009</a></li>
                                                    <li><a href="#">tahun 2010</a></li>
                                                    <li><a href="#">tahun 2011</a></li>
                                                    <li><a href="#">tahun 2012</a></li>
                                                    <li><a href="#">tahun 2013</a></li>
                                                    <li><a href="#">tahun 2014</a></li>
                                                    <li><a href="#">tahun 2015</a></li>
                                                  </div>
                                                </div>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunindo">
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.indonesiabab') }}">indonesia Bab 1</a></li>
                                              <li><a href="{{ route('public.indonesiabab') }}">Bab 2</a></li>
                                              <li><a href="{{ route('public.indonesiabab') }}">Bab 3</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunindo"></div>

                                    <div class="menu-block-right bg-menu-right tahuntpa ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahuntpa">
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <div class="row">
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2000</a></li>
                                                    <li><a href="#">tahun 2001</a></li>
                                                    <li><a href="#">tahun 2002</a></li>
                                                    <li><a href="#">tahun 2003</a></li>
                                                    <li><a href="#">tahun 2004</a></li>
                                                    <li><a href="#">tahun 2005</a></li>
                                                    <li><a href="#">tahun 2006</a></li>
                                                    <li><a href="#">tahun 2007</a></li>
                                                  </div>
                                                  <div class="col-xs-6">
                                                    <li><a href="#">tahun 2008</a></li>
                                                    <li><a href="#">tahun 2009</a></li>
                                                    <li><a href="#">tahun 2010</a></li>
                                                    <li><a href="#">tahun 2011</a></li>
                                                    <li><a href="#">tahun 2012</a></li>
                                                    <li><a href="#">tahun 2013</a></li>
                                                    <li><a href="#">tahun 2014</a></li>
                                                    <li><a href="#">tahun 2015</a></li>
                                                  </div>
                                                </div>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahuntpa">
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.tpabab') }}">indonesia Bab 1</a></li>
                                              <li><a href="{{ route('public.tpabab') }}">Bab 2</a></li>
                                              <li><a href="{{ route('public.tpabab') }}">Bab 3</a></li>
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
                  <li><a href="{{ route('public.voucher') }}"  >Voucher &nbsp;<span class="label label-warning" style="font-size: 9px">Promo</span></a></li>
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
