<?php

if (isset($_POST['cari'])) {
$napro=$_POST['nampro'];
$thn=$_POST['tahun'];
if(empty($napro)){
      $namaErr = "Projek masih kosong<br>";
    }
    if(empty($thn)){
          $namaErr2 = "Tahun masih kosong<br>";
        }

$jan=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS CURDATES FROM trouble_et INNER JOIN projek
ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='$napro'
AND Tanggal_Masalah >= '$thn-01-01' AND Tanggal_Masalah <= '$thn-01-31'"));

$feb=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS CURDATES FROM trouble_et INNER JOIN projek
ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='$napro'
AND Tanggal_Masalah >= '$thn-02-01' AND Tanggal_Masalah <= '$thn-02-31'"));

$mar=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS CURDATES FROM trouble_et INNER JOIN projek
ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='$napro'
AND Tanggal_Masalah >= '$thn-03-01' AND Tanggal_Masalah <= '$thn-03-31'"));

$apr=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS CURDATES FROM trouble_et INNER JOIN projek
ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='$napro'
AND Tanggal_Masalah >= '$thn-04-01' AND Tanggal_Masalah <= '$thn-04-31'"));

$mei=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS CURDATES FROM trouble_et INNER JOIN projek
ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='$napro'
AND Tanggal_Masalah >= '$thn-05-01' AND Tanggal_Masalah <= '$thn-05-31'"));

$jun=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS CURDATES FROM trouble_et INNER JOIN projek
ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='$napro'
AND Tanggal_Masalah >= '$thn-06-01' AND Tanggal_Masalah <= '$thn-06-31'"));

$jul=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS CURDATES FROM trouble_et INNER JOIN projek
ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='$napro'
AND Tanggal_Masalah >= '$thn-07-01' AND Tanggal_Masalah <= '$thn-07-31'"));

$aug=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS CURDATES FROM trouble_et INNER JOIN projek
ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='$napro'
AND Tanggal_Masalah >= '$thn-08-01' AND Tanggal_Masalah <= '$thn-08-31'"));

$sep=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS CURDATES FROM trouble_et INNER JOIN projek
ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='$napro'
AND Tanggal_Masalah >= '$thn-09-01' AND Tanggal_Masalah <= '$thn-09-31'"));

$okt=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS CURDATES FROM trouble_et INNER JOIN projek
ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='$napro'
AND Tanggal_Masalah >= '$thn-10-01' AND Tanggal_Masalah <= '$thn-10-31'"));

$nov=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS CURDATES FROM trouble_et INNER JOIN projek
ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='$napro'
AND Tanggal_Masalah >= '$thn-11-01' AND Tanggal_Masalah <= '$thn-11-31'"));

$des=mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) AS CURDATES FROM trouble_et INNER JOIN projek
ON (trouble_et.No_Projek=projek.No_Projek)  WHERE projek.nama_projek='$napro'
AND Tanggal_Masalah >= '$thn-12-01' AND Tanggal_Masalah <= '$thn-12-31'"));
}
 ?>
