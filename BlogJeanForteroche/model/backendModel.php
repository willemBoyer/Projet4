<?php
function writeChapter() {
  $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $value = ['texte'=>$_POST["text"]];
  $req = "INSERT INTO Chapitre (texte) VALUES (:texte)";

  $reponse = $pdo->prepare($req);
  $reponse->execute($value);
  echo '<script language="Javascript">document.location.replace("index.php?action=adminRedirect"); </script>';
}

function removeChapter() {
  $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $value = ['chapitreDelete'=>$_POST['idToDelete']];
  $req = 'DELETE FROM `Chapitre` WHERE `idChapitre` = :chapitreDelete';
  $reponse = $pdo->prepare($req);
  $reponse->execute($value);
}

function getChapter() {
  $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $reponse = $pdo->query('SELECT * FROM Chapitre');
  return $reponse;

}

function updateChapter() {
  $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $value = ['nvtexte' => $_POST['nvtexte'], 'chapitreUpdate' => $_POST['idToUpdate']];
  $req = 'UPDATE Chapitre SET texte = :nvtexte  WHERE idChapitre = :chapitreUpdate';

  $reponse = $pdo->prepare($req);
  $reponse->execute($value);

}

function getComment() {
  $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $req = 'SELECT idChapitrebis, idCom, name, comment, signComment, DATE_FORMAT(dateOf, "%d/%m/%Y") AS dateOf FROM Commentaire ORDER BY signComment DESC';

  $reponse = $pdo->prepare($req, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
  $reponse->execute();
  return $reponse;
}

function deleteComment() {
  $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $value = ['commentaireDelete' => $_POST['commentId']];
  $req = 'DELETE FROM `Commentaire` WHERE `idCom` = :commentaireDelete';
  $reponse = $pdo->prepare($req);
  $reponse->execute($value);
}
?>
