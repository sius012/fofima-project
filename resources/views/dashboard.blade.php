@section('title', ' Dashboard')
@section('icon', 'bi-speedometer2')
@extends("layout.keuangan")
@section("konten")
  

    <div class="row text-white ">

        <div class="card  ml-5" style=" background-color:#FF0000; width: 17rem; margin-left: 12px; height:150px ">
          <div class="card-body">
              <div class="card-body-icon">
              <i class="bi bi-file-earmark-text"></i>
              </div>
              <h5 class="card-title text-white ">PEMASUKAN HARI INI</h5>
              <div class="fs-3">Rp 5 jt </div>
              <a href="#">
              <p class="card-text text-white fw-bold" ><br>Lihat Detail <i class = "fas fa-angle-double-right ml-2"></i></p></a>
          </div>
        </div>

        <div class="card ml-5" style="  background-color:#04009A; width: 17rem; margin-left: 12px; ">
            <div class="card-body">
              <div class="card-body-icon">
              <i class="bi bi-file-bar-graph"></i>
              </div>
              <h5 class="card-title text-white  ">PEMASUKAN MINGGU INI</h5>
              <div class="fs-3">Rp 10 jt </div>
              <a href="#">
              <p class="card-text text-white  fw-bold"><br>Lihat Detail <i class = "fasfa-angle-double-right ml-2"></i></p></a>
           </div>
        </div>

        <div class="card ml-5" style="  background-color:#FF7600; width: 17rem; margin-left: 12px; ">
            <div class="card-body">
              <div class="card-body-icon">
              <i class="bi bi-file-earmark-bar-graph"></i> 
              </div>
              <h5 class="card-title text-white">PEMASUKAN BULAN INI</h5>
              <div class="fs-3">Rp 50 jt </div>
              <a href="#">
              <p class="card-text text-white  fw-bold"><br>Lihat Detail <i class = "fasfa-angle-double-right ml-2"></i></p></a>
           </div>
        </div>

        <div class="card  ml-5" style=" background-color:#006400; width: 17rem; margin-left: 12px; ">
            <div class="card-body">
               <div class="card-body-icon">
               <i class="bi bi-bar-chart-line"></i>
               </div>
               <h5 class="card-title text-white ">PEMASUKAN TAHUN INI</h5>
               <div class="fs-3">Rp 250 jt </div>
               <a href="#" >
               <p class="card-text text-white  fw-bold"><br>Lihat Detail <i class = "fasfa-angle-double-right ml-2"></i></p></a>
            </div>
        </div>

    </div>

     <div class="row mt-3 text-white ">

      <div class="card ml-5" style=" background-color:#FF4848; width: 17rem; margin-left: 12px; height:150px ">
          <div class="card-body">
              <div class="card-body-icon">
              <i class="bi bi-file-earmark-text"></i>
           </div>
           <h5 class="card-title text-white ">PENGELUARAN HARI INI</h5>
           <div class="fs-3">Rp 5 jt </div>
           <a href="#">
          <p class="card-text text-white fw-bold" ><br>Lihat Detail <i class = "fasfa-angle-double-right ml-2"></i></p></a>
       </div>
      </div>
      <div class="card ml-5" style=" background-color:#0F52BA; width: 17rem; margin-left: 12px; ">
      <div class="card-body">
    <div class="card-body-icon">
    <i class="bi bi-file-bar-graph"></i>
    </div>
    <h5 class="card-title text-white  ">PENGELUARAN MINGGU INI</h5>
    <div class="fs-3">Rp 10 jt </div>
    <a href="#">
    <p class="card-text text-white  fw-bold"><br>Lihat Detail <i class = "fasfa-angle-double-right ml-2"></i></p></a>
  </div>
</div>
      <div class="card  ml-5" style=" background-color:#F7A440; width: 17rem; margin-left: 12px; ">
  <div class="card-body">
    <div class="card-body-icon">
    <i class="bi bi-file-earmark-bar-graph"></i> 
    </div>
    <h5 class="card-title text-white">PENGELUARAN BULAN INI</h5>
    <div class="fs-3">Rp 50 jt </div>
    <a href="#">
    <p class="card-text text-white  fw-bold"><br>Lihat Detail <i class = "fasfa-angle-double-right ml-2"></i></p></a>
  </div>
</div>
      <div class="card  ml-5" style="  background-color:#55cd4c;width: 17rem; margin-left: 12px; ">
  <div class="card-body">
    <div class="card-body-icon">
    <i class="bi bi-bar-chart-line"></i>
    </div>
    <h5 class="card-title text-white ">PENGELUARAN TAHUN INI</h5>
    <div class="fs-3">Rp 250 jt </div>
    <a href="#" >
    <p class="card-text text-white  fw-bold"><br>Lihat Detail <i class = "fasfa-angle-double-right ml-2"></i></p></a>
  </div>
</div>
  </div>
      @endsection