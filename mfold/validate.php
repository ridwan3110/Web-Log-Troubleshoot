<?php

  include "timeout.php";
if (isset($_POST['login'])) {
  include ('../database/config.php');
  $user = mysqli_real_escape_string($koneksi,$_POST['user']);
  $pass = mysqli_real_escape_string($koneksi,$_POST['pass']);
$login= mysqli_query($koneksi,"select * from user where Username='$user' and Password='$pass'");
$cek=mysqli_num_rows($login);
  if ($cek > 0) {
    session_start();

    $_SESSION['user']=$user;
      header("location:/web");
  }else {
  $namaErr = "Username atau Password Salah<br>";
  }
}

         ?>
