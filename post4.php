<?php
  if ($_POST['username'] === "admin" && $_POST['password'] === "admin") {

    $cookie_name = "user";
    $expire = 120;
    setcookie($cookie_name, $_POST['username'], time() + $expire);

    if (!isset($_COOKIE[$cookie_name])) {
      echo "Cookie expired";
    } else {
      echo "Cookie value is ".$_COOKIE['user'];
    }
  } else {
    header('Location: http://localhost/quest1/login.php');
  }
?>
