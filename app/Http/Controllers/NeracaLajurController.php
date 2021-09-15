<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perkiraan;
use App\Transaksi;
use Illuminate\Support\Facades\DB;

class NeracaLajurController extends Controller
{
    public function index(){
        $bulan = array('1','2','3','4','5','6','7','8','9','10','11','12');
        $bulanString = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Novermber','Desember');
        $perkiraan = Perkiraan::all();
        $perkiraan->toArray();

        $neraca = array();

        for($i = 0; $i < $perkiraan->count(); $i++){
            array_push($neraca, $perkiraan[$i]);
            $nmr_perk = $perkiraan[$i]['nmr_perkiraan'];
            for($j = 0; $j < count($bulanString); $j++){
                $mnth = $bulanString[$j];
                $mnth1 = $bulan[$j];

                
                $debetq = Transaksi::where('nmr_perkiraan', $nmr_perk)->whereMonth('tanggal', $mnth1)->where('tipe', 'debet')->sum('nominal');
                $kreditq = Transaksi::where('nmr_perkiraan', $nmr_perk)->whereMonth('tanggal', $mnth1)->where('tipe', 'kredit')->sum('nominal');


                $neraca[$i][$mnth." Debet"] = $debetq;
                $neraca[$i][$mnth." Kredit"] = $kreditq;
            }
        }


        return view('NeracaLajur', compact('neraca','bulanString', 'perkiraan'));
    }

  /*  public function cari(Request $request)
	{

		$cari = $request->cari;
 
    	
		$neraca = DB::table('nomor_perkiraan')
		->where('nmr_perkiraan','like',"%".$cari."%")
		->paginate();
 
    	
		return view('NeracaLajur',['neraca' => $neraca]);
 
	}*/

    // public function search(Request $request)
    // {
    //     $keyword = $request->search;
    //     $users = user::where('nmr_perkiraan', 'like', "%" . $keyword . "%")->paginate(5);
    //     return view('NeracaLajur', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    public function cari(Request $req){
        $perkiraan = Perkiraan::all();
        $nomor = $req->input('nomor');
        $bulan = array('1','2','3','4','5','6','7','8','9','10','11','12');
        $bulanString = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Novermber','Desember');
        $perkiraans = Perkiraan::where('nmr_perkiraan', $nomor)->get();
        

        $neraca = array();

        for($i = 0; $i < count($perkiraans); $i++){
            array_push($neraca, $perkiraans[$i]);
            $nmr_perk = $perkiraans[$i]['nmr_perkiraan'];
            for($j = 0; $j < count($bulanString); $j++){
                $mnth = $bulanString[$j];
                $mnth1 = $bulan[$j];

                
                $debetq = Transaksi::where('nmr_perkiraan', $nmr_perk)->whereMonth('tanggal', $mnth1)->where('tipe', 'debet')->where('nmr_perkiraan', $nomor)->sum('nominal');
                $kreditq = Transaksi::where('nmr_perkiraan', $nmr_perk)->whereMonth('tanggal', $mnth1)->where('tipe', 'kredit')->where('nmr_perkiraan', $nomor)->sum('nominal');


                $neraca[$i][$mnth." Debet"] = $debetq;
                $neraca[$i][$mnth." Kredit"] = $kreditq;
            }
        }


        return view('NeracaLajur', compact('neraca','bulanString','perkiraan'));
    }
 
}


