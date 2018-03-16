<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Campaign;
use App\User;

class adminController extends Controller
{
    public function dashboard()
    {
        return view('adm/home');
    }
    public function donasi(){
    	$ambilD = Donation::join('campaigns', 'donations.id_camp', '=', 'campaigns.id_camp')->get();


    	return view('/adm/donasi', ['readD' => $ambilD]);
    }

     public function viewDet($id){
        $don = Donation::join('campaigns', 'donations.id_camp', '=', 'campaigns.id_camp')
                            ->where('id_don',$id)
                            ->get();

        return view('adm/detailDon', ['idDon' => $don]);
    }

    public function updateD(Request $request, $id){
        $donas = Donation::where('id_don',$id)->first();
        $donas->status = $request->stat;
        $donas->save();

        return redirect('adm/donasi');
    }

    public function destroy($id){
        $del = Donation::where('id_don', $id)->first();
        $del->delete();

        return redirect('adm/donasi');
    }

    // public function viewDet($id){
    // 	$idDon = Donation::join('campaigns', 'donations.id_camp', '=', 'campaigns.id_camp')
    // 			->join('users', 'donations.id', '=', 'users.id')
		  //   	->where('donations.id_don', $id)
		  //   	->get();
    // 	return view('adm/detailDon', ['idDon' => $idDon]);
    // }
    // public function updateD(Request $request, $id){
    // 	$idD = Donation::where('id_don', $id)->first();
    // 	$idD->status = $request->status;
    // 	$idD->save();

    // 	return redirect('/adm/donasi');
    // }

    //campaign
    public function camp(){
    	$allC = Campaign::join('users', 'campaigns.id', '=', 'users.id')->get();

    	return view('/adm/campaign', ['allC' => $allC]);
    }
    public function detCamp($id){
    	$detC = Campaign::where('id_Camp', $id)

    					->join('users', 'campaigns.id', '=', 'users.id')
    					->get();

    	return view('/adm/detailC', ['detC' => $detC]);
    }
    public function user(){
    	$user = User::all();

    	return view('/adm/user', ['user' => $user]);
    }
}
