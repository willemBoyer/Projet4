<?php

function getChapterController() {
  require('model/backendModel.php');
  $model = new backendModel();
  $afficheChapitre = $model->getChapter();
  $afficheCommentaire = $model->getComment();
  require('view/backend/EspaceJeanForteroche.php');
}

  function writeChapterController()
  {
    require('model/backendModel.php');
    $model = new backendModel();
    $model->writeChapter();
    $afficheChapitre = $model->getChapter();
    $afficheCommentaire = $model->getComment();
    require('view/backend/EspaceJeanForteroche.php');
  }

  function deleteChapterController()
  {
    require('model/backendModel.php');
    $model = new backendModel();
    $model->removeChapter();
    $afficheChapitre = $model->getChapter();
    $afficheCommentaire = $model->getComment();
    require('view/backend/EspaceJeanForteroche.php');
  }
  function updateChapterController()
  {
    require('model/backendModel.php');
    $model = new backendModel();
    $model->updateChapter();
    $afficheChapitre = $model->getChapter();
    $afficheCommentaire = $model->getComment();
    require('view/backend/EspaceJeanForteroche.php');
  }

  function getUpdateChapterController()
  {
    require('view/backend/EspaceJeanForterocheUpdateText.php');
  }

  function connexionAccessController()
  {
    require('model/backendModel.php');
    $model = new backendModel();
    $afficheChapitre = $model->getChapter();
    $afficheCommentaire = $model->getComment();
    require('view/backend/EspaceJeanForteroche.php');
  }

  function deleteCommentController()
  {
    require('model/backendModel.php');
    $model = new backendModel();
    $model->deleteComment();
    $afficheChapitre = $model->getChapter();
    $afficheCommentaire = $model->getComment();
    require('view/backend/EspaceJeanForteroche.php');
  }


?>
