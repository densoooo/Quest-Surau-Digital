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
    }
    echo "<pre>$textReversed</pre>";
  }
 ?>
