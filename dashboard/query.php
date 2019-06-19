<?php
$querytodayclosed=mysqli_fetch_array(mysqli_query($koneksi,"SELECT  COUNT(*) as total from trouble_et where Tanggal_Done=CURRENT_DATE And status='Done'"));
$querytodayopen=mysqli_fetch_array(mysqli_query($koneksi,"SELECT  COUNT(*) as total from trouble_et where Tanggal_Done=CURRENT_DATE And status='Open'"));
$queryallclosed=mysqli_fetch_array(mysqli_query($koneksi,"SELECT  COUNT(*) as total from trouble_et where status='Done'"));
$queryallopen=mysqli_fetch_array(mysqli_query($koneksi,"SELECT  COUNT(*) as total from trouble_et where status='Open'"));
 ?>

 <?php
  $datatableopentoday = mysqli_query($koneksi,
  "SELECT NO AS NO, jenisLaporan, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
  projek.Nama_Projek AS Projek , stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
  et.Type AS TYPE, perangkat_vm.Nama_Perangkat AS Part, Problem, `penyebab`.`Penyebab` AS Penyebab,
  Solusi AS solusi, trouble_et.`Status`,
  `user`.Nama_User AS Nama_Petugas
  FROM trouble_et INNER JOIN projek ON
  (projek.No_Projek=trouble_et.No_Projek)
  JOIN stasiun ON (stasiun.IP=trouble_et.IP)
  JOIN et ON (et.No_Perangkat=trouble_et.No_Perangkat)
  JOIN perangkat_vm ON (perangkat_vm.No_PVM=trouble_et.No_PVM)
  JOIN penyebab ON (`penyebab`.`No_Penyebab`=`trouble_et`.`No_Penyebab`)
  JOIN `user` ON(`user`.No_User=trouble_et.No_User)WHERE
  Tanggal_Done>=CURRENT_DATE AND Tanggal_Done<=CURRENT_DATE and trouble_et.`Status` ='Open'");

  $datatableopentoday2 = mysqli_query($koneksi,
  "SELECT *,NO AS NO, Tanggal_Masalah, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
  projek.Nama_Projek AS Projek ,
JenisLaporan,
 stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
  et.Type AS TYPE, Problem,
  Solusi AS solusi, sumber AS Sumber_aduan, trouble_et.`Status`,
  `user`.Nama_User AS Nama_Petugas
  FROM trouble_et INNER JOIN projek ON
  (projek.No_Projek=trouble_et.No_Projek)
  JOIN stasiun ON (stasiun.IP=trouble_et.IP)
  JOIN et ON (et.No_Perangkat=trouble_et.No_Perangkat)
  JOIN `user` ON(`user`.No_User=trouble_et.No_User)WHERE
  Tanggal_Done>=CURRENT_DATE AND Tanggal_Done<=CURRENT_DATE AND trouble_et.`Status` ='open'
 AND `JenisLaporan`!='PERMASALAHAN'");


  $datatableopenall=mysqli_query($koneksi,"SELECT NO AS NO, Tanggal_Masalah, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
  projek.Nama_Projek AS Projek , stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
  et.Type AS TYPE, perangkat_vm.Nama_Perangkat AS Part, Problem, `penyebab`.`Penyebab` AS Penyebab,
  Solusi AS solusi, trouble_et.`Status`,
  `user`.Nama_User AS Nama_Petugas
  FROM trouble_et INNER JOIN projek ON
  (projek.No_Projek=trouble_et.No_Projek)
  JOIN stasiun ON (stasiun.IP=trouble_et.IP)
  JOIN et ON (et.No_Perangkat=trouble_et.No_Perangkat)
  JOIN perangkat_vm ON (perangkat_vm.No_PVM=trouble_et.No_PVM)
  JOIN penyebab ON (`penyebab`.`No_Penyebab`=`trouble_et`.`No_Penyebab`)
  JOIN `user` ON(`user`.No_User=trouble_et.No_User)WHERE
  trouble_et.`Status` ='Open'");

  $datatableopenall2=mysqli_query($koneksi,"SELECT NO AS NO, Tanggal_Masalah, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
  projek.Nama_Projek AS Projek ,JenisLaporan, stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
  et.Type AS TYPE, perangkat_vm.Nama_Perangkat AS Part, Problem, `penyebab`.`Penyebab` AS Penyebab,
  Solusi AS solusi, trouble_et.`Status`,
  `user`.Nama_User AS Nama_Petugas
  FROM trouble_et INNER JOIN projek ON
  (projek.No_Projek=trouble_et.No_Projek)
  JOIN stasiun ON (stasiun.IP=trouble_et.IP)
  JOIN et ON (et.No_Perangkat=trouble_et.No_Perangkat)
  JOIN perangkat_vm ON (perangkat_vm.No_PVM=trouble_et.No_PVM)
  JOIN penyebab ON (`penyebab`.`No_Penyebab`=`trouble_et`.`No_Penyebab`)
  JOIN `user` ON(`user`.No_User=trouble_et.No_User)WHERE
  trouble_et.`Status` ='Open' and JenisLaporan!='PERMASALAHAN'");
 ?>


  <?php
   $datatabledonetoday = mysqli_query($koneksi,
   "SELECT NO AS NO, jenisLaporan, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
   projek.Nama_Projek AS Projek , stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
   et.Type AS TYPE, perangkat_vm.Nama_Perangkat AS Part, Problem, `penyebab`.`Penyebab` AS Penyebab,
   Solusi AS solusi, trouble_et.`Status`,
   `user`.Nama_User AS Nama_Petugas
   FROM trouble_et INNER JOIN projek ON
   (projek.No_Projek=trouble_et.No_Projek)
   JOIN stasiun ON (stasiun.IP=trouble_et.IP)
   JOIN et ON (et.No_Perangkat=trouble_et.No_Perangkat)
   JOIN perangkat_vm ON (perangkat_vm.No_PVM=trouble_et.No_PVM)
   JOIN penyebab ON (`penyebab`.`No_Penyebab`=`trouble_et`.`No_Penyebab`)
   JOIN `user` ON(`user`.No_User=trouble_et.No_User)WHERE
   Tanggal_Done>=CURRENT_DATE AND Tanggal_Done<=CURRENT_DATE and trouble_et.`Status` ='Done'");
  ?>

 <?php
$datatabledonetoday2=mysqli_query( $koneksi,"SELECT *,NO AS NO, Tanggal_Masalah, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
  projek.Nama_Projek AS Projek ,
jenisLaporan,
 stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
  et.Type AS TYPE, Problem,
  Solusi AS solusi, sumber AS Sumber_aduan, trouble_et.`Status`,
  `user`.Nama_User AS Nama_Petugas
  FROM trouble_et INNER JOIN projek ON
  (projek.No_Projek=trouble_et.No_Projek)
  JOIN stasiun ON (stasiun.IP=trouble_et.IP)
  JOIN et ON (et.No_Perangkat=trouble_et.No_Perangkat)
  JOIN `user` ON(`user`.No_User=trouble_et.No_User)WHERE
  Tanggal_Done>=CURRENT_DATE AND Tanggal_Done<=CURRENT_DATE AND trouble_et.`Status` ='Done'
 AND `JenisLaporan`!='PERMASALAHAN'");
  ?>
