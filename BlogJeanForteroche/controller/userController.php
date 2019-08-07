<?php
class userController {
  public function getChapterController() {
    require('model/userModel.php');
    $model = new userModel();
    $afficheChapitre = $model->getChapter();
    require('view/user/Homepage.php');
  }

  public function getParticularChapterController() {
    require('model/userModel.php');
    $model = new userModel();
    $afficheChapitreParticulier = $model->getParticularChapter();
    $afficheChapitre = $model->getChapter();
    $afficheCommentaire = $model->getComment();
    require('view/user/Chapterpage.php');
  }

  public function writeCommentController() {
    require('model/userModel.php');
    $model = new userModel();
    $model->writeComment();
    $afficheChapitreParticulier = getParticularChapter();
    $afficheChapitre = getChapter();
    $afficheCommentaire = getComment();
    require('view/user/Chapterpage.php');
  }

  public function signalCommentController() {
    require('model/userModel.php');
    $model = new userModel();
    $model->signalComment();
    $afficheChapitreParticulier = $model->getParticularChapter();
    $afficheChapitre = $model->getChapter();
    $afficheCommentaire = $model->getComment();
    require('view/user/Chapterpage.php');
  }
}
?>
