<?php

function getChapterController() {
  require('model/backendModel.php');
  $afficheChapitre = getChapter();
  $afficheCommentaire = getComment();
  require('view/backend/EspaceJeanForteroche.php');
}

  function writeChapterController()
  {
    require('model/backendModel.php');
    writeChapter();
    $afficheChapitre = getChapter();
    $afficheCommentaire = getComment();
    require('view/backend/EspaceJeanForteroche.php');
  }

  function deleteChapterController()
  {
    require('model/backendModel.php');
    removeChapter();
    $afficheChapitre = getChapter();
    $afficheCommentaire = getComment();
    require('view/backend/EspaceJeanForteroche.php');
  }
  function updateChapterController()
  {
    require('model/backendModel.php');
    updateChapter();
    $_GET = NULL;
    $afficheChapitre = getChapter();
    $afficheCommentaire = getComment();
    require('view/backend/EspaceJeanForteroche.php');
  }

  function getUpdateChapterController()
  {
    require('view/backend/EspaceJeanForterocheUpdateText.php');
  }

  function connexionAccessController()
  {
    require('model/backendModel.php');
    $afficheChapitre = getChapter();
    $afficheCommentaire = getComment();
    require('view/backend/EspaceJeanForteroche.php');
  }

  function deleteCommentController()
  {
    require('model/backendModel.php');
    deleteComment();
    $afficheChapitre = getChapter();
    $afficheCommentaire = getComment();
    require('view/backend/EspaceJeanForteroche.php');
  }


?>
