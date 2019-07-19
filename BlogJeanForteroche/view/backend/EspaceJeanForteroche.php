
<?php $title = 'Espace Administrateur'; ?>

<?php ob_start(); ?>

  <script src="https://cdn.tiny.cloud/1/09ek4m511wa336se8p2mpq9rhastv5qdpqnofr5mwjc95yb6/tinymce/5/tinymce.min.js"></script>
  <script type="text/javascript" src="public/js/fr_FR.js"></script>
  <script>
      tinymce.init({selector:'textarea', language_url: '/public/js/fr_FR.js', language: 'fr_FR'});
  </script>
<?php $TinyMCE = ob_get_clean(); ?>

<?php ob_start(); ?>
    <section>
      <p class="titleAdmin">Création d'un Nouveau Chapitre</p>
      <form class="ecritureJean" method="post">
        <textarea id="text" name="text" rows="25" ></textarea>
        <input id="textConfirm" type="submit" value="Envoyer">
      </form>
    </section>
    <section class="chapterDone">
      <p class="titleAdmin">Chapitres déja réalisés : </p>
    </section>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
