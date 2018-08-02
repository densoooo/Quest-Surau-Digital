<?php
  function BinarySearch($array, $bawah, $atas, $x) {
      if ($atas >= $bawah) {
        $mid = $bawah + ($atas - $bawah) / 2;
        if ($array[$mid] == $x) {
            return floor($mid);
          }

        if ($array[$mid] > $x) {
            return BinarySearch($array, $bawah, $mid - 1, $x);
          }
        return BinarySearch($array, $mid + 1, $atas, $x);
      }
    return -1;
  }

  $array = array(2, 3, 4, 10, 40);
  $n = count($array);
  $x = 10;
  $hasil = BinarySearch($array, 0, $n - 1, $x);
  if(($hasil == -1)){
    echo "Element is not present in array";
  } else {
    echo "Element is present at index ",$hasil;
  }
?>
