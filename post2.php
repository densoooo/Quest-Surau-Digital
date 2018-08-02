<?php
  if (sizeof($_POST['hoby']) === 1){
    if (in_array("Baca Buku", $_POST['hoby'])) {
      echo "Librarian";
    } elseif (in_array("Main Game", $_POST['hoby'])) {
      echo "Gamers";
    }
  } elseif (sizeof($_POST['hoby']) === 2) {
    if (array_intersect(["Main Game", "Olah Raga"], $_POST['hoby'])) {
      echo "Petualang";
    }
  } elseif (sizeof($_POST['hoby']) === 3) {
    if (array_intersect(["Main Game", "Baca Buku", "hiking"], $_POST['hoby'])) {
      echo "Jagoan";
    }
  }
?>
