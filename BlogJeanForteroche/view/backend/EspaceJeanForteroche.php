
<?php $title = 'Espace Administrateur'; ?>

<?php ob_start(); ?>

  <script src="https://cdn.tiny.cloud/1/09ek4m511wa336se8p2mpq9rhastv5qdpqnofr5mwjc95yb6/tinymce/5/tinymce.min.js"></script>
  <script type="text/javascript" src="public/js/fr_FR.js"></script>
  <script>
      tinymce.init({selector:'textarea', language_url: '/public/js/fr_FR.js', language: 'fr_FR'});
  </script>
<?php $TinyMCE = ob_get_clean(); ?>

<?php ob_start(); ?>

    <section class="createChapter">
      <p class="titleAdmin">Création d'un Nouveau Chapitre</p>
      <form class="ecritureJean" method="post">
        <input type = "hidden" name = "action" value = "write">
        <textarea id="text" name="text" rows="28" ></textarea>
        <input id="textConfirm" type="submit" value="Envoyer">
      </form>
    </section>

    <section class="chapterDone">
      <p class="titleAdmin">Chapitres déja réalisés</p>

        <?php
        while($data = $afficheChapitre->fetch())
        {
        ?>
          <div class="chapterZone">
            <h3>Chapitre n°<?php echo $data['idChapitre']; ?> :</h3>
            <div class="chapter">
              <?php echo $data['texte']; ?>
            </div>

            <form method="get">
              <input type ="hidden" name ="action" value ="update">
              <input type="hidden" name="idToUpdate" value="<?php echo $data['idChapitre'] ?>">
              <button id="update" type="submit">Modifier</button>
            </form>

            <form method="post">
              <input type = "hidden" name = "action" value = "delete">
              <input type="hidden" name="idToDelete" value="<?php echo $data['idChapitre'] ?>">
              <button id="delete" type="submit">Supprimer</button>
            </form>

            <?php print_r($_POST['action']); ?>
            <?php print_r($_POST['idToDelete']); ?>
          </div>
        <?php
        }
        $afficheChapitre->closeCursor();
        ?>
    </section>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
