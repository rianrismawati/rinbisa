<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sktm;
use App\Models\Sktmas;
use App\Models\Skpd;
use App\Models\Skdu;
use App\Models\Sik;
use App\Models\Skbb;

class pelayananController extends Controller
{
    //
    public function viewPel(){
    	return view('/pelayanan_ter');
    }
    public function detTM(){
    	return view('/sktm');
    }
    public function prosTM(Request $request){
    	$tm  		= new Sktm;
    	$tm->nik 	= $request->nik;
    	$tm->nama 	= $request->nama;
    	$tm->no_tlp = $request->no_tlp;
    	$tm->save();

    	return view ('/sktm', ['postTM' => $tm]);
    }
    public function detAS(){
    	return view('/skmtas');
    }
    public function prosAS(Request $request){
    	$as 		= new Sktmas;
    	$as->nik 	= $request->nik;
    	$as->nama 	= $request->nama;
    	$as->no_tlp = $request->no_tlp;
    	$as->save();

    	return view('/skmtas', ['postAS' => $as]);
    }
    public function detPD(){
    	return view('/skpd');
    }
    public function prosPD(Request $request){
    	$pd = new Skpd;
    	$pd->nik = $request->nik;
    	$pd->perb_data = $request->perbD;
    	$pd->no_tlp = $request->no_tlp;
    	$pd->save();

    	return view('/skpd', ['postPD' => $pd]);
    }
    public function detDU(){
    	return view('/skdu');
    }
    public function prosDU(Request $request){
    	$du = new Skdu;
    	$du->nik = $request->nik;
    	$du->nama = $request->nama;
    	$du->nama_p = $request->nama_p;
    	$du->usaha = $request->usaha;
    	$du->almt_p = $request->alamat;
    	$du->no_tlp = $request->no_tlp;
    	$du->didirikan = $request->didirikan;
    	$du->pj = $request->p_jawab;
    	$du->save();

    	return view('/skdu', ['du' => $du]);
    }
    public function detBB(){
    	return view('/skbb');
    }
    public function prosBB(Request $request){
    	$bb 		 = new Skbb;
    	$bb->nik 	 = $request->nik;
    	$bb->nama 	 = $request->nama;
    	$bb->no_tlp	 = $request->no_tlp;
    	$bb->save();

    	return view('/skbb', ['postBB' => $bb]);
    }
    public function detSik(){
    	return view('/sik');
    }
    public function prosSik(Request $request){
    	$ik			 = new Sik;
    	$ik->nik 	 = $request->nik;
    	$ik->nama 	 = $request->nama;
    	$ik->tujuan  = $request->tujuan;
    	$ik->no_tlp  = $request->no_tlp;
    	$ik->save();

    	return view('/sik', ['postsik' => $ik]);
    }
}
