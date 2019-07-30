<?php
function getChapterController() {
  require('model/frontendModel.php');
  $afficheChapitre = getChapter();
  require('view/frontend/Homepage.php');
}

function getParticularChapterController() {
  require('model/frontendModel.php');
  $afficheChapitreParticulier = getParticularChapter();
  $afficheChapitre = getChapter();
  $afficheCommentaire = getComment();
  require('view/frontend/Chapterpage.php');
}

function writeCommentController() {
  require('model/frontendModel.php');
  writeComment();
  $afficheChapitreParticulier = getParticularChapter();
  $afficheChapitre = getChapter();
  $afficheCommentaire = getComment();
  require('view/frontend/Chapterpage.php');
}

?>
