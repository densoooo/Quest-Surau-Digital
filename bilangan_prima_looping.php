<html>
  <body>
    <form method="post">
      Masukkan Bilangan
      <input type="text" name="bilangan"/>
      <input type="submit" name="submit" value="kirim"/>
    </form>
    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        function CekPrima($bilangan)
        {
          if ($bilangan <= 1) {
            return false;
          } elseif ($bilangan <= 3) {
            return true;
          } elseif ($bilangan % 2 === 0 || $bilangan % 3 === 0) {
            return false;
          }
          $i = 5;
          while ($i * $i <= $bilangan) {
            if ($bilangan % $i === 0 || $bilangan % $i+2 === 0) {
              return false;
            }
            $i = $i + 6;
          }
          return true;
        }

        $i = 1;
        $looping = $_POST['bilangan'];
        $arrayPrima = array();

        while ($i <= $looping) {
          $prima = CekPrima($i);
          if ($prima === true) {
            // echo $i;
            array_push($arrayPrima, $i);
            // echo $i." adalah prima </br>";
          }
          $i = $i + 1;
          // } else {
          //   echo $i." bukan prima";
          //   // print_r($_POST['bilangan']);
          // }
        }
        // print_r($arrayPrima);
        $output=implode(",",$arrayPrima);
        echo "Bilangan Prima Sampai $looping : ".$output;
      }

//       <?php
// $stack = array("orange", "banana");
// array_push($stack, "apple", "raspberry");
// print_r($stack);
//

    ?>
  </body>
</html>
