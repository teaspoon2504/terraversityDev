<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MatematikaIPAController extends Controller
{
  public function getMatIPA09()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.tahun.2009')->withUser($user)->withKupons($kupons);
  }
  public function getMatIPA10()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.tahun.2010')->withUser($user)->withKupons($kupons);
  }
  public function getMatIPA11()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.tahun.2011')->withUser($user)->withKupons($kupons);
  }
  public function getMatIPA12()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.tahun.2012')->withUser($user)->withKupons($kupons);
  }
  public function getMatIPA13()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.tahun.2013')->withUser($user)->withKupons($kupons);
  }
  public function getMatIPA14()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.tahun.2014')->withUser($user)->withKupons($kupons);
  }
  public function getMatIPA15()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.tahun.2015')->withUser($user)->withKupons($kupons);
  }

  // Controller Per-Bab
  public function getPertidaksamaan()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.pertidaksamaan')->withUser($user)->withKupons($kupons);
  }
  public function getVektor()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.vektor')->withUser($user)->withKupons($kupons);
  }
  public function getDimensitiga()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.dimensitiga')->withUser($user)->withKupons($kupons);
  }
  public function getIntegral()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.integral')->withUser($user)->withKupons($kupons);
  }
  public function getBarisandanderet()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.barisandanderet')->withUser($user)->withKupons($kupons);
  }
  public function getTurunan()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.turunan')->withUser($user)->withKupons($kupons);
  }
  public function getFungsi()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.fungsi')->withUser($user)->withKupons($kupons);
  }
  public function getBangundatar()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.bangundatar')->withUser($user)->withKupons($kupons);
  }
  public function getTrigonometri()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.trigonometri')->withUser($user)->withKupons($kupons);
  }
  public function getSukubanyak()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.sukubanyak')->withUser($user)->withKupons($kupons);
  }
  public function getMatematikaipa()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.matematikaipa')->withUser($user)->withKupons($kupons);
  }
  public function getLimit()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.limit')->withUser($user)->withKupons($kupons);
  }
  public function getLingkaran()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.lingkaran')->withUser($user)->withKupons($kupons);
  }
  public function getPeluang()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.peluang')->withUser($user)->withKupons($kupons);
  }
  public function getTransformasi()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.transformasi')->withUser($user)->withKupons($kupons);
  }
  public function getPersamaankuadrat()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.persamaankuadrat')->withUser($user)->withKupons($kupons);
  }
  public function getFungsikuadrat()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.fungsikuadrat')->withUser($user)->withKupons($kupons);
  }
  public function getEksponendanlogaritma()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.eksponendanlogaritma')->withUser($user)->withKupons($kupons);
  }
  public function getMatriks()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa.bab.matriks')->withUser($user)->withKupons($kupons);
  }
}
