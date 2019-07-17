
    <?php $title = 'Accueil'; ?>

<?php ob_start(); ?>
    <div class="descriptionHomeImg">
      <h1 class="descriptionHomeTitle">Bienvenue sur le site de publication en ligne de l'écrivain Jean rochefort</h2>
    </div>
    <section>
    </section>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
