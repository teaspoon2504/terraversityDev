<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BiologiController extends Controller
{
  public function getBio05()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.tahun.2005')->withUser($user)->withKupons($kupons);
  }
  public function getBio06()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.tahun.2006')->withUser($user)->withKupons($kupons);
  }
  public function getBio07()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.tahun.2007')->withUser($user)->withKupons($kupons);
  }
  public function getBio08()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.tahun.2008')->withUser($user)->withKupons($kupons);
  }
  public function getBio09()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.tahun.2009')->withUser($user)->withKupons($kupons);
  }
  public function getBio10()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.tahun.2010')->withUser($user)->withKupons($kupons);
  }
  public function getBio11()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.tahun.2011')->withUser($user)->withKupons($kupons);
  }
  public function getBio12()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.tahun.2012')->withUser($user)->withKupons($kupons);
  }
  public function getBio13()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.tahun.2013')->withUser($user)->withKupons($kupons);
  }
  public function getBio14()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.tahun.2014')->withUser($user)->withKupons($kupons);
  }
  public function getBio15()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.tahun.2015')->withUser($user)->withKupons($kupons);
  }


  // Controller Per-Bab
  public function getSel()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.bab.sel')->withUser($user)->withKupons($kupons);
  }
  public function getStrukturtumbuhan()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.bab.strukturtumbuhan')->withUser($user)->withKupons($kupons);
  }
  public function getReproduksisel()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.bab.reproduksisel')->withUser($user)->withKupons($kupons);
  }
  public function getStrukturdanfungsitubuhhewandanmanusia()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.bab.strukturdanfungsitubuhhewandanmanusia')->withUser($user)->withKupons($kupons);
  }
  public function getGenetikadanevolusi()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.bab.genetikadanevolusi')->withUser($user)->withKupons($kupons);
  }
  public function getBiologilingkungan()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.bab.biologilingkungan')->withUser($user)->withKupons($kupons);
  }
  public function getMetabolisme()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.bab.metabolisme')->withUser($user)->withKupons($kupons);
  }
  public function getMikroorganisme()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.bab.mikroorganisme')->withUser($user)->withKupons($kupons);
  }
  public function getBioteknologi()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.bab.bioteknologi')->withUser($user)->withKupons($kupons);
  }
  public function getInvertebrata()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.bab.invertebrata')->withUser($user)->withKupons($kupons);
  }
  public function getKlasifikasimahlukhidup()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi.bab.klasifikasimahlukhidup')->withUser($user)->withKupons($kupons);
  }
}
