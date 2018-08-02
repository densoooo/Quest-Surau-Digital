<?php
  function Partition($array, $bawah, $atas) {
    $i = ($bawah - 1);
    $pivot = $array[$atas];

    for ($j=$bawah; $j <= $atas ; $j++) {
      if ($array[$j] <= $pivot) {
        $i = $i + 1;
        $temp =$array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $temp;
      }
    }
    $temp = $array[$i+1];
    $array[$i+1] = $array[$atas];
    $array[$atas] = $temp;

    return ($i+1);
  }

  function QuickSort($array, $bawah, $atas) {
    if ($bawah < $atas) {
      $partisi = Partition($array, $bawah, $atas);

      QuickSort($array, $bawah, $partisi-1);
      QuickSort($array, $partisi+1, $atas);
    }
  }

  $array = [10, 7, 8, 9, 1, 5];
  $n = count($array);
  $hasil = QuickSort($array, 0, $n-1);
  echo "Sorted array is : ";
  for ($i=0; $i < $n; $i++) {
    echo $array[$i].",";
    echo QuickSort($array, 0, $n-1);
  }
  // for i in range(n):
  //     print ("%d" %arr[i]),
?>
