<?php
$localname='localhost';
$username='root';
$password='backend123456';
$dbname='log';
$koneksi=mysqli_connect($localname,$username,$password,$dbname);
if(!$koneksi){echo"tidak Connect database";}
 ?>
