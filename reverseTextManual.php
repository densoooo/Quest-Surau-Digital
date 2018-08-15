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

    for ($i=strlen($str)-1; $i >=0; $i--) {
      if ($i != 0) {
        if (ctype_space($str[$i]) || $str[$i] === '') {
          $spasi = $str[$i] . $spasi;
          $textReversed .= $kata;
          $kata = null;
        } else {
          $kata = $str[$i] . $kata;
          $textReversed .= $spasi;
          $spasi = null;
        }
      } else {
        if (ctype_space($str[$i]) || $str[$i] === '') {
          $spasi = $str[$i] . $spasi;
          $textReversed .= $spasi;
        } else {
          $kata = $str[$i] . $kata;
          $textReversed .= $kata;
        }
      }
    }
    echo "<pre>$textReversed</pre>";
  }
 ?>
