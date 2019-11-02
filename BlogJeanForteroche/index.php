<?php

function rooter($action) {
  switch ($action) {
    case 'write':
        require('controller/adminController.php');
        $controller = new adminController;
        $controller->writeChapterController();
        break;
    case 'delete':
        require('controller/adminController.php');
        $controller = new adminController;
        $controller->deleteChapterController();
        break;
    case 'update':
        require('controller/adminController.php');
        $controller = new adminController;
        $controller->updateChapterController();
        break;
    case 'getUpdate':
        require('controller/adminController.php');
        $controller = new adminController;
        $controller->getUpdateChapterController();
        break;
    case 'connexion':
          header('Location: indexAdmin.php?action=adminRedirect');
        break;
    case 'chapterRead':
        require('controller/userController.php');
        $controller = new userController;
        $controller->getParticularChapterController();
        break;
    case 'comment':
        require('controller/userController.php');
        $controller = new userController;
        $controller->writeCommentController();
        break;
    case 'signal':
        require('controller/userController.php');
        $controller = new userController;
        $controller->signalCommentController();
        break;
    case 'deleteCom':
        require('controller/adminController.php');
        $controller = new adminController;
        $controller->deleteCommentController();
        break;
    case 'adminRedirect':
        require('controller/adminController.php');
        $controller = new adminController;
        $controller->getChapterController();
        break;
  }
}

if (isset($_POST['action']) && $_POST['action'] == "comment") {
    $action = $_POST['action'];
    rooter($action);
}
else if(isset($_POST['action'])){
    $action = $_POST['action'];
    rooter($action);
}
else if (isset($_GET['action'])) {
    $action = $_GET['action'];
    rooter($action);
}
else {
  require('controller/userController.php');
  $controller = new userController;
  $controller->getChapterController();
}
