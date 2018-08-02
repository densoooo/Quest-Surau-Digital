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

        $hasil = CekPrima($_POST['bilangan']);
        if ($hasil === true) {
          echo $_POST['bilangan']." adalah prima";
        } else {
          echo $_POST['bilangan']." bukan prima";
        }
      }
    ?>
  </body>
</html>
