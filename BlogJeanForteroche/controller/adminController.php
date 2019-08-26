<?php
class adminController {
  public function getChapterController() {
    require('model/chapterModel.php');
    require('model/commentModel.php');
    $modelChapter = new chapterModel();
    $modelComment = new commentModel();
    $afficheChapitre = $modelChapter->getChapter();
    $afficheCommentaire = $modelComment->getComment();
    require('view/admin/EspaceJeanForteroche.php');
  }

  public function writeChapterController()
  {
    require('model/chapterModel.php');
    require('model/commentModel.php');
    $modelChapter = new chapterModel();
    $modelComment = new commentModel();
    $modelChapter->writeChapter();
    $afficheChapitre = $modelChapter->getChapter();
    $afficheCommentaire = $modelComment->getComment();
    echo '<script language="Javascript">document.location.replace("index.php?action=adminRedirect"); </script>';
  }

  public function deleteChapterController()
  {
    require('model/chapterModel.php');
    require('model/commentModel.php');
    $modelChapter = new chapterModel();
    $modelComment = new commentModel();
    $afficheChapitre = $modelChapter->getChapter();
    $afficheCommentaire = $modelComment->getComment();
    $modelChapter->removeChapter();
    echo '<script language="Javascript">document.location.replace("index.php?action=adminRedirect"); </script>';
  }
  public function updateChapterController()
  {
    require('model/chapterModel.php');
    require('model/commentModel.php');
    $modelChapter = new chapterModel();
    $modelComment = new commentModel();
    $modelChapter->updateChapter();
    $afficheChapitre = $modelChapter->getChapter();
    $afficheCommentaire = $modelComment->getComment();
    require('view/admin/EspaceJeanForteroche.php');
  }

  public function getUpdateChapterController()
  {
    require('view/admin/EspaceJeanForterocheUpdateText.php');
  }

  public function connexionAccessController()
  {
    require('model/chapterModel.php');
    require('model/commentModel.php');
    $modelChapter = new chapterModel();
    $modelComment = new commentModel();
    $afficheChapitre = $modelChapter->getChapter();
    $afficheCommentaire = $modelComment->getComment();
    require('view/admin/EspaceJeanForteroche.php');
  }

  public function deleteCommentController()
  {
    require('model/chapterModel.php');
    require('model/commentModel.php');
    $modelChapter = new chapterModel();
    $modelComment = new commentModel();
    $modelComment->deleteComment();
    $afficheChapitre = $modelChapter->getChapter();
    $afficheCommentaire = $modelComment->getComment();
    require('view/admin/EspaceJeanForteroche.php');
  }
}
?>
