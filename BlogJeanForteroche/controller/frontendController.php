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
  require('view/frontend/Chapterpage.php');
}
?>
