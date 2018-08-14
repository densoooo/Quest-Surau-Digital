<html>
   <body>
     <div class="wrapper">
       <form method="post">
         <div>
           <label>Masukkan Kalimat</label>
           <input type="text" name="text"/>
         </div>
         <div>
           <input type="submit" name="submit" value="kirim"/>
         </div>
       </form>
     </div>
   </body>
</html>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $str = $_POST['text'];
    $arrayText = str_split($str);
    $kata = null;
    $spasi = null;
    $textReversed = null;

    for ($i=0; $i < strlen($str); $i++) {
      if ($i != strlen($str)-1) {
        if (ctype_space($str[$i]) || $str[$i] === '') {
          $spasi .= $str[$i];
          $textReversed = $kata . $textReversed;
          $kata = null;
        } else {
          $kata .= $str[$i];
          $textReversed = $spasi . $textReversed;
          $spasi = null;
        }
      } else {
        if (ctype_space($str[$i]) || $str[$i] === '') {
          $spasi .= $str[$i];
          $textReversed = $spasi . $textReversed;
        } else {
          $kata .= $str[$i];
          $textReversed = $kata . $textReversed;
        }
      }
      // echo $str[$i];
      // echo $i.". ".$textReversed."</br>";
    }
    // echo $textReversed;

    // foreach ($arrayText as $huruf) {
    //   if (ctype_space($huruf) || $huruf === '') {
    //     $spasi .= $huruf;
    //     $textReversed = $kata . $textReversed;
    //     $kata = null;
    //   } else {
    //     $kata .= $huruf;
    //     $textReversed = $spasi . $textReversed;
    //     $spasi = null;
    //   }
    //   echo $textReversed.",";
    // }
    // ========
    // for ($i=count($arrayText)-1; $i >= 0 ; $i--) {
    //   if (ctype_space($arrayText[$i]) || $arrayText[$i] === '') {
    //     $spasi .= $arrayText[$i];
    //     $textReversed .= $kata;
    //     $kata = null;
    //   } else {
    //     $kata .= $arrayText[$i];
    //     $textReversed .= $spasi;
    //     $spasi = null;
    //   }
    // }
    // echo $kata;
    // echo $spasi;
    echo "<pre>$textReversed</pre>";
    // print_r($arrayText);
    // $arrayReversed = array_reverse(explode(" ",$str));
    // $textReversed = implode(" ",$arrayReversed);
    // echo $textReversed;
  }
 ?>
