<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class KuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $kupon=New \App\Kupon();
        $kupon->kode=$this->generateRandomString(10); 
        $kupon->save();
        return view('panels.admin.home');
    }


public function backToGuest(Request $request){

    if($user->subscribed=1){
        $user->subscribed=0;
        $user->save();
        return view('panels.admin.home');
    }else{
        return 'User Adalah Guest';
    }
}


private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


 public function subscribe(Request $request){
        $KuponAda = \App\Kupon::Where('kode', $request->kode)-> first();
        if ($KuponAda){
            $user = \Auth::user();
            $user->subscribed=1;
            $user->save();
            $KuponAda->delete();
            return view('panels.user.voucher');
        }else{
            return view('panels.user.kuponsalah');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
