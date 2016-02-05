<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller {

    public function getHome()
    {
               // return view('panels.user.home');

            $user=\Auth::user();
                $kupons=\App\Kupon::all();
                return view('panels.user.home')->withUser($user)->withKupons($kupons);
    }

    public function getVoucher(){
    $user=\Auth::user();
        $kupons=\App\Kupon::all();
        return view('panels.user.voucher')->withUser($user)->withKupons($kupons);
    }




        public function getMatematikaDasarBab()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.matematikadasarbab')->withUser($user)->withKupons($kupons);
        }
        public function getMatematikaDasarTahun()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.matematikadasartahun')->withUser($user)->withKupons($kupons);
        }
        public function getMatematikaIpaBab()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.matematikaipabab')->withUser($user)->withKupons($kupons);
        }
        public function getMatematikaIpaTahun()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.matematikaipatahun')->withUser($user)->withKupons($kupons);
        }
        public function getFisikaBab()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.fisikabab')->withUser($user)->withKupons($kupons);
        }
        public function getFisikaTahun()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.fisikatahun')->withUser($user)->withKupons($kupons);
        }
        public function getKimiaBab()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.kimiabab')->withUser($user)->withKupons($kupons);
        }
        public function getKimiaTahun()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.kimiatahun')->withUser($user)->withKupons($kupons);
        }
        public function getBiologiBab()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.biologibab')->withUser($user)->withKupons($kupons);
        }
        public function getBiologiTahun()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.biologitahun')->withUser($user)->withKupons($kupons);
        }
        public function getInggrisBab()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.inggrisbab')->withUser($user)->withKupons($kupons);
        }
        public function getInggrisTahun()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.inggristahun')->withUser($user)->withKupons($kupons);
        }
        public function getIndonesiaBab()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.indonesiabab')->withUser($user)->withKupons($kupons);
        }
        public function getIndonesiaTahun()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.indonesiatahun')->withUser($user)->withKupons($kupons);
        }
        public function getTpaBab()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.tpabab')->withUser($user)->withKupons($kupons);
        }
        public function getTpaTahun()
        {
          $user=\Auth::user();
          $kupons=\App\Kupon::all();
          return view('panels.user.tpatahun')->withUser($user)->withKupons($kupons);
        }




}
