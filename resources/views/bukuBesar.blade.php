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
        table{
            border-collapse: collapse;
            width: 80vh;
        }
        table td{
        }
    </style>
</head>
<body>
    @php
        $bln = '';
        $perk = '';

    @endphp
    <form action="/BukuBesar/cari" method='post'>
        @csrf
        <select name="bulan" id="">
             @for($j = 0;$j < count($bulan); $j++)
                <option value="{{(int) $bulan[$j]}}" @php echo 'selected' @endphp>{{$bulanString[$j]}}</option>
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
    @for($i = 0;$i < count($trans); $i++)
        @php
        $totalDebet = 0;
        $totalKredit = 0;
        @endphp
        <h3>Bulan: {{$bulanString[$i]}}      Perk. {{$kodeper}}</h3>
        <table border=1 cellspacing=10 cellpadding=10>
            <tr>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Tipe</th>
                <th>Nominal</th>
            </tr>
            @foreach($trans[$i] as $pie)
            <tr>
                <td>{{$pie['tanggal']}}</td>
                <td>{{$pie['keterangan_transaksi']}}</td>
                <td>{{$pie['tipe']}}</td>
                <td>{{$pie['nominal']}}</td>
            </tr>
            @php
            if($pie['tipe'] == 'debet'){
            $totalDebet += $pie['nominal'];
            }else{
            $totalKredit += $pie['nominal'];
            }
            @endphp
            @endforeach
            <tr>
                <td colspan=3>Total Debet</td>
                <td>{{$totalDebet}}</td>
            </tr>
            <tr>
                <td colspan=3>Total Kredit</td>
                <td>{{$totalKredit}}</td>
            </tr>
        </table>
    @endfor

</div>
</div>




    
</body>
</html>