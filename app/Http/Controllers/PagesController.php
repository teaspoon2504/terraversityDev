<?php namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getHome()
    {
    	  $user=\Auth::user();
        $kupons=\App\Kupon::all();
        return view('pages.home')->withUser($user)->withKupons($kupons);
    }
    public function getMatematikadasar()
    {

      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikadasar')->withUser($user)->withKupons($kupons);
    }
    public function getMatematikaipa()
    {

      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.matematikaipa')->withUser($user)->withKupons($kupons);
    }
    public function getFisika()
    {

      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.fisika')->withUser($user)->withKupons($kupons);
    }
    public function getKimia()
    {

      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.kimia')->withUser($user)->withKupons($kupons);
    }
    public function getBiologi()
    {

      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.biologi')->withUser($user)->withKupons($kupons);
    }
    public function getInggris()
    {

      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.inggris')->withUser($user)->withKupons($kupons);
    }
    public function getIndo()
    {

      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.indo')->withUser($user)->withKupons($kupons);
    }
    public function getTpa()
    {

      $user=\Auth::user();
      $kupons=\App\Kupon::all();
      return view('pages.tpa')->withUser($user)->withKupons($kupons);
    }

}
