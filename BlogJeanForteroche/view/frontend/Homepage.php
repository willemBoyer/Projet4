
    <?php $title = 'Accueil'; ?>
    <?php $TinyMCE = false; ?>
<?php ob_start(); ?>
    <div class="descriptionHomeImg">
      <h1 class="descriptionHomeTitle">Bienvenue sur le site de publication en ligne de l'écrivain Jean rochefort</h2>
    </div>
    <section class="chapterHome">
      <h2 class="sndTitle">Retrouvez les chapitres en ligne de son dernier roman :</h2>
      <div>
        <?php
        while($data = $afficheChapitre->fetch())
        {
        ?>
          <div class="chapterZone">
            <h3>Chapitre n°<?php echo $data['idChapitre']; ?> :</h3>
            <div>
              <?php echo $data['texte']; ?>
            </div class="chapter">
        </div>
        <?php
        }
        $afficheChapitre->closeCursor();
        ?>
      </div>
    </section>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
