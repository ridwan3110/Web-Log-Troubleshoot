<?php
$myDate1= date("Y-m-d", strtotime( date( "Y-m-d", strtotime( date("Y-m-d") ) ) . "-1 month" ) );
$myDate2= date('Y-m-d');



if (isset($_POST['cari'])){
$tgl1=$_POST['tgl1'];
$tgl2=$_POST['tgl2'];
$projek=$_POST['namapro'];
//$catatan = "Klik Label Perangkat Jika Tidak Diperlukan";
if(empty($tgl1)){
      $namaErr = "Silakan isi tanggal !<br><br>";
    }
if(empty($tgl2)){
      $namaErr2 = "Silakan isi tanggal !<br><br>";
    }
    if(empty($projek)){
          $namaErr3 = "Proyek belum di isi<br>";
        }


$nama1=mysqli_query($koneksi,"SELECT `perangkat_vm`.`Nama_Perangkat` AS nama FROM `trouble_et` INNER JOIN `perangkat_vm` ON (`trouble_et`.`No_PVM`=
 `perangkat_vm`.`No_PVM`) JOIN `projek` ON (`trouble_et`.`No_Projek`=projek.`No_Projek`)
 WHERE `perangkat_vm`.`Jenis`='E-Ticketing'  AND trouble_et.Tanggal_Done>='$tgl1'
 AND trouble_et.Tanggal_Done<='$tgl2' AND
 `projek`.`Nama_Projek`='$projek' GROUP BY `perangkat_vm`.`Nama_Perangkat`");

 $count1=mysqli_query($koneksi,"SELECT COUNT(*) AS jumlah FROM `trouble_et` INNER JOIN `perangkat_vm` ON (`trouble_et`.`No_PVM`=
  `perangkat_vm`.`No_PVM`) JOIN `projek` ON (`trouble_et`.`No_Projek`=projek.`No_Projek`)
  WHERE `perangkat_vm`.`Jenis`='E-Ticketing'  AND trouble_et.Tanggal_Done>='$tgl1'
  AND trouble_et.Tanggal_Done<='$tgl2' AND
  `projek`.`Nama_Projek`='$projek' GROUP BY `perangkat_vm`.`Nama_Perangkat`");



  $nama2=mysqli_query($koneksi,"SELECT `perangkat_vm`.`Nama_Perangkat` AS nama FROM `trouble_et` INNER JOIN `perangkat_vm` ON (`trouble_et`.`No_PVM`=
   `perangkat_vm`.`No_PVM`) JOIN `projek` ON (`trouble_et`.`No_Projek`=projek.`No_Projek`)
   WHERE `perangkat_vm`.`Jenis`='Vending Machine'  AND trouble_et.Tanggal_Done>='$tgl1'
   AND trouble_et.Tanggal_Done<='$tgl2' AND
   `projek`.`Nama_Projek`='$projek' GROUP BY `perangkat_vm`.`Nama_Perangkat`");

   $count2=mysqli_query($koneksi,"SELECT COUNT(*) AS jumlah FROM `trouble_et` INNER JOIN `perangkat_vm` ON (`trouble_et`.`No_PVM`=
    `perangkat_vm`.`No_PVM`) JOIN `projek` ON (`trouble_et`.`No_Projek`=projek.`No_Projek`)
    WHERE `perangkat_vm`.`Jenis`='Vending Machine'  AND trouble_et.Tanggal_Done>='$tgl1'
    AND trouble_et.Tanggal_Done<='$tgl2' AND
    `projek`.`Nama_Projek`='$projek' GROUP BY `perangkat_vm`.`Nama_Perangkat`");

}

 ?>


<div class="card-header">
<?php include 'formall.php'; ?>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-chart-bar"></i>
        E-Ticketing </div>
      <div class="card-body">
      <center><?php echo $catatan ?></center>
      <br>
      <center><i class="fas fa-circle-notch"></i> Proyek <?php echo $projek; ?></center>

        <canvas id="bar-chart-horizontal" width="100%" height="50"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-chart-bar"></i>
        Vending Machine </div>
      <div class="card-body">
      <center><i class="fas fa-circle-notch"></i> Proyek <?php echo $projek; ?></center>
        <br><br>
        <canvas id="bar-chart-horizontal2" width="100%" height="50"></canvas>
      </div>
    </div>
  </div>
</div>
