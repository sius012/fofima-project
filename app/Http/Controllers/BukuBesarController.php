<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Perkiraan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BukuBesarController extends Controller
{
    public function index(){
        $perkiraan = Perkiraan::get();
        $bulan = array('1','2','3','4','5','6','7','8','9','10','11','12');
        $bulanString = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');


        $kodeper = '1001';
        $transDebet = array();
        $transKredit = array();
        $bulan = array('1','2','3','4','5','6','7','8','9','10','11','12');
        $bulanString = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

        for($i = 0;$i < count($bulan);$i++){
            $bulanews = (int) $bulan[$i];
            $transaksiD = Transaksi::where('nmr_perkiraan', $kodeper)->whereMonth('tanggal', $bulanews)->where('tipe','debet')->get();
            $transaksiK = Transaksi::where('nmr_perkiraan', $kodeper)->whereMonth('tanggal', $bulanews)->where('tipe','Kredit')->get();
            $transaksiD = $transaksiD->toArray();
            $transaksiK = $transaksiK->toArray();
            array_push($transDebet, $transaksiD);
            array_push($transKredit, $transaksiK);
        }

        return view('bukuBesar', compact('perkiraan','kodeper','transDebet','transKredit','bulanString','bulan'));
    }

    public function tampilkan(Request $req){
        $perkiraan = Perkiraan::get();
        $kodeper = $req->input('kodeper');
        $kodeper = $req->input('bulan');
        $transDebet = array();
        $transKredit = array();
        $bulan = array('1','2','3','4','5','6','7','8','9','10','11','12');
        $bulanString = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

        for($i = 0;$i < count($bulan);$i++){
            $bulanews = (int) $bulan[$i];
            $transaksiD = Transaksi::where('nmr_perkiraan', $kodeper)->whereMonth('tanggal', $bulanews)->where('tipe','debet')->get();
            $transaksiK = Transaksi::where('nmr_perkiraan', $kodeper)->whereMonth('tanggal', $bulanews)->where('tipe','Kredit')->get();
            $transaksiD = $transaksiD->toArray();
            $transaksiK = $transaksiK->toArray();
            array_push($transDebet, $transaksiD);
            array_push($transKredit, $transaksiK);
        }

        return view('bukuBesar', compact('perkiraan','kodeper','transDebet','transKredit','bulanString','bulan'));


    }
}
