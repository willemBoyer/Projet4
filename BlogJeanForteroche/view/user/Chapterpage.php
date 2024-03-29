
    <?php $title = 'Chapitre '.$_GET['index']; ?>
    <?php $TinyMCE = false; ?>


<?php $connexion = '<a href="index.php" class="adminCo">Retour à l\'accueil</a>'; ?>

<?php ob_start(); ?>

  <div class="chapterFocus">
    <p class="chapterTitle">Chapitre n°<?php echo $_GET['index']; ?> :</p>
    <div>
      <?php
        $data = $afficheChapitreParticulier->fetch();
        echo $data['texte'];
        $i = $data['idChapitre'];
      ?>
    </div>
    <div class="commentSpace">
      <p>Commentaires :</p>
      <?php
        $data2 = $afficheCommentaire->fetchAll();
        foreach ($data2 as $dataCom) {
          if($dataCom["idChapitrebis"] == $i)
          {
      ?>
            <div class="comment">

              <p><?php echo $dataCom["name"]; ?> <?php echo $dataCom["dateOf"];?></p>
              <p><?php echo $dataCom["comment"]; ?></p>
              <?php if ($dataCom["signComment"] == "true")
                {
              ?>
                  <p class="signaledCom">Commentaire signalé !</p>
              <?php
                }
              ?>
              <form method="post">
                <input type = "hidden" name = "action" value = "signal">
                <input type="hidden" name="commentId" value="<?php echo $dataCom['idCom'] ?>">
                <input id="confirmComment" type="submit" name"confirm" value="Signaler ce commentaire">
              </form>

            </div>

      <?php
          }
        }
        $afficheCommentaire->closeCursor();
        ?>
    </div>
    <div id="formComment">
      <form method="post">
        <input type = "hidden" name = "action" value = "comment">
        <input id="idNameUser" type="text" name="nameUser" value="Votre nom">
        <input type="hidden" name="chapterId" value="<?php echo $_GET['index']; ?>">
        <textarea id="comment" name="textComment" rows="10" ></textarea>
        <input id="confirmComment" type="submit" name"confirm" value="confirmer">
      </form>
      <button id="stopComment">annuler</button>
    </div>
    <button id="toComment">Commenter</button>
  </div>
  <div class="otherChapter">
    <p>Chapitres :</p>
    <?php
      while($data = $afficheChapitre->fetch())
      {
    ?>
        <li><a href='index.php?action=chapterRead&index=<?php echo $data['numeroChapitre']; ?>'>Chapitre n°<?php echo $data['numeroChapitre']; ?></a></li>
    <?php
      }
      $afficheChapitre->closeCursor();
    ?>
  </div>
  <a class="backHome" href='index.php'>Retour à l'accueil</a>
<?php $content = ob_get_clean(); ?>

  <?php require('view/template.php'); ?>
