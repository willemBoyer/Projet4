<?php

//Exemple de lien appellant une route GET
//<a href="http://guiller.fr/index.php?action="posts">Blog</a>

// Exemple de formulaire envoyant des informations au router
//<form>
//    <input type = "hidden" name = "action" value = "delete">//action router
//    <input type = "hidden" name = "postId" value = "3" >
//    <input type = "submit" >
//</form >


function rooter($action) {
  switch ($action) {
    case 'write':
        require('controller/backendController.php');
        writeChapterController();
        break;
    case 'delete':
        require('controller/backendController.php');
        deleteChapterController();
        break;
    case 'update':
        require('controller/backendController.php');
        updateChapterController();
        break;
    case 'getUpdate':
        require('controller/backendController.php');
        getUpdateChapterController();
        break;
    case 'connexion':
        if (isset($_POST["ID"]) && $_POST["ID"] == "a" && isset($_POST["password"]) && $_POST["password"] == "b") {
          require('controller/backendController.php');
          connexionAccessController();
        }
        else {
          require('controller/frontendController.php');
          getChapterController();
        }
        break;
    case 'chapterRead':
        require('controller/frontendController.php');
        getParticularChapterController();
        break;
    case 'comment':
        require('controller/frontendController.php');
        writeCommentController();
        break;
    case 'signal':
        require('controller/frontendController.php');
        signalCommentController();
        break;
    case 'deleteCom':
        require('controller/backendController.php');
        deleteCommentController();
        break;
    case 'adminRedirect':
        require('controller/backendController.php');
        getChapterController();
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
  require('controller/frontendController.php');
  getChapterController();
}
