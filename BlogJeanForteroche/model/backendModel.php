<?php
function writeChapter() {
  $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $value = ['texte'=>$_POST["text"]];
  $req = "INSERT INTO Chapitre (texte) VALUES (:texte)";

  $reponse = $pdo->prepare($req);
  $reponse->execute($value);
}

function removeChapter($id) {
  $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $reponse = $pdo->prepare('DELETE FROM `Chapitre` WHERE `idChapitre` = '.$id);
  $reponse->execute();
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
?>
