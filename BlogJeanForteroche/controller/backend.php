<?php
require('model/backend.php');

  if(isset($_POST['action']) && $_POST['action'] == "write")
  {
    writeChapter();
  }
  else if(isset($_POST['action']) && $_POST['action'] == "delete")
  {
    $postId = $_POST['idToDelete'];
    removeChapter($postId);
  }
  else if(isset($_POST['action']) && $_POST['action'] == "update")
  {
    updateChapter();
    $_GET = "";
  }


  if (isset($_GET['action']) && $_GET['action'] == "update")
  {
    require('view/backend/EspaceJeanForterocheUpdateText.php');
  }
  else
  {
    $afficheChapitre = getChapter();
    require('view/backend/EspaceJeanForteroche.php');

  }
?>
