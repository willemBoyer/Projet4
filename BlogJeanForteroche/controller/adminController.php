<?php

function getChapterController() {
  require('model/adminModel.php');
  $model = new adminModel();
  $afficheChapitre = $model->getChapter();
  $afficheCommentaire = $model->getComment();
  require('view/admin/EspaceJeanForteroche.php');
}

  function writeChapterController()
  {
    require('model/adminModel.php');
    $model = new adminModel();
    $model->writeChapter();
    $afficheChapitre = $model->getChapter();
    $afficheCommentaire = $model->getComment();
    echo '<script language="Javascript">document.location.replace("index.php?action=adminRedirect"); </script>';
  }

  function deleteChapterController()
  {
    require('model/adminModel.php');
    $model = new adminModel();
    $model->removeChapter();
    $afficheChapitre = $model->getChapter();
    $afficheCommentaire = $model->getComment();
    require('view/admin/EspaceJeanForteroche.php');
  }
  function updateChapterController()
  {
    require('model/adminModel.php');
    $model = new adminModel();
    $model->updateChapter();
    $afficheChapitre = $model->getChapter();
    $afficheCommentaire = $model->getComment();
    require('view/admin/EspaceJeanForteroche.php');
  }

  function getUpdateChapterController()
  {
    require('view/admin/EspaceJeanForterocheUpdateText.php');
  }

  function connexionAccessController()
  {
    require('model/adminModel.php');
    $model = new adminModel();
    $afficheChapitre = $model->getChapter();
    $afficheCommentaire = $model->getComment();
    require('view/admin/EspaceJeanForteroche.php');
  }

  function deleteCommentController()
  {
    require('model/adminModel.php');
    $model = new adminModel();
    $model->deleteComment();
    $afficheChapitre = $model->getChapter();
    $afficheCommentaire = $model->getComment();
    require('view/admin/EspaceJeanForteroche.php');
  }


?>
