<?php
function getChapter() {
  $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $reponse = $pdo->query('SELECT * FROM Chapitre');
  return $reponse;
}
?>
