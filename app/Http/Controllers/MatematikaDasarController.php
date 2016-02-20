<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MatematikaDasarController extends Controller
{
  // Controller Per-Tahun
  public function getMatdas09()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.tahun.2009')->withUser($user)->withKupons($kupons);
  }
  public function getMatdas10()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.tahun.2010')->withUser($user)->withKupons($kupons);
  }
  public function getMatdas11()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.tahun.2011')->withUser($user)->withKupons($kupons);
  }
  public function getMatdas12()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.tahun.2012')->withUser($user)->withKupons($kupons);
  }
  public function getMatdas13()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.tahun.2013')->withUser($user)->withKupons($kupons);
  }
  public function getMatdas14()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.tahun.2014')->withUser($user)->withKupons($kupons);
  }
  public function getMatdas15()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.tahun.2015')->withUser($user)->withKupons($kupons);
  }

  // Controller Per-Bab

  public function getPendahuluan()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.pendahuluan')->withUser($user)->withKupons($kupons);
  }
  public function getEksponendanlogaritma()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.eksponendanlogaritma')->withUser($user)->withKupons($kupons);
  }
  public function getPersamaankuadrat()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.persamaankuadrat')->withUser($user)->withKupons($kupons);
  }
  public function getFungsikuadrat()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.fungsikuadrat')->withUser($user)->withKupons($kupons);
  }
  public function getPertidaksamaan()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.pertidaksamaan')->withUser($user)->withKupons($kupons);
  }
  public function getSpldanprogramlinear()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.spldanprogramlinear')->withUser($user)->withKupons($kupons);
  }
  public function getLogika()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.logika')->withUser($user)->withKupons($kupons);
  }
  public function getFungsi()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.fungsi')->withUser($user)->withKupons($kupons);
  }
  public function getTurunan()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.turunan')->withUser($user)->withKupons($kupons);
  }
  public function getPersamaangaris()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.persamaangaris')->withUser($user)->withKupons($kupons);
  }
  public function getTrigonometri()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.trigonometri')->withUser($user)->withKupons($kupons);
  }
  public function getPeluang()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.peluang')->withUser($user)->withKupons($kupons);
  }
  public function getBidangdatar()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.bidangdatar')->withUser($user)->withKupons($kupons);
  }
  public function getMatriks()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.matriks')->withUser($user)->withKupons($kupons);
  }
  public function getBarisandanderet()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.barisandanderet')->withUser($user)->withKupons($kupons);
  }
  public function getDimensitiga()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.dimensitiga')->withUser($user)->withKupons($kupons);
  }
  public function getStatistika()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.statistika')->withUser($user)->withKupons($kupons);
  }
  public function getMateridasar()
  {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar.bab.materidasar')->withUser($user)->withKupons($kupons);
  }

}
