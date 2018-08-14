<?php
  function Partition($array, $bawah, $atas) {
    $i = ($bawah - 1);
    $pivot = $array[$atas];

    for ($j=$bawah; $j <= $atas ; $j++) {
      if ($array[$j] <= $pivot) {
        $i = $i + 1;
        $temp =$array[$i];
        echo "array i = ".$array[$i]." , ";
        echo "array j = ".$array[$j]." , ";
        $array[$i] = $array[$j];
        $array[$j] = $temp;
        echo "array i = ".$array[$i]." , ";
        echo "array j = ".$array[$j]." , ";
      }
    }
    $temp = $array[$i+1];
    $array[$i+1] = $array[$atas];
    $array[$atas] = $temp;

    echo "partisi = ".$i."///";
    print_r($array);
    return ($i+1);
  }

  function QuickSort($array, $bawah, $atas) {
    if ($bawah < $atas) {
      $partisi = Partition($array, $bawah, $atas);

      QuickSort($array, $bawah, $partisi-1);
      QuickSort($array, $partisi+1, $atas);
      echo "output : ";
      print_r($array);
    }
  }

  $array = [6, 10, 4, 1, 5, 7];
  $n = count($array);
  $hasil = QuickSort($array, 0, $n-1);
  // echo "Sorted array is : ";
  for ($i=0; $i < $n; $i++) {
    // echo $hasil[$i].",";
    // echo QuickSort($array, 0, $n-1);
  }
  print_r($hasil);
  // for i in range(n):
  //     print ("%d" %arr[i]),
?>

//pseudocode

<!-- function partitionFunc(left, right, pivot)
   leftPointer = left
   rightPointer = right - 1

   while True do
      while A[++leftPointer] < pivot do
         //do-nothing
      end while

      while rightPointer > 0 && A[--rightPointer] > pivot do
         //do-nothing
      end while

      if leftPointer >= rightPointer
         break
      else
         swap leftPointer,rightPointer
      end if

   end while

   swap leftPointer,right
   return leftPointer

end function -->
