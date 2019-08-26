<?php
class chapterModel {
  public function writeChapter() {
    $pdo = $this->dbConnect();
    $value = ['texte'=>$_POST["text"]];
    $req = "INSERT INTO Chapitre (texte) VALUES (:texte)";

    $reponse = $pdo->prepare($req);
    $reponse->execute($value);

  }

  public function getParticularChapter() {
    $pdo = $this->dbConnect();
    $value = ['chapitreFocus' => $_GET['index']];
    $req = 'SELECT * FROM Chapitre WHERE idChapitre = :chapitreFocus';
    $reponse = $pdo->prepare($req);
    $reponse->execute($value);
    return $reponse;
  }

  public function removeChapter() {
    $pdo = $this->dbConnect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $value = ['chapitreDelete'=>$_POST['idToDelete']];
    $req = 'DELETE FROM Chapitre WHERE idChapitre = :chapitreDelete';
    $req2 = 'DELETE FROM `Commentaire` WHERE `idChapitrebis` = :chapitreDelete';

    $reponse2 =  $pdo->prepare($req2);
    $reponse2->execute($value);

    $reponse = $pdo->prepare($req);
    $reponse->execute($value);
  }

  public function getChapter() {
    $pdo = $this->dbConnect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $reponse = $pdo->query('SELECT * FROM Chapitre');
    return $reponse;
  }

  public function updateChapter() {
    $pdo = $this->dbConnect();
    $value = ['nvtexte' => $_POST['nvtexte'], 'chapitreUpdate' => $_POST['idToUpdate']];
    $req = 'UPDATE Chapitre SET texte = :nvtexte  WHERE idChapitre = :chapitreUpdate';

    $reponse = $pdo->prepare($req);
    $reponse->execute($value);
  }

  private function dbConnect() {
        $pdo = new PDO('mysql:host=localhost;dbname=db345903_willem13;charset=utf8', 'db110005', 'Axoloto13');
        return $pdo;
  }
}
