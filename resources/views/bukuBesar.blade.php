<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/BukuBesar/cari" method='post'>
        @csrf
        <select name="bulan" id=""></select>
        <select name="kodeper" id="">
            @foreach($perkiraan as $p)
                <option value="{{$p->nmr_perkiraan}}">{{$p->nmr_perkiraan}} {{$p->keterangan_nomor}}</option>
            @endforeach
        </select>
        <input type="submit" value='cari'>
    </form>
    <h3>Bulan: September</h3>
    <h3>Perk. {{$kodeper}}</h3>
    <h3>Debet</h3>
    @php
    $totaldebet = 0;
    @endphp
    <table border=1>
        <tr>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Debet</th>
        </tr>
        @foreach($transaksidebet as $t)
        
        <tr>
            <td>{{$t->tanggal}}</td>
            <td>{{$t->keterangan_transaksi}}</td>
            <td>@if($t->tipe == 'debet'){{$t->nominal}}@endif</td>
        </tr>
        @php
        
            $totaldebet += $t->nominal; 
        
        @endphp
        @endforeach
        <tr>
            <th colspan=2>Total</th>
            <th >{{$totaldebet}}</th>
        </tr>
    </table>
    <h3>Perk. {{$kodeper}}</h3>
    <h3>Kredit</h3>
    @php
    $totalKredit = 0;
    @endphp
    <table border=1>
        <tr>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Kredit</th>
        </tr>
        @foreach($transaksikredit as $t)
        
        <tr>
            <td>{{$t->tanggal}}</td>
            <td>{{$t->keterangan_transaksi}}</td>
            <td>@if($t->tipe == 'kredit'){{$t->nominal}}@endif</td>
        </tr>
        @php
        
            $totalKredit += $t->nominal; 
        
        @endphp
        @endforeach
        <tr>
            <th colspan=2>Total</th>
            <th >{{$totaldebet}}</th>
        </tr>
    </table>
</body>
</html>