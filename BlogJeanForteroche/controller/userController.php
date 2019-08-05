<?php

function getChapterController() {
  require('model/userModel.php');
  $model = new userModel();
  $afficheChapitre = $model->getChapter();
  require('view/user/Homepage.php');
}

function getParticularChapterController() {
  require('model/userModel.php');
  $model = new userModel();
  $afficheChapitreParticulier = $model->getParticularChapter();
  $afficheChapitre = $model->getChapter();
  $afficheCommentaire = $model->getComment();
  require('view/user/Chapterpage.php');
}

function writeCommentController() {
  require('model/userModel.php');
  $model = new userModel();
  $model->writeComment();
  $afficheChapitreParticulier = getParticularChapter();
  $afficheChapitre = getChapter();
  $afficheCommentaire = getComment();
  require('view/user/Chapterpage.php');
}

function signalCommentController() {
  require('model/userModel.php');
  $model = new userModel();
  $model->signalComment();
  $afficheChapitreParticulier = $model->getParticularChapter();
  $afficheChapitre = $model->getChapter();
  $afficheCommentaire = $model->getComment();
  require('view/user/Chapterpage.php');
}
?>
