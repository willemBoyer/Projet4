<?php
require('model/backend.php');
$afficheChapitre = getChapter();
  if(isset($_POST["text"])) {
    writeChapter();
  }
require('view/backend/EspaceJeanForteroche.php');
?>
