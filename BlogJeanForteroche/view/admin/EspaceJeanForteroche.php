
<?php $title = 'Espace Administrateur'; ?>

<?php ob_start(); ?>

  <script src="https://cdn.tiny.cloud/1/09ek4m511wa336se8p2mpq9rhastv5qdpqnofr5mwjc95yb6/tinymce/5/tinymce.min.js"></script>
  <script type="text/javascript" src="public/js/fr_FR.js"></script>
  <script>
      tinymce.init({selector:'textarea', language_url: '/public/js/fr_FR.js', language: 'fr_FR'});
  </script>
<?php $TinyMCE = ob_get_clean(); ?>

<?php $connexion = '<a href="index.php" class="adminCo">Retour à l\'accueil</a>' ?>

<?php ob_start(); ?>

    <section class="createChapter">
      <p class="titleAdmin">Création d'un Nouveau Chapitre</p>

      <form class="ecritureJean" method="post" action"index.php?action=''">
        <input type = "hidden" name = "action" value = "write">
        <textarea id="text" name="text" rows="28" ></textarea>
        <input id="textConfirm" type="submit" value="Envoyer">
      </form>

    </section>

    <section class="chapterDone">
      <p class="titleAdmin">Chapitres déja réalisés</p>

        <?php
        $data2 = $afficheCommentaire->fetchAll();
        while($data = $afficheChapitre->fetch())
        {
        ?>
          <div class="chapterZone">
            <h3>Chapitre n°<?php echo $data['idChapitre']; $i = $data['idChapitre']; ?> :</h3>
            <div class="chapter">
              <?php echo $data['texte'];?>
            </div>

            <div class="commentSpace">
              <p>Commentaires :</p>
            <?php

              foreach ($data2 as $dataCom) {
                if($dataCom["idChapitrebis"] == $i)
                {
            ?>
                  <div class="comment">

                    <p><?php echo $dataCom["name"]; ?> <?php echo $dataCom["dateOf"]; ?></p>
                    <p><?php echo $dataCom["comment"]; ?></p>
                    <?php if ($dataCom["signComment"] == "true")
                      {
                    ?>
                        <p class="signaledCom">Commentaire signalé !</p>
                    <?php
                      }
                    ?>
                    <form id="deleteCom" method="post">
                      <input type = "hidden" name = "action" value = "deleteCom">
                      <input type="hidden" name="commentId" value="<?php echo $dataCom['idCom'] ?>">
                      <input id="confirmComment" type="submit" name"confirm" value="Supprimer le commentaire">
                    </form>

                  </div>
                  <?php
                  }
                 }
                    $afficheCommentaire->closeCursor();
                  ?>

            </div>
            <div class="buttonChapterZone">

              <form id="update" method="post">
                <input type ="hidden" name ="action" value ="getUpdate">
                <input type ="hidden" name ="textPlace" value ='<?php echo $data['texte']; ?>'>
                <input type="hidden" name="idToUpdate" value="<?php echo $i ?>">
                <button type="submit">Modifier</button>
              </form>

              <form id="delete" method="post">
                <input type = "hidden" name = "action" value = "delete">
                <input type="hidden" name="idToDelete" value="<?php echo $i ?>">
                <button type="submit">Supprimer</button>
              </form>

            </div>
          </div>
        <?php
        }
        $afficheChapitre->closeCursor();
        ?>
    </section>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
