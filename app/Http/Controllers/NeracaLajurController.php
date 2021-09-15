<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perkiraan;
use App\Transaksi;

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


        return view('NeracaLajur', compact('neraca'));
    }
}
