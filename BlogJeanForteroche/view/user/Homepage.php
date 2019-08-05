
    <?php $title = 'Accueil'; ?>
    <?php $TinyMCE = false; ?>

<?php ob_start(); ?>
    <div id="adminCo" class="adminCo">
      <i class="fas fa-user"></i>
      <p class="adminButtonCo">Admin</p>
    </div>
    <form id=formCo method="post" action="index.php?action='adminRedirect'">
      <input type = "hidden" name = "action" value = "connexion">
      <input id="idName" type="text" name="ID" value="Identifiant">
      <input id="idPassword" type="password" name="password" value="mdp">
      <input id="idConfirm" type="submit" value="confirmer">
    </form>
<?php $connexion = ob_get_clean(); ?>

<?php ob_start(); ?>
    <div class="descriptionHomeImg">
      <h1 class="descriptionHomeTitle">Bienvenue sur le site de publication en ligne de l'écrivain Jean rochefort</h2>
    </div>
    <section class="chapterHome">

      <div class="selectChapterHome">
        <h2 class="sndTitle">Retrouvez les chapitres en ligne de son dernier roman :</h2>
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

      <div class="autobio">
        <h2>Mon Autobiographie</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </section>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
