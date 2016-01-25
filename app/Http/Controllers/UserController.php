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

}
