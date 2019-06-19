<?php
$restarea1=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS CURDATE FROM trouble_et INNER JOIN projek
ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='CCTV REST AREA' AND Tanggal_Masalah
BETWEEN DATE_ADD(CURDATE(), INTERVAL -1 WEEK) AND CURDATE()"));
$restarea2=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS curdate_minone FROM trouble_et INNER JOIN
projek ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='CCTV REST AREA' AND Tanggal_Masalah BETWEEN
DATE_ADD(CURDATE(), INTERVAL -2 WEEK) AND DATE_ADD(CURDATE(), INTERVAL -1 WEEK) "));
$restarea3=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS curdate_mintwo FROM trouble_et INNER JOIN
projek ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='CCTV REST AREA' AND Tanggal_Masalah BETWEEN
 DATE_ADD(CURDATE(), INTERVAL -3 WEEK) AND DATE_ADD(CURDATE(), INTERVAL -2 WEEK) "));
 $restarea4=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS curdate_mintri FROM trouble_et INNER JOIN
  projek ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='CCTV REST AREA' AND Tanggal_Masalah BETWEEN
  DATE_ADD(CURDATE(), INTERVAL -4 WEEK) AND DATE_ADD(CURDATE(), INTERVAL -3 WEEK) "));
 ?>
