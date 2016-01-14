<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller {

    public function getHome()
    {
        return view('panels.user.home');
    }

    public function getDashboard(){
        $user=\Auth::user();
        $kupons=\App\Kupon::all();
        return view('user.dashboard')->withUser($user)->withKupons($kupons);

        //
    }
}