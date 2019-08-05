<?php
class backendModel {
  public function writeChapter() {
    $pdo = $this->dbConnect();
    $value = ['texte'=>$_POST["text"]];
    $req = "INSERT INTO Chapitre (texte) VALUES (:texte)";

    $reponse = $pdo->prepare($req);
    $reponse->execute($value);
    echo '<script language="Javascript">document.location.replace("index.php?action=adminRedirect"); </script>';
  }

  public function removeChapter() {
    $pdo = $this->dbConnect();
    $value = ['chapitreDelete'=>$_POST['idToDelete']];
    $req = 'DELETE FROM `Chapitre` WHERE `idChapitre` = :chapitreDelete';
    $reponse = $pdo->prepare($req);
    $reponse->execute($value);
  }

  public function getChapter() {
    $pdo = $this->dbConnect();
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

  public function getComment() {
    $pdo = $this->dbConnect();

    $req = 'SELECT idChapitrebis, idCom, name, comment, signComment, DATE_FORMAT(dateOf, "%d/%m/%Y") AS dateOf FROM Commentaire ORDER BY signComment DESC, dateOf DESC';

    $reponse = $pdo->prepare($req, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $reponse->execute();
    return $reponse;
  }

  public function deleteComment() {
    $pdo = $this->dbConnect();
    $value = ['commentaireDelete' => $_POST['commentId']];
    $req = 'DELETE FROM `Commentaire` WHERE `idCom` = :commentaireDelete';
    $reponse = $pdo->prepare($req);
    $reponse->execute($value);
  }

  private function dbConnect() {
        $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
        return $pdo;
  }
}
?>
