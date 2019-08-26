<?php
  class commentModel {
    public function getComment() {
      $pdo = $this->dbConnect();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $req = 'SELECT idCom, idChapitrebis, name, comment, signComment, DATE_FORMAT(dateOf, "%d/%m/%Y") AS dateOf FROM Commentaire INNER JOIN Chapitre ON idChapitre = idChapitrebis ORDER BY signComment DESC, dateOf DESC';

      $reponse = $pdo->prepare($req);
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

    public function writeComment() {
      $pdo = $this->dbConnect();
      $value = ['name'=>$_POST['nameUser'], 'comment'=>strip_tags($_POST['textComment']), 'idChapitrebis'=>$_POST['chapterId']];
      $req = "INSERT INTO Commentaire (name, comment, dateOf, idChapitrebis) VALUES (:name, :comment, NOW(), :idChapitrebis)";


      $reponse = $pdo->prepare($req);
      $reponse->execute($value);
      echo '<script language="Javascript">document.location.replace("'.$_SERVER['SCRIPT_NAME']."?".$_SERVER['QUERY_STRING'].'"); </script>';
    }

    public function signalComment() {
      $pdo = $this->dbConnect();
      $value = ['signComment' => "true", 'idSelect'=>$_POST["commentId"]];
      $req = 'UPDATE Commentaire SET signComment = :signComment  WHERE idCom = :idSelect';

      $reponse = $pdo->prepare($req);
      $reponse->execute($value);
    }

    private function dbConnect() {
          $pdo = new PDO('mysql:host=localhost;dbname=db345903_willem13;charset=utf8', 'db110005', 'Axoloto13');
          return $pdo;
    }
  }
?>
