<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FisikaController extends Controller
{
  public function getFisika05()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.tahun.2005')->withUser($user)->withKupons($kupons);
  }
  public function getFisika06()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.tahun.2006')->withUser($user)->withKupons($kupons);
  }
  public function getFisika07()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.tahun.2007')->withUser($user)->withKupons($kupons);
  }
  public function getFisika08()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.tahun.2008')->withUser($user)->withKupons($kupons);
  }
  public function getFisika09()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.tahun.2009')->withUser($user)->withKupons($kupons);
  }
  public function getFisika10()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.tahun.2010')->withUser($user)->withKupons($kupons);
  }
  public function getFisika11()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.tahun.2011')->withUser($user)->withKupons($kupons);
  }
  public function getFisika12()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.tahun.2012')->withUser($user)->withKupons($kupons);
  }
  public function getFisika13()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.tahun.2013')->withUser($user)->withKupons($kupons);
  }
  public function getFisika14()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.tahun.2014')->withUser($user)->withKupons($kupons);
  }
  public function getFisika15()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.tahun.2015')->withUser($user)->withKupons($kupons);
  }


  // Controller Per-Bab
  public function getPendahuluan()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.bab.pendahuluan')->withUser($user)->withKupons($kupons);
  }
  public function getBesarandansatuan()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.bab.besarandansatuan')->withUser($user)->withKupons($kupons);
  }
  public function getDinamikageraklurus()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.bab.dinamikageraklurus')->withUser($user)->withKupons($kupons);
  }
  public function getDinamikarotasi()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.bab.dinamikarotasi')->withUser($user)->withKupons($kupons);
  }
  public function getGetarangelombangdanbunyi()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.bab.getarangelombangdanbunyi')->withUser($user)->withKupons($kupons);
  }
  public function getFluida()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.bab.fluida')->withUser($user)->withKupons($kupons);
  }
  public function getInduksimagnetikdanarusteganganbolakbalik()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.bab.induksimagnetikdanarusteganganbolakbalik')->withUser($user)->withKupons($kupons);
  }
  public function getKinematikageraklurus()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.bab.kinematikageraklurus')->withUser($user)->withKupons($kupons);
  }
  public function getListrik()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.bab.listrik')->withUser($user)->withKupons($kupons);
  }
  public function getMomentumdanimpuls()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.bab.momentumdanimpuls')->withUser($user)->withKupons($kupons);
  }
  public function getOptik()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.bab.optik')->withUser($user)->withKupons($kupons);
  }
  public function getSuhudankalor()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.bab.suhudankalor')->withUser($user)->withKupons($kupons);
  }
  public function getUsahadanenergi()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika.bab.usahadanenergi')->withUser($user)->withKupons($kupons);
  }
}
