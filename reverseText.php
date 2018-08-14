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
    $arrayReversed = array_reverse(explode(" ",$str));
    $textReversed = implode(" ",$arrayReversed);
    echo $textReversed;
  }
 ?>
