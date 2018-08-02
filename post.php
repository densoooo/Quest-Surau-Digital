<?php
  // print_r($_POST);
  // echo "</br>";
  echo "Panjang = ".$_POST['panjang'];
  echo "</br>";
  echo "Tinggi = ".$_POST['tinggi'];
  echo "</br>";
  echo "Kelas = ".$_POST['kelas'];
  echo "</br>";
  echo "Nama = ".$_POST['nama'];
  // undifined index artinya index / key pada array tidak ditemukan
  // echo "</br>";
  // print_r($_GET);
  $panjang = $_POST['panjang'];
  echo "</br>";
  echo "panjang 2 = $panjang";
  echo "</br>";
  echo 'panjang 2 = $panjang';
  // kutip 2 = kalau di dalam kutip ada variable maka akan tereksekusi
  $hasil = ($_POST['panjang']*$_POST['tinggi'])/2;
  echo "</br>";
  echo "luas segitiga = $hasil";
?>
