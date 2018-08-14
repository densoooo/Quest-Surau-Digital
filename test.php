<?php
// var $nama;
for ($i=0; $i < 5; $i++) {
  ${'nama'.$i} = 5;
}
echo $nama4;
echo $nama3;

// include 'class_account.php';
session_start(); //start the PHP_session function

if (isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] += 1;
} else {
    $_SESSION['page_count'] = 1;
}
 echo 'You are visitor number ' . $_SESSION['page_count'];

 print_r($_SESSION['array']);

 // echo $Account->getId_account()."</br>";
 // echo $Account->getNama()."</br>";
 // echo $Account->getAlamat()."</br>";
 // echo $Account->getBallance()."</br>";
 // echo $Account->getId_bank()."</br>";

 $_SESSION['arrayTest'] = array();

 for ($i=0; $i < 5; $i++) {
   array_push($_SESSION['arrayTest'], $i);
 }

 print_r($_SESSION['arrayTest']);

 $output=implode(",",$_SESSION['nama']);
 print_r($_SESSION['nama']);
 echo $output;
 ?>

 <table>
   <thead>
     <tr>
       <th>ID Account</th>
       <th>Nama</th>
       <th>Alamat</th>
       <th>Ballance</th>
       <th>ID Bank</th>
     </tr>
   </thead>
   <?php for ($i=0; $i < count($_SESSION['id_account']); $i++) {?>
     <tr>
       <td><?php echo $_SESSION['id_account'][$i];?></td>
       <td><?php echo $_SESSION['nama'][$i];?></td>
       <td><?php echo $_SESSION['alamat'][$i];?></td>
       <td><?php echo $_SESSION['ballance'][$i];?></td>
       <td><?php echo $_SESSION['id_bank'][$i];?></td>
     </tr>
   <?php } ?>
 </table>
