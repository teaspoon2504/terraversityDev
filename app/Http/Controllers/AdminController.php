<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class AdminController extends Controller {

    public function getHome()
    {
        // return view('panels.admin.home');
        // return view('user.dashboard');

        $user = \Auth::user();
        $pendingKupons = \App\Kupon::whereApproved(0)->get();
        $approvedKupons = \App\Kupon::whereApproved(1)->get();
        return view('panels.admin.home')->withUser($user)->withPendingKupons($pendingKupons)->withApprovedKupons($approvedKupons);
    }

}
