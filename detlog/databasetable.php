<?php

if (isset($_POST['cari'])) {
  $tgl1=$_POST['tgl1'];
  $tgl2=$_POST['tgl2'];
  $projek=$_POST['projek'];
  $status=$_POST['status'];
  if(empty($tgl1)){
  			$namaErr = "Silakan isi tanggal !<br>";
  		}
      if(empty($tgl2)){
      			$namaErr2 = "Silakan isi tanggal !<br>";
      		}

  if ($_POST['projek']==""&&$_POST['status']=="") {

  $datatable = mysqli_query($koneksi,
  "SELECT NO AS NO, Tanggal_Masalah, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
  projek.Nama_Projek AS Projek , stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
  et.Type AS TYPE, perangkat_vm.Nama_Perangkat AS Part, Problem, `penyebab`.`Penyebab` AS Penyebab,
  Solusi AS solusi, Arah_gate,  trouble_et.`Status`,
  `user`.Nama_User AS Nama_Petugas
  FROM trouble_et INNER JOIN projek ON
  (projek.No_Projek=trouble_et.No_Projek)
  JOIN stasiun ON (stasiun.IP=trouble_et.IP)
  JOIN et ON (et.No_Perangkat=trouble_et.No_Perangkat)
  JOIN perangkat_vm ON (perangkat_vm.No_PVM=trouble_et.No_PVM)
  JOIN penyebab ON (`penyebab`.`No_Penyebab`=`trouble_et`.`No_Penyebab`)
  JOIN `user` ON(`user`.No_User=trouble_et.No_User)WHERE
  Tanggal_Done>='$tgl1' AND Tanggal_Done<='$tgl2'");
}elseif ($_POST['projek']!=""&&$_POST['status']=="") {

$datatable = mysqli_query($koneksi,
  "SELECT NO AS NO, Tanggal_Masalah, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
  projek.Nama_Projek AS Projek , stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
  et.Type AS TYPE, perangkat_vm.Nama_Perangkat AS Part, Problem, `penyebab`.`Penyebab` AS Penyebab,
  Solusi AS solusi, Arah_gate,  trouble_et.`Status`,
  `user`.Nama_User AS Nama_Petugas
  FROM trouble_et INNER JOIN projek ON
  (projek.No_Projek=trouble_et.No_Projek)
  JOIN stasiun ON (stasiun.IP=trouble_et.IP)
  JOIN et ON (et.No_Perangkat=trouble_et.No_Perangkat)
  JOIN perangkat_vm ON (perangkat_vm.No_PVM=trouble_et.No_PVM)
  JOIN penyebab ON (`penyebab`.`No_Penyebab`=`trouble_et`.`No_Penyebab`)
  JOIN `user` ON(`user`.No_User=trouble_et.No_User)WHERE projek.Nama_Projek='$projek'
  AND Tanggal_Done>='$tgl1' AND Tanggal_Done<='$tgl2'");
}elseif ($_POST['projek']==""&&$_POST['status']!="") {
$datatable = mysqli_query($koneksi,
  "SELECT NO AS NO, Tanggal_Masalah, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
  projek.Nama_Projek AS Projek , stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
  et.Type AS TYPE, perangkat_vm.Nama_Perangkat AS Part, Problem, `penyebab`.`Penyebab` AS Penyebab,
  Solusi AS solusi, Arah_gate,  trouble_et.`Status`,
  `user`.Nama_User AS Nama_Petugas
  FROM trouble_et INNER JOIN projek ON
  (projek.No_Projek=trouble_et.No_Projek)
  JOIN stasiun ON (stasiun.IP=trouble_et.IP)
  JOIN et ON (et.No_Perangkat=trouble_et.No_Perangkat)
  JOIN perangkat_vm ON (perangkat_vm.No_PVM=trouble_et.No_PVM)
  JOIN penyebab ON (`penyebab`.`No_Penyebab`=`trouble_et`.`No_Penyebab`)
  JOIN `user` ON(`user`.No_User=trouble_et.No_User)WHERE
  Tanggal_Done>='$tgl1' AND Tanggal_Done<='$tgl2'AND trouble_et.`Status`='$status'");
}else {
$datatable = mysqli_query($koneksi,
  "SELECT NO AS NO, Tanggal_Masalah, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
  projek.Nama_Projek AS Projek , stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
  et.Type AS TYPE, perangkat_vm.Nama_Perangkat AS Part, Problem, `penyebab`.`Penyebab` AS Penyebab,
  Solusi AS solusi,  Arah_gate, trouble_et.`Status`,
  `user`.Nama_User AS Nama_Petugas
  FROM trouble_et INNER JOIN projek ON
  (projek.No_Projek=trouble_et.No_Projek)
  JOIN stasiun ON (stasiun.IP=trouble_et.IP)
  JOIN et ON (et.No_Perangkat=trouble_et.No_Perangkat)
  JOIN perangkat_vm ON (perangkat_vm.No_PVM=trouble_et.No_PVM)
  JOIN penyebab ON (`penyebab`.`No_Penyebab`=`trouble_et`.`No_Penyebab`)
  JOIN `user` ON(`user`.No_User=trouble_et.No_User)WHERE projek.Nama_Projek='$projek'
  AND Tanggal_Done>='$tgl1' AND Tanggal_Done<='$tgl2'AND trouble_et.`Status`='$status'");
}
}

 ?>
