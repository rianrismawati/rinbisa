<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    //

    public function viewEdit($id){
    	$ambil = User::find($id);
    	return view ('editProfile', ['ambil' => $ambil]);
    }
    public function editprof(Request $request, $id){
    	$upd = User::find($id);
    	$upd->no_tlp = $request->nt;
    	$upd->lokasi = $request->lok;
    	$upd->bio 	 = $request->bio;

    	$this->validate($request, [
    			'foto_prof' => 'mimes:jpeg,jpg,png | max : 1000'
    	]);

    	$fileName = time() . '.' . $request->file('foto_prof')->getClientOriginalExtensions();
    	$request->file('foto_prof')->storeAs('public/rinbisa', $fileName);
    	$upd->foto_prof = $fileName;
    	$upd->save();

    	return redirect('/home');
    }

    public function viewdash(){
    	return view('/campaign');
    }
    public function viewAdd(){
    	return view('/addCampaign');
    }

    public function viewDon(){
    	return view('/donasi');
    }
}
