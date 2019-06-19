<?php include 'query.php';
header("Refresh:60");
?>
<ol class="breadcrumb">
          <li class="breadcrumb-item">
            Memperbaharui Hari Ini
          </li>
        </ol>


<div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-check"></i>
                </div>
                <div class="mr-5">Hari ini
                  <br>
                <font size="20">  <b><?php echo $querytodayclosed['total']; ?></b> </font><br> Masalah Selesai</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="?page=d11back">
                <span class="float-left">Lihat rincian</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Hari ini
                  <br>
                <font size="20">  <b><?php echo $querytodayopen['total']; ?></b> </font> <br> Masalah Belum Selesai</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="?page=d10back">
                <span class="float-left">Lihat rincian</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-check"></i>
                </div>
                <div class="mr-5">Sampai Saat ini
                  <br>
                <font size="20">  <b><?php echo $queryallclosed['total']; ?></b> </font><br> Masalah Selesai</div>
              </div>

            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Sampai Saat ini
                  <br>
                <font size="20">  <b><?php echo $queryallopen['total']; ?></b> </font> <br> Masalah Belum Selesai</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="?page=d01back">
                <span class="float-left">Lihat rincian</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

<div class="row">
<div class="col-xl-12 col-sm-6 mb-3">
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-bar"></i>
      Grafik Status Permasalahan </div>
    <div class="card-body">
    <center><i class="fas fa-circle-notch"></i> Terbaru Hari Ini </center>

      <canvas id="bar-chart-grouped" width="100%" height="30%"></canvas>


    </div>
  </div>
</div>
</div>

    <!-- line grafik
  <div class="row">
  <div class="col-xl-12 col-sm-6 mb-3">
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-chart-line"></i>
        Grafik Progres kerusakan projek </div>
      <div class="card-body">
      <center><i class="fas fa-circle-notch"></i> Terbaru 4 minggu terakhir </center>

      <canvas id="line-chart1" width="100%" height="40"></canvas>


      </div>
    </div>
  </div>
  </div>
-->
