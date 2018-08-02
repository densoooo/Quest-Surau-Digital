<?php
$menit = 16;
$jam = 10;

$selisih = abs(0.5 * (60 * $jam - 11 * $menit));
if ($selisih > 180) {
  $selisih = 360 - $selisih;
}
echo $selisih;
