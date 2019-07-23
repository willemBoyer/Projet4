
    <?php $title = 'Accueil'; ?>
    <?php $TinyMCE = false; ?>
<?php ob_start(); ?>
    <div class="descriptionHomeImg">
      <h1 class="descriptionHomeTitle">Bienvenue sur le site de publication en ligne de l'écrivain Jean rochefort</h2>
    </div>
    <section>
      <h2 class="sndTitle">Retrouvez les chapitres en ligne de son dernier roman :</h2>
      <div>
      </div>
    </section>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
