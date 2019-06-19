<?php

if (isset($_POST['cari'])) {
  $tgl1=$_POST['tgl1'];
  $tgl2=$_POST['tgl2'];
  $napro=$_POST['namapro'];
  $nape=$_POST['namapra'];

  if(empty($tgl1)){
  			$namaErr = "Silakan isi tanggal !<br><br>";
  		}
  if(empty($tgl2)){
  			$namaErr2 = "Silakan isi tanggal !<br><br>";
  		}
      if(empty($napro)){
      			$namaErr3 = "Proyek belum di isi<br>";
      		}
          if(empty($nape)){
                $namaErr4 = "Part belum di isi<br>";
              }
  $nama = mysqli_query($koneksi, "SELECT Penyebab FROM
    (SELECT perangkat_vm.Jenis, perangkat_vm.Nama_Perangkat, penyebab.Penyebab,
    COUNT(*) AS jumlah FROM trouble_et INNER JOIN penyebab ON (trouble_et.No_Penyebab=penyebab.No_Penyebab)
    JOIN perangkat_vm ON (trouble_et.No_PVM=perangkat_vm.No_PVM) JOIN projek ON (trouble_et.No_Projek=projek.No_Projek)
    WHERE projek.Nama_Projek='$napro'
    AND trouble_et.Tanggal_Done>='$tgl1'
    AND trouble_et.Tanggal_Done<='$tgl2'
    GROUP BY perangkat_vm.Nama_Perangkat, penyebab.Penyebab) a
    WHERE Nama_Perangkat ='$nape'");

  $count = mysqli_query($koneksi, "SELECT jumlah FROM
    (SELECT perangkat_vm.Jenis, perangkat_vm.Nama_Perangkat, penyebab.Penyebab,
    COUNT(*) AS jumlah FROM trouble_et INNER JOIN penyebab ON (trouble_et.No_Penyebab=penyebab.No_Penyebab)
    JOIN perangkat_vm ON (trouble_et.No_PVM=perangkat_vm.No_PVM) JOIN projek ON (trouble_et.No_Projek=projek.No_Projek)
    WHERE projek.Nama_Projek='$napro'
    AND trouble_et.Tanggal_Done>='$tgl1'
    AND trouble_et.Tanggal_Done<='$tgl2'
    GROUP BY perangkat_vm.Nama_Perangkat, penyebab.Penyebab) a WHERE Nama_Perangkat ='$nape'");

$table = mysqli_query($koneksi, " SELECT Tanggal_Done AS Tanggal_Kejadian,
projek.Nama_Projek AS Nama_Projek, stasiun.Nama_Stasiun AS Lokasi,
et.Nama_Perangkat AS Nama_Perangkat, penyebab.Penyebab AS Penyebab, COUNT(*) AS
Total_Kejadian FROM trouble_et INNER JOIN stasiun ON (trouble_et.IP=stasiun.IP)
JOIN projek ON (trouble_et.No_Projek=projek.No_Projek) JOIN et ON
(trouble_et.No_Perangkat=et.No_Perangkat) JOIN perangkat_vm ON
(trouble_et.No_PVM=perangkat_vm.No_PVM) JOIN penyebab ON
(trouble_et.No_Penyebab=penyebab.No_Penyebab) WHERE Nama_Projek='$napro' AND
perangkat_vm.Nama_Perangkat='$nape' AND Tanggal_Done>='$tgl1' AND
Tanggal_Done<='$tgl2' GROUP BY Nama_Perangkat,penyebab.`Penyebab` ORDER BY Penyebab,
Total_Kejadian DESC");
}
 ?>


 <!-- Area Chart Example-->
 <div class="card mb-3">
   <div class="card-header">
     <?php include 'form.php' ?>
   </div>
 </div>
 <div class="card mb-3">
   <div class="card-header">
     <i class="fas fa-chart-bar"></i>
     Grafik <?php echo $napro; ?> </div>
   <div class="card-body">
   <center><i class="fas fa-circle-notch"></i> <?php echo $nape; ?></center>
     <br><br>
     <canvas id="bar-chart-horizontal" width="100%" height="50"></canvas>

   </div>
 </div>
<!-- DataTables -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Data Detail Table </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Proyek</th>
            <th>Tanggal Kejadian</th>
            <th>Lokasi</th>
            <th>Nama Perangkat</th>
            <th>Penyebab</th>
            <th>Total Kejadian</th>
          </tr>
        </thead>

        <tbody>
          <?php while($rowtab = mysqli_fetch_array($table)) { ?>
                  <tr>
                    <td><?php echo $rowtab[1];  ?></td>
                    <td><?php echo $rowtab[0];  ?></td>
                    <td><?php echo $rowtab[2]; ?></td>
                    <td><?php echo $rowtab[3];  ?></td>
                    <td><?php echo $rowtab[4];  ?></td>
                    <td><?php echo $rowtab[5];  ?></td>
                  </tr>
                  <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
