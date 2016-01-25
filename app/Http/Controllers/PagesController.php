<?php namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getHome()
    {
    	  $user=\Auth::user();
        $kupons=\App\Kupon::all();
        return view('pages.home')->withUser($user)->withKupons($kupons);
    }
    public function getMateri()
    {

      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.materi')->withUser($user)->withKupons($kupons);
    }

}
