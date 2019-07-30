<?php
function getChapter() {
  $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $reponse = $pdo->query('SELECT * FROM Chapitre');
  return $reponse;
}

function getParticularChapter() {
  $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $value = ['chapitreFocus' => $_GET['index']];
  $req = 'SELECT texte FROM Chapitre WHERE idChapitre = :chapitreFocus';

  $reponse = $pdo->prepare($req);
  $reponse->execute($value);
  return $reponse;
}

function writeComment() {
  $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $value = ['name'=>$_POST['nameUser'], 'comment'=>$_POST['textComment'], 'idChapitrebis'=>$_POST['chapterId']];
  $req = "INSERT INTO Commentaire (name, comment, dateOf, idChapitrebis) VALUES (:name, :comment, NOW(), :idChapitrebis)";


  $reponse = $pdo->prepare($req);
  $reponse->execute($value);
}

function getComment() {
  $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $value = ['chapitreFocus'=>$_GET['index']];
  $req = 'SELECT * FROM Commentaire WHERE Commentaire.idChapitrebis = :chapitreFocus';

  $reponse = $pdo->prepare($req);
  $reponse->execute($value);
  return $reponse;
}
?>
