
    <?php $title = 'Chapitre '.$_GET['index']; ?>
    <?php $TinyMCE = false; ?>


<?php $connexion = '<a href="index.php" class="adminCo">Retour à l\'accueil</a>'; ?>

<?php ob_start(); ?>

  <div class="chapterFocus">
    <p>Chapitre n°<?php echo $_GET['index']; ?> :</p>
    <?php
      $data = $afficheChapitreParticulier->fetch();
      echo $data['texte'];
    ?>
  </div>
  <div class="otherChapter">
    <p>Chapitres :</p>
    <?php
      while($data = $afficheChapitre->fetch())
      {
    ?>
        <li><a href='index.php?action=chapterRead&index=<?php echo $data['idChapitre']; ?>'>Chapitre n°<?php echo $data['idChapitre']; ?></a></li>

    <?php
      }
      $afficheChapitre->closeCursor();
    ?>
  </div>
  <a class="backHome" href='index.php'>Retour à l'accueil</a>
  <?php $content = ob_get_clean(); ?>

  <?php require('view/template.php'); ?>
