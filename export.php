<?php
  //
  // establish database connection
  //
//include 'database/config.php';
  //
  // execute sql query
  //

if (isset($_POST['export'])) {
  // code...
  $tgl1=$_POST['tgl1'];
  $tgl2=$_POST['tgl2'];
  $projek=$_POST['projek'];
  $status=$_POST['status'];


  if ($_POST['projek']==""&&$_POST['status']=="") {

  $nico = mysqli_query($koneksi,
  "SELECT NO AS NO, Tanggal_Masalah, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
  projek.Nama_Projek AS Projek , stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
  et.Type AS TYPE, perangkat_vm.Nama_Perangkat AS Part, Problem, `penyebab`.`Penyebab` AS Penyebab,
  Solusi AS solusi,Arah_gate, trouble_et.`Status`,
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

  $nico = mysqli_query($koneksi,
    "SELECT NO AS NO, Tanggal_Masalah, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
    projek.Nama_Projek AS Projek , stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
    et.Type AS TYPE, perangkat_vm.Nama_Perangkat AS Part, Problem, `penyebab`.`Penyebab` AS Penyebab,
    Solusi AS solusi,Arah_gate, trouble_et.`Status`,
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
  $nico = mysqli_query($koneksi,
    "SELECT NO AS NO, Tanggal_Masalah, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
    projek.Nama_Projek AS Projek , stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
    et.Type AS TYPE, perangkat_vm.Nama_Perangkat AS Part, Problem, `penyebab`.`Penyebab` AS Penyebab,
    Solusi AS solusi,Arah_gate, trouble_et.`Status`,
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
  $nico = mysqli_query($koneksi,
    "SELECT NO AS NO, Tanggal_Masalah, Jam_Masalah, Tanggal_Done, Jam_Done, totaldowntime AS Downtime,
    projek.Nama_Projek AS Projek , stasiun.Nama_Stasiun AS Stasiun, et.Nama_Perangkat AS Nama_Perangkat,
    et.Type AS TYPE, perangkat_vm.Nama_Perangkat AS Part, Problem, `penyebab`.`Penyebab` AS Penyebab,
    Solusi AS solusi, Arah_gate,trouble_et.`Status`,
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


//
// send response headers to the browser
// following headers instruct the browser to treat the data as a csv file called export.csv
//

ob_end_clean();
ob_start();
//
// output header row (if atleast one row exists)
//
$kiwong = mysqli_fetch_assoc( $nico );
if ( $kiwong )
{
  echocsv( array_keys( $kiwong ) );
}
//
// output data rows (if atleast one row exists)
//

header("Content-type: application/vnd-ms-excel");
//header( 'Content-Type: text/csv' );
header( 'Content-Disposition: attachment;filename=Logfile_'.$tgl1.'_s/d_'.$tgl2.'.csv' );
header("Pragma: no-cache");
header("Expires: 0");
while ( $kiwong )
{
  echocsv( $kiwong );
  $kiwong = mysqli_fetch_assoc( $nico );
}
exit();

//
// echocsv function
//
// echo the input array as csv data maintaining consistency with most CSV implementations
// * uses double-quotes as enclosure when necessary
// * uses double double-quotes to escape double-quotes
// * uses CRLF as a line separator
//
}

function echocsv( $fields )
{
  $separator = '';
  foreach ( $fields as $field )
  {
    if ( preg_match( '/\\r|\\n|,|"/', $field ) )
    {
      $field = '"' . str_replace( '"', '""', $field ) . '"';
    }
    echo $separator . $field;
    $separator = ',';
  }
  echo "\r\n";

}




?>
