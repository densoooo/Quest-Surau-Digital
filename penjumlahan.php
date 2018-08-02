<?php
$bilangan = array(-10, 2, -5, -3, 1, 7, 2, -7);
$sementara = 0;
$terbesar = 0;
$penjumlahan = 0;

print_r ($bilangan);
echo "</br>";
for ($i = 0; $i <= count($bilangan)-1; $i++){
  for ($j = $i+1; $j <= count($bilangan)-1; $j++) {
    $sementara = $bilangan[$i]+$bilangan[$j];
    if ($sementara > $terbesar) {
      $terbesar = $sementara;
      $penjumlahan = "$bilangan[$i] + $bilangan[$j]";
    }
  }
}
echo "Penjumlahan terbesar adalah $penjumlahan"."</br>";
echo "dengan hasil $terbesar"."</br>";
?>
