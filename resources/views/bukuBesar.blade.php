<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fof-flex{
            margin: 20px;
        }
        table{
            border-collapse: collapse;
            width: 80vh;
            margin: 20px;
        }
        table td{
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
    </script>
</head>
<body>
    @php
        $bln = 'semua';
        $perk = 'semua';
        
        if(isset($bulanselect)){
            $bln = $bulanselect;
            $perk = $kodeper;
        }


    @endphp
    <h3>Bulan </h3>
    <h3>Perk. Semua</h3>
    <form action="/BukuBesar/cari" method='post'>
        @csrf
        <select name="bulan" id="">
             @for($j = 0;$j < count($bulan); $j++)
                <option value="{{$bulan[$j]}}" 
                @if($bulan[$j] == $bln)
                 selected
                  @endif >{{$bulanString[$j]}}</option>
             @endfor 
             <option value="semua" @if($bln == 'semua')
                 selected
                  @endif > Semua </option>
        </select>
        
        
        <select name="kodeper" id="">
            @foreach($perkiraan as $p)
                <option value="{{$p->nmr_perkiraan}}" @if($p->nmr_perkiraan == $perk)
                 selected
                  @endif>{{$p->nmr_perkiraan}} {{$p->keterangan_nomor}}</option>
            @endforeach
                <option value="semua"
                @if($perk == "semua")
                 selected
                  @endif> Semua </option>
        </select>
        <input type="submit" value='cari'>
    </form>

    
    <div class="fof-flex">
@php
    $totalDebet = 0;
    $totalKredit = 0;
@endphp

@php

if(isset($stat)){ 
switch($stat){
    case "allMonthAllItems": @endphp
        @for($i = 0; $i < count($trans); $i++)
        @php
                    $totalDebetT = 0;
                    $totalKreditT = 0;
                @endphp
            <table border=1>
                <tr>
                    <th>Tanggal</th>
                    <th>Nomer Perkiraan</th>
                    <th>Keterangan</th>
                    <th>Tipe</th>
                    <th>Nominal</th>
                </tr>
                @foreach($trans[$i] as $t)
                
                <tr>
                    <td>{{$t['tanggal']}}</td>
                    <td>{{$t['nmr_perkiraan']}}</td>
                    <td>{{$t['keterangan_transaksi']}}</td>
                    <td>{{$t['tipe']}}</td>
                    <td>{{$t['nominal']}}</td>
                </tr>
                @php
                    if($t['tipe'] == 'debet'){
                        $totalDebetT += $t['nominal'];
                    }else{
                        $totalKreditT += $t['nominal'];
                    }
                    
                    
                @endphp
                @endforeach
                <tr>
                    <th colspan=4>Total Debet</th>
                    <th>{{$totalDebetT}}</th>
                </tr>
                <tr>
                    <th colspan=4>Total Kredit</th>
                    <th>{{$totalKreditT}}</th>
                </tr>
            </table>
        @endfor
       @php break;
    case "allMonth": @endphp
    @for($i = 0; $i < count($trans); $i++)
        @php
                    $totalDebetT = 0;
                    $totalKreditT = 0;
                @endphp
            <table border=1>
                <tr>
                    <th>Tanggal</th>
                    <th>Nomer Perkiraan</th>
                    <th>Keterangan</th>
                    <th>Tipe</th>
                    <th>Nominal</th>
                </tr>
                @foreach($trans[$i] as $t)
                
                <tr>
                    <td>{{$t['tanggal']}}</td>
                    <td>{{$t['nmr_perkiraan']}}</td>
                    <td>{{$t['keterangan_transaksi']}}</td>
                    <td>{{$t['tipe']}}</td>
                    <td>{{$t['nominal']}}</td>
                </tr>
                @php
                    if($t['tipe'] == 'debet'){
                        $totalDebetT += $t['nominal'];
                    }else{
                        $totalKreditT += $t['nominal'];
                    }
                    
                    
                @endphp
                @endforeach
                <tr>
                    <th colspan=4>Total Debet</th>
                    <th>{{$totalDebetT}}</th>
                </tr>
                <tr>
                    <th colspan=4>Total Kredit</th>
                    <th>{{$totalKreditT}}</th>
                </tr>
            </table>
        @endfor

        @php break;
    case "allItems": @endphp
        

        @php break;
    default:  @endphp

    <table border=1>
        <tr>
            <th>Tanggal</th>
            <th>Nomor Perkiraan</th>
            <th>Keterangan</th>
            <th>Tipe</th>
            <th>Nominal</th>
        </tr>
        @foreach($transaksi as $t)
        <tr>
            <td align=center>{{$t->tanggal}}</td>
            <td align=center>{{$t->nmr_perkiraan}}</td>
            <td align=center>{{$t->keterangan_transaksi}}</td>
            <td align=center>{{$t->tipe}}</td>
            <td align=center>{{$t->nominal}}</td>
        </tr>
        @php
            if($t->tipe == 'debet'){
                $totalDebet += $t->nominal;
            }else{
                $totalKredit += $t->nominal;
            }
            
            
        @endphp
        @endforeach
        <tr>
            <td align=center colspan=4>Total Debet</td>
            <td align=center>{{$totalDebet}}</td>
        </tr><tr>
            <td align=center colspan=4>Total Kredit</td>
            <td align=center>{{$totalKredit}}</td>
        </tr>
    </table>
        @php break; 
}
    



 }else{ @endphp 
    <div class='fof-debet'>
    <table border=1>
        <tr>
            <th>Tanggal</th>
            <th>Nomor Perkiraan</th>
            <th>Keterangan</th>
            <th>Tipe</th>
            <th>Nominal</th>
        </tr>
        @foreach($transaksi as $t)
        <tr>
            <td align=center>{{$t->tanggal}}</td>
            <td align=center>{{$t->nmr_perkiraan}}</td>
            <td align=center>{{$t->keterangan_transaksi}}</td>
            <td align=center>{{$t->tipe}}</td>
            <td align=center>{{$t->nominal}}</td>
        </tr>
        @php
            if($t->tipe == 'debet'){
                $totalDebet += $t->nominal;
            }else{
                $totalKredit += $t->nominal;
            }
            
            
        @endphp
        @endforeach
        <tr>
            <td align=center colspan=4>Total Debet</td>
            <td align=center>{{$totalDebet}}</td>
        </tr><tr>
            <td align=center colspan=4>Total Kredit</td>
            <td align=center>{{$totalKredit}}</td>
        </tr>
    </table>
   

</div>    
@php } @endphp

</div>




    
</body>
</html>