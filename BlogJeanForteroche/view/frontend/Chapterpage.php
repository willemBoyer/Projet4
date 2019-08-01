
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
      ?>
    </div>
    <div class="commentSpace">
      <p>Commentaires :</p>
      <?php
        while($data = $afficheCommentaire->fetch())
          {
      ?>
            <div class="comment">

              <p><?php echo $data["name"]; ?> <?php echo $data["dateOf"];?></p>
              <p><?php echo $data["comment"]; ?></p>
              <?php if ($data["signComment"] == "true")
                {
              ?>
                  <p class="signaledCom">Commentaire signalé !</p>
              <?php
                }
              ?>
              <form method="post">
                <input type = "hidden" name = "action" value = "signal">
                <input type="hidden" name="commentId" value="<?php echo $data['idCom'] ?>">
                <input id="confirmComment" type="submit" name"confirm" value="Signaler ce commentaire">
              </form>

            </div>

      <?php
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
        <li><a href='index.php?action=chapterRead&index=<?php echo $data['idChapitre']; ?>'>Chapitre n°<?php echo $data['idChapitre']; ?></a></li>
    <?php
      }
      $afficheChapitre->closeCursor();
    ?>
  </div>
  <a class="backHome" href='index.php'>Retour à l'accueil</a>
<?php $content = ob_get_clean(); ?>

  <?php require('view/template.php'); ?>
