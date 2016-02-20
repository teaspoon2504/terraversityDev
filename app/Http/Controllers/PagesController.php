<?php namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getHome()
    {
        $user=\Auth::user();
        $kupons=\App\Kupon::all();
        return view('pages.home')->withUser($user)->withKupons($kupons);
    }


    public function getMatematikaDasarBab()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasarbab')->withUser($user)->withKupons($kupons);
    }
    public function getMatematikaDasarTahun()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasartahun')->withUser($user)->withKupons($kupons);
    }
    public function getMatematikaIpaBab()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipabab')->withUser($user)->withKupons($kupons);
    }
    public function getMatematikaIpaTahun()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipatahun')->withUser($user)->withKupons($kupons);
    }
    public function getFisikaBab()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisikabab')->withUser($user)->withKupons($kupons);
    }
    public function getFisikaTahun()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisikatahun')->withUser($user)->withKupons($kupons);
    }
    public function getKimiaBab()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.kimiabab')->withUser($user)->withKupons($kupons);
    }
    public function getKimiaTahun()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.kimiatahun')->withUser($user)->withKupons($kupons);
    }
    public function getBiologiBab()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologibab')->withUser($user)->withKupons($kupons);
    }
    public function getBiologiTahun()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologitahun')->withUser($user)->withKupons($kupons);
    }
    public function getInggrisBab()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.inggrisbab')->withUser($user)->withKupons($kupons);
    }
    public function getInggrisTahun()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.inggristahun')->withUser($user)->withKupons($kupons);
    }
    public function getIndonesiaBab()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.indonesiabab')->withUser($user)->withKupons($kupons);
    }
    public function getIndonesiaTahun()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.indonesiatahun')->withUser($user)->withKupons($kupons);
    }
    public function getTpaBab()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.tpabab')->withUser($user)->withKupons($kupons);
    }
    public function getTpaTahun()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.tpatahun')->withUser($user)->withKupons($kupons);
    }


    public function getPanduan()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.panduan')->withUser($user)->withKupons($kupons);
    }

    public function getFaq()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.faq')->withUser($user)->withKupons($kupons);
    }

    public function getTentang()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.tentang')->withUser($user)->withKupons($kupons);
    }

    public function getVoucher()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.voucher')->withUser($user)->withKupons($kupons);
    }

    public function getInfodvd()
    {
      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.infodvd')->withUser($user)->withKupons($kupons);
    }


}
