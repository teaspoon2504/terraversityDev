<?php namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getHome()
    {
        $user=\Auth::user();
        $kupons=\App\Kupon::all();
        return view('pages.home')->withUser($user)->withKupons($kupons);
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
