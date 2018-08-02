<html>
  <table>
    <?php
      $i = 1;
      $j = 1;
      for($i = 1; $i<10;$i++):
        if ($i === 1 && $j === 1 || $i === 4 && $j === 1 || $i === 7 && $j === 1) {
      echo '<tr>';
      echo '<td>';
        } else {
      echo '<td>';
        }
        for($j = 1; $j<10;$j++) :
          echo "$i x $j = ";
          echo $i*$j."</br>";
          if ($i === 3 && $j === 9 || $i === 6 && $j === 9 || $i === 9 && $j === 9) {
      echo '</td>';
      echo '</tr>';
          } elseif ($j === 9) {
      echo '</td>';
          }
        endfor;
      endfor;
    ?>
  </table>
</html>
