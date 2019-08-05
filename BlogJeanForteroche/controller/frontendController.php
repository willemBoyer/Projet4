<?php

function getChapterController() {
  require('model/frontendModel.php');
  $model = new frontendModel();
  $afficheChapitre = $model->getChapter();
  require('view/frontend/Homepage.php');
}

function getParticularChapterController() {
  require('model/frontendModel.php');
  $model = new frontendModel();
  $afficheChapitreParticulier = $model->getParticularChapter();
  $afficheChapitre = $model->getChapter();
  $afficheCommentaire = $model->getComment();
  require('view/frontend/Chapterpage.php');
}

function writeCommentController() {
  require('model/frontendModel.php');
  $model = new frontendModel();
  $model->writeComment();
  $afficheChapitreParticulier = getParticularChapter();
  $afficheChapitre = getChapter();
  $afficheCommentaire = getComment();
  require('view/frontend/Chapterpage.php');
}

function signalCommentController() {
  require('model/frontendModel.php');
  $model = new frontendModel();
  $model->signalComment();
  $afficheChapitreParticulier = $model->getParticularChapter();
  $afficheChapitre = $model->getChapter();
  $afficheCommentaire = $model->getComment();
  require('view/frontend/Chapterpage.php');
}
?>
