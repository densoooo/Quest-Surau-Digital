<?php
  if ($_POST['username'] === "admin" && $_POST['password'] === "admin") {
    $_SESSION['username'] = $_POST['username'];
    session_start();

    $expire = 120;

    if (isset($_SESSION['login'])) {
      $lastActive = time() - $_SESSION['login'];
      // echo $lastActive;

      if($lastActive >= $expire){
        session_destroy();
        echo "SESSION EXPIRE";
        // header('Location: http://localhost/quest1/login.php');
      }
    }

    $_SESSION['login'] = time();
  } else {
    header('Location: http://localhost/quest1/login.php');
  }
?>
