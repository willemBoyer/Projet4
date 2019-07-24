<?php

//Exemple de lien appellant une route GET
//<a href="http://guiller.fr/index.php?action="posts">Blog</a>

// Exemple de formulaire envoyant des informations au router
//<form>
//    <input type = "hidden" name = "action" value = "delete">//action router
//    <input type = "hidden" name = "postId" value = "3" >
//    <input type = "submit" >
//</form >

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = $_POST['action'];
}

switch ($action) {
    case 'posts':
        require FrontOfficeController;
        $posts = getPosts();
        break;
    case 'comments':
        break;
    case 'deletePost':
        deletePost();
        //dans PostController
//        require PostModel;
//        $postId = $_POST['postId'];
//        deletePostModel($postId);
    default:
        echo "Erreur : La page demandée n'existe pas";
}
