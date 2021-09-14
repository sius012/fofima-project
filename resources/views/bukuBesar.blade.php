<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fof-flex{
            display: flex;
            margin: 20px;
            justify-content: center;
        }
    </style>
</head>
<body>
    <form action="/BukuBesar/cari" method='post'>
        @csrf
        <select name="bulan" id="">
             @for($j = 0;$j < count($bulan); $j++)
                <option value="{{(int) $bulan[$j]}}">{{$bulanString[$j]}}</option>
            @endfor
        </select>
        <select name="kodeper" id="">
            @foreach($perkiraan as $p)
                <option value="{{$p->nmr_perkiraan}}">{{$p->nmr_perkiraan}} {{$p->keterangan_nomor}}</option>
            @endforeach
        </select>
        <input type="submit" value='cari'>
    </form>

    
    <div class="fof-flex">
<div class='fof-debet'>
    @for($i = 0;$i < count($transDebet); $i++)
        @php
        $totaldebet = 0;
        @endphp
        <h3>Bulan: {{$bulanString[$i]}}</h3>
        <h3>Perk. {{$kodeper}}</h3>
        <h3>Debet</h3>
        <table border=1>
            <tr>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Debet</th>
            </tr>
            @foreach($transDebet[$i] as $pie)
            <tr>
                <td>{{$pie['tanggal']}}</td>
                <td>{{$pie['keterangan_transaksi']}}</td>
                <td>{{$pie['nominal']}}</td>
            </tr>
            @php
            $totaldebet += $pie['nominal'];
            @endphp
            @endforeach
            <tr>
                <td colspan=2>Total</td>
                <td>{{$totaldebet}}</td>
            </tr>
        </table>
    @endfor

</div>

<div class="fof-kredit">
@for($i = 0;$i < count($transKredit); $i++)
        @php
        $totalKredit = 0;
        @endphp
        <h3>Bulan: {{$bulanString[$i]}}</h3>
        <h3>Perk. {{$kodeper}}</h3>
        <h3>Kredit</h3>
        <table border=1>
            <tr>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Kredit</th>
            </tr>
            @foreach($transKredit[$i] as $pie)
            <tr>
                <td>{{$pie['tanggal']}}</td>
                <td>{{$pie['keterangan_transaksi']}}</td>
                <td>{{$pie['nominal']}}</td>
            </tr>
            @php
            $totalKredit += $pie['nominal'];
            @endphp
            @endforeach
            <tr>
                <td colspan=2>Total</td>
                <td>{{$totalKredit}}</td>
            </tr>
        </table>
    @endfor
</div>
</div>




    
</body>
</html>