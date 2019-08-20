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
      <p class="titleAdmin">Modification du chapitre n°<?php echo $_POST['idToUpdate']; ?></p>

      <form class="ecritureJean" method="post">
        <input type ="hidden" name ="action" value ="update">
        <input type="hidden" name="idToUpdate" value="<?php echo $_POST['idToUpdate']; ?>">
        <textarea id="text" name="nvtexte" rows="28"><?php echo $_POST['textPlace']; ?></textarea>
        <input id="textConfirm" type="submit" value="Envoyer">
      </form>

    </section>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
