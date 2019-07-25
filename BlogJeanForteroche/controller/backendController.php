<?php

function getChapterController() {
  require('model/backend.php');
  $afficheChapitre = getChapter();
  require('view/backend/EspaceJeanForteroche.php');
}

  function writeChapterController()
  {
    require('model/backendModel.php');
    writeChapter();
    $afficheChapitre = getChapter();
    require('view/backend/EspaceJeanForteroche.php');
  }

  function deleteChapterController()
  {
    require('model/backendModel.php');
    $postId = $_POST['idToDelete'];
    removeChapter($postId);
    $afficheChapitre = getChapter();
    require('view/backend/EspaceJeanForteroche.php');
  }
  function updateChapterController()
  {
    require('model/backendModel.php');
    updateChapter();
    $_GET = NULL;
    $afficheChapitre = getChapter();
    require('view/backend/EspaceJeanForteroche.php');
  }

  function getUpdateChapterController()
  {
    require('view/backend/EspaceJeanForterocheUpdateText.php');
  }

  function connexionAccess()
  {
    require('model/backendModel.php');
    $afficheChapitre = getChapter();
    require('view/backend/EspaceJeanForteroche.php');
  }




?>
