<?php
class frontendModel {
  public function getChapter() {
    $pdo = $this->dbConnect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $reponse = $pdo->query('SELECT * FROM Chapitre');
    return $reponse;
  }

  public function getParticularChapter() {
    $pdo = $this->dbConnect();
    $value = ['chapitreFocus' => $_GET['index']];
    $req = 'SELECT texte FROM Chapitre WHERE idChapitre = :chapitreFocus';

    $reponse = $pdo->prepare($req);
    $reponse->execute($value);
    return $reponse;
  }

  public function writeComment() {
    $pdo = $this->dbConnect();
    $value = ['name'=>$_POST['nameUser'], 'comment'=>$_POST['textComment'], 'idChapitrebis'=>$_POST['chapterId']];
    $req = "INSERT INTO Commentaire (name, comment, dateOf, idChapitrebis) VALUES (:name, :comment, NOW(), :idChapitrebis)";


    $reponse = $pdo->prepare($req);
    $reponse->execute($value);
    echo '<script language="Javascript">document.location.replace("'.$_SERVER['SCRIPT_NAME']."?".$_SERVER['QUERY_STRING'].'"); </script>';
  }

  public function getComment() {
    $pdo = $this->dbConnect();
    $value = ['chapitreFocus'=>$_GET['index']];
    $req = 'SELECT idCom, name, comment, signComment, DATE_FORMAT(dateOf, "%d/%m/%Y") AS dateOf FROM Commentaire WHERE Commentaire.idChapitrebis = :chapitreFocus ORDER BY dateOf DESC';

    $reponse = $pdo->prepare($req);
    $reponse->execute($value);
    return $reponse;
  }

  public function signalComment() {
    $pdo = $this->dbConnect();
    $value = ['signComment' => "true", 'idSelect'=>$_POST["commentId"]];
    $req = 'UPDATE Commentaire SET signComment = :signComment  WHERE idCom = :idSelect';

    $reponse = $pdo->prepare($req);
    $reponse->execute($value);
  }

  private function dbConnect() {
        $pdo = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', 'axoloto13');
        return $pdo;
  }
}
?>
