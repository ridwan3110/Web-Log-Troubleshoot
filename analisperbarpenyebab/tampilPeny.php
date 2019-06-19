<?php include 'chartPeny.php'; ?>

<div class="card mb-3">
  <div class="card-header">
    <?php include 'formPeny.php' ?>
  </div>
</div>

<div class="row">
<div class="col-xl-12 col-sm-6 mb-3">
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-line"></i>
      Grafik pergantian barang Berdasarkan Penyebab <?php// echo $_POST['status']; ?> </div>
    <div class="card-body">
    <center><i class="fas fa-circle-notch"></i> <?php echo $nape; ?> </center>

    <canvas id="bar-chart-horizontalzpeny" width="100%" height="40"></canvas>


    </div>
  </div>
</div>
</div>

<!--
<div class="row">
<div class="col-xl-12 col-sm-6 mb-3">
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-line"></i>
      Grafik tidak pergantian <?php //echo $_POST['status']; ?> </div>
    <div class="card-body">
    <center><i class="fas fa-circle-notch"></i> <?php echo $nape; ?> </center>

    <canvas id="bar-chart-horizontalz1" width="100%" height="40"></canvas>


    </div>
  </div>
</div>
</div>

<!--<div class="card mb-3">
  <div class="card-header">
/**
  </div>
</div>

<div class="row">
<div class="col-xl-12 col-sm-6 mb-3">
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-line"></i>
      Grafik Pergantian <?php// echo $napro; ?> </div>
    <div class="card-body">
    <center><i class="fas fa-circle-notch"></i> <?php //echo $nape; ?> </center>

    <canvas id="bar-chart-horizontalz2" width="100%" height="40"></canvas>


    </div>
  </div>
</div>
</div>
