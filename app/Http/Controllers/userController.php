<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Donation;
use App\Models\Campaign;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    //index
    public function indexC(){
        $tampCamp = Campaign::All();

        return view('/index', ['tampCamp' => $tampCamp]);
    }
    //detail_camp + tampil fundraiser
    public function detC($id){
        $det = Campaign::where('id_camp', $id)->get();
        $tamFund = Donation::select('users.name', 'donations.nominalD', 'donations.komentD', 'donations.tglD')
                ->join('users', 'users.id', '=', 'donations.id')
                ->where('donations.id_camp', $id)
                ->get();
        $user=array();
        $i = 0;
        foreach($tamFund as $key){
            $user[$i]['nama']    = $key->name;
            $user[$i]['nominal'] = $key->nominalD;
            $user[$i]['komentar']= $key->komentD;
            $user[$i]['tanggal'] = $key->tglD;
            $i++;
        }

        return view('/detailCamp')->with(['detCamp' => $det,
                                          'tampilF' => $tamFund,
                                          'user'    => $user
                                        ]);
    }
    //prosesDonasi1
    public function viewproses1($id){
        $ambilId         = Campaign::where('id_camp', $id)->first();

        return view('prosesDon', ['ambilId' => $ambilId]);
    }

    public function proses1(Request $request, $id){
        $ambilId2        = Campaign::where('id_camp', $id)->first();
        $don             = new Donation;
        $don->id_camp    = $id;
        $don->id         = Auth::id();
        // dd(Auth::id());
        $don->nominalD   = $request->nominal;
        $don->komentD    = $request->komentar;
        $don->save();

        return view('/prosesDon2', ['idC' => $ambilId2]);
    }

    public function proses2(Request $request, $id){
         $ambilId3              = Campaign::where('id_camp', $id)->first();
         $donasiT               = Donation::where('id', '=', Auth::id())
                                ->orderBy('id_don', 'DESC')
                                ->take(1)->first();
         $donasiT->transferVia  = $request->transfer;
         $donasiT->no_tlp       = $request->no_tlp;
         $donasiT->save();

         if($donasiT == true){
            dd('Terimakasih telah ikut berpartisipasi.Bantuan anda sangat berharga :)');
         }
         
         return view('/prosesDon2');
    }

    public function viewedit($id){
        $upd = User::find($id);
        return view('/editProfile', ['edit' => $upd]);
    }

    public function editprof(Request $request, $id){
        $update = User::find($id);
        $update->name = $request->nl;
        $update->email = $request->email;
        $update->no_tlp = $request->nt;
        $update->lokasi = $request->lok;
        $update->bio = $request->bio;


        $this->validate($request, [
            'foto_prof' => 'mimes:jpeg,jpg,png | max : 1000'
        ]);
        
        $fileName = time() . '.' . $request->file('foto_prof')->getClientOriginalExtension();
        $request->file('foto_prof')->storeAs('public/rinbisa', $fileName);
        
        $update->foto_prof = $fileName;
        $update->save();
        
        return redirect('/editProfile');
    }

    public function viewdash(){
        $ambilC = Campaign::where('id_camp', Auth::id())->get();


    	return view('/campaign', ['ambilCamp' => $ambilC]);
    }

    public function viewAdd(){
    	return view('/addCampaign');
    }
    public function prosesAdd(Request $request){
        $camp = new Campaign;
        $camp->judul = $request->judul;
        $camp->id_user = Auth::id();
        $this->validate($request, ['foto' => 
                            'mimes:jpeg,jpg,png|max:1000'
                        ]);
        $fileName = time() . '.' . $request->file('foto')->getClientOriginalExtension();
        $request->file('foto')->storeAs('public/rinBisa/campaign', $fileName);

        $camp->foto = $fileName;
        $camp->target = $request->target;
        $camp->deadline = $request->deadline;
        $camp->kategori = $request->kategori;
        $camp->lokasi = $request->lokasi;
        $camp->deskC = $request->deskripsi;
        $camp->save();

        return redirect()->route('userCtrl.viewdash');                                     
    }
    public function viewDon(){
        $donUs = Donation::join('campaigns', 'donations.id_camp', 
                                '=' , 'campaigns.id_camp')
                         ->where('donations.id', Auth::id())
                         ->get();

    	 return view('/donasi')->with(['donasiUs' => $donUs]);
    }
}
