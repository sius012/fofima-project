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
        return view('bukuBesar', compact('perkiraan'));
    }

    public function tampilkan(Request $req){
        $perkiraan = Perkiraan::get();
        
        $kodeper = $req->input('kodeper');
        $tanggal = $req->input('tanggal');
        $day = Carbon::now()->format('m');
        $transaksidebet = DB::table('buku_besar')->whereMonth('tanggal',$day)->where("nmr_perkiraan", $kodeper)->where("tipe", "debet")->get();
        $transaksikredit = DB::table('buku_besar')->whereMonth('tanggal',$day)->where("nmr_perkiraan", $kodeper)->where("tipe", "kredit")->get();
        return view('bukuBesar', compact('perkiraan','transaksidebet','transaksikredit','kodeper'));
    }
}
