<?php
class userController {
  public function getChapterController() {
    require('model/chapterModel.php');
    require('model/commentModel.php');
    $modelChapter = new chapterModel();
    $modelComment = new commentModel();
    $afficheChapitre = $modelChapter->getChapter();
    require('view/user/Homepage.php');
  }

  public function getParticularChapterController() {
    require('model/chapterModel.php');
    require('model/commentModel.php');
    $modelChapter = new chapterModel();
    $modelComment = new commentModel();
    $afficheChapitreParticulier = $modelChapter->getParticularChapter();
    $afficheChapitre = $modelChapter->getChapter();
    $afficheCommentaire = $modelComment->getComment();
    require('view/user/Chapterpage.php');
  }

  public function writeCommentController() {
    require('model/chapterModel.php');
    require('model/commentModel.php');
    $modelChapter = new chapterModel();
    $modelComment = new commentModel();
    $modelComment->writeComment();
    $afficheChapitreParticulier = $modelChapter->getParticularChapter();
    $afficheChapitre = $modelChapter->getChapter();
    $afficheCommentaire = $modelComment->getComment();
    require('view/user/Chapterpage.php');
  }

  public function signalCommentController() {
    require('model/chapterModel.php');
    require('model/commentModel.php');
    $modelChapter = new chapterModel();
    $modelComment = new commentModel();
    $modelComment->signalComment();
    $afficheChapitreParticulier = $modelChapter->getParticularChapter();
    $afficheChapitre = $modelChapter->getChapter();
    $afficheCommentaire = $modelComment->getComment();
    require('view/user/Chapterpage.php');
  }
}
?>
