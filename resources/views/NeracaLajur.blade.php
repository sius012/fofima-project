<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neracar Lajur</title>
    <style>
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="/neracaLajur/cari" method="POST">
        @csrf
        <h2>Yayasan SMK Bagimu Negeriku</h2><br>
        <h2>Neraca Lajur</h2>
        <h2>Tahun 2021</h2>
        <select name="nomor" id="">
          @foreach($perkiraan as $p)
            <option value="{{$p->nmr_perkiraan}}">{{$p->nmr_perkiraan}} {{$p->keterangan_nomor}}</option>
          @endforeach
        </select>
        <button>Cari</button>
    </form>
    <br><br>
    <table border='1'>
    <tr>
        <th rowspan=2>Keterangan</th>
        <th rowspan=2>Nomor Perkiraan</th>
        <th colspan=2>Januari</th>
        <th colspan=2>Februari</th>
        <th colspan=2>Maret</th>
        <th colspan=2>April</th>
        <th colspan=2>Mei   </th>
        <th colspan=2>Juni</th>
        <th colspan=2>Juli</th>
        <th colspan=2>Agustus</th>
        <th colspan=2>September</th>
        <th colspan=2>Oktober</th>
        <th colspan=2>November</th>
        <th colspan=2>Desember</th>
    </tr>
    <tr>
        <th>Debet</th>
        <th>Kredit</th>
        <th>Debet</th>
        <th>Kredit</th>
        <th>Debet</th>
        <th>Kredit</th>
        <th>Debet</th>
        <th>Kredit</th>
        <th>Debet</th>
        <th>Kredit</th>
        <th>Debet</th>
        <th>Kredit</th>
        <th>Debet</th>
        <th>Kredit</th>
        <th>Debet</th>
        <th>Kredit</th>
        <th>Debet</th>
        <th>Kredit</th>
        <th>Debet</th>
        <th>Kredit</th>
        <th>Debet</th>
        <th>Kredit</th>
        <th>Debet</th>
        <th>Kredit</th>
    </tr>
    @foreach($neraca as $neracas)
    <tr>   
        <th align=left>{{$neracas['keterangan_nomor']}}</th>
        <th>{{$neracas['nmr_perkiraan']}}</th>
        @foreach($bulanString as $bulans)
        <th>@if($neracas[$bulans. ' Debet'] > 0)Rp. {{number_format($neracas[$bulans. ' Debet'])}}@endif</th>
        <th>@if($neracas[$bulans. ' Kredit'] > 0)Rp. {{number_format($neracas[$bulans. ' Kredit'])}}@endif</th>
        @endforeach
    </tr>
    @endforeach
    
</table>
</form>
</body>
</html>