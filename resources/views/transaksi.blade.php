<html>
    <head>
        <title>Nomor Perkiraan</title>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/transaksi.js')}}"></script>
    </head>
    <body>
        <div class="form">
       
            <form method="post" action="/transaksi/memasukan"   enctype="multipart/form-data">
            @csrf
                <label for="">Masukan tanggal</label><br>
                <input type="date" placeholder="tanggal" required name='tanggal'><br>
                <label for="">Perkiraan</label><br>
                <select  id="" required name='perkiraan'>
                    @foreach($perkiraan as $p)
                        <option value="{{$p->nmr_perkiraan}}">{{$p->nmr_perkiraan}} {{$p->keterangan_nomor}} </option>
                    @endforeach
                </select><br>
                
                <label for="">Nominal</label><br>
                <input type="text" placeholder="nominal" required name='nominal'><br>
                <label for="">Kode untuk kredit</label><br>
                <select  id="" required name='kredit'>
                    @foreach($perkiraan as $p)
                        <option value="{{$p->nmr_perkiraan}}">{{$p->nmr_perkiraan}} {{$p->keterangan_nomor}} </option>
                    @endforeach
                </select><br>
                <label for="">Keterangan</label><br>
                <input type="text" placeholder="keterangan" required name='keterangan'><br>
                <input type="file" placeholder="Masukan gambar nota" required name='file'><br>
                <input type="submit" >
            </form>
        </div>
        
    </body>
</html>